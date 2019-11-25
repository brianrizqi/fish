<?php

namespace App\Http\Controllers;

use App\DetailPenjualan;
use App\Penjualan;
use App\Produk;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::User()->level == 1) {
            $penjualan = Penjualan::join('users', function ($join) {
                $join->on('users.id', '=', 'penjualan.id_user');
            })
                ->orderBy('penjualan.created_at', 'DESC')
                ->get();
            return view('admin_penjualan', ['penjualan' => $penjualan]);
        } else {
            $penjualan = Penjualan::where('id_user', Auth::User()->id)
                ->get();
            return view('penjualan', ['penjualan' => $penjualan]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Cart::getContent();
        $total = 0;
        foreach ($data as $datum) {
            $total += $datum->quantity * $datum->price;
        }
        $penjualan = new Penjualan();
        $penjualan->id_user = Auth::User()->id;
        $penjualan->tanggal = date("Y-m-d");
        $penjualan->total_harga = $total;
        $penjualan->save();
        $id_penjualan = DB::table('penjualan')
            ->where('id_user', Auth::User()->id)
            ->orderBy('created_at', 'DESC')
            ->take(1)
            ->first();
        foreach ($data as $item) {
            $detail = new DetailPenjualan();
            $detail->id_penjualan = $id_penjualan->id_penjualan;
            $detail->id_produk = $item->id;
            $detail->jumlah = $item->quantity;
            $detail->tanggal = date("Y-m-d");
            $detail->total_harga = $item->quantity * $item->price;
            $detail->save();
        }
        Cart::clear();
        return redirect('penjualan');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Penjualan $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::User()->level == 1) {
            $detail = DetailPenjualan::join('produk', function ($join) {
                $join->on('produk.id_produk', '=', 'detail_penjualan.id_produk');
            })
                ->where('id_penjualan', $id)
                ->get();
            $status = Penjualan::where('id_penjualan', $id)
                ->first();
            return view('admin_detail_penjualan', [
                'detail' => $detail,
                'id' => $id,
                'status' => $status
            ]);
        } else {
            $detail = DetailPenjualan::join('produk', function ($join) {
                $join->on('produk.id_produk', '=', 'detail_penjualan.id_produk');
            })
                ->where('id_penjualan', $id)
                ->select('nama_produk', 'detail_penjualan.jumlah', 'total_harga', 'harga_jual')
                ->get();
            return view('detail_penjualan', ['detail' => $detail]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Penjualan $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Penjualan $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Penjualan $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::where('id_penjualan', $id);
        $penjualan->delete();
        return redirect('penjualan');
    }

    public function verif($id)
    {
        $detail = DetailPenjualan::where('id_penjualan', $id)
            ->get();
        foreach ($detail as $item) {
            $stok = Produk::where('id_produk', $item->id_produk)
                ->first();
            if ($stok->stok < $item->jumlah) {
                return abort(404);
            } else {
                $produk = Produk::where('id_produk', $item->id_produk)
                    ->update([
                        'stok' => $stok->stok - $item->jumlah
                    ]);
            }
        }
        $penjualan = Penjualan::where('id_penjualan', $id)
            ->update([
                'status' => 1
            ]);
        return redirect('penjualan');
    }
}
