<?php

namespace App\Http\Controllers;

use App\DetailPembelian;
use App\Ikan;
use App\Pembelian;
use App\Produk;
use App\Supplier;
use Carbon\Carbon;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PembelianController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        $data = Cart::getContent();
        return view('admin_pembelian', ['data' => $data, 'supplier' => $supplier]);
    }

    public function tambah_ikan(Request $request)
    {
        $ikan = Ikan::where('id_ikan', $request->nama_produk)
            ->first();
        $add = Cart::add([
            'id' => $request->nama_produk,
            'price' => $request->harga_beli,
            'quantity' => $request->jumlah,
            'name' => $ikan->ikan
        ]);
        if ($add) {
            return redirect('pembelian');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ikan = Ikan::all();
        return view('admin_tambah_pengadaan', ['ikan' => $ikan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelian = new Pembelian();
        $pembelian->id_supplier = $request->supplier;
        $pembelian->tanggal = date("Y-m-d");
        $pembelian->biaya_kirim = $request->biaya_kirim;
        $pembelian->total = $request->total + $request->biaya_kirim;
        $pembelian->save();
        $idpembelian = DB::table('pembelian')
            ->where('id_supplier', $request->supplier)
            ->orderBy('created_at', 'DESC')
            ->take(1)
            ->first();
        $data = Cart::getContent();
        foreach ($data as $item) {
            $stok = Ikan::where("id_ikan", $item->id)
                ->first();
            $ikan = Ikan::where('id_ikan', $item->id)
                ->update([
                    'stok' => $stok->stok + $item->quantity,
                ]);
            $detail = new DetailPembelian();
            $detail->id_pembelian = $idpembelian->id_pembelian;
            $detail->id_ikan = $item->id;
            $detail->jumlah = $item->quantity;
            $detail->harga_beli = $item->price;
            $detail->total_harga = $item->quantity * $item->price;
            $detail->save();
        }
        Cart::clear();
        return redirect('pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::where('id_pembelian', $id)
            ->first();
//        return $pembelian;
        $pembelian->deleted_at = Carbon::now();
        $pembelian->save();
        return redirect()->route('pembelian');
    }

    public function clear()
    {
//        $gambar = Cart::getContent();
//        foreach ($gambar as $item) {
//            Storage::delete('public/gambar/' . $item->attributes['gambar'] . '');
//        }
        Cart::clear();
        return redirect('pembelian');
    }

    public function pengadaan()
    {
        $pembelian = Pembelian::join('suppliers', function ($join) {
            $join->on('suppliers.id_supplier', '=', 'pembelian.id_supplier');
        })
            ->get();
        return view('admin_pengadaan', ['pembelian' => $pembelian]);
    }

    public function detail($id)
    {
        $detail = DetailPembelian::join('ikan', function ($join) {
            $join->on('ikan.id_ikan', '=', 'detail_pembelian.id_ikan');
        })
            ->where('id_pembelian', $id)
            ->get();
        return view('admin_detail_pembelian', ['detail' => $detail]);
    }
}
