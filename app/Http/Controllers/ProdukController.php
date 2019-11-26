<?php

namespace App\Http\Controllers;

use App\Ikan;
use App\Produk;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Cart;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('produk')
            ->join('ikan', function ($join) {
                $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
            })
            ->orderBy('created_at', 'DESC')
            ->get();
        if (Auth::check()) {
            if (Auth::User()->level == 1) {
                return view('admin_produk', ['produk' => $produk]);
            } else {
                return view('produk', ['produk' => $produk]);
            }
        } else {
            return view('produk', ['produk' => $produk]);
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
        return view('admin_tambah_produk', ['ikan' => $ikan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ikan = Ikan::where('id_ikan', $request->ikan)
            ->first();
        $gambar = time() . '-' . $request->gambar->getClientOriginalName();
        $request->file('gambar')->storeAs('public/gambar', $gambar);
        $produk = new Produk();
        $produk->id_ikan = $request->ikan;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->jumlah;
        $produk->jumlah_ikan = $request->jumlah_ikan;
        $produk->tanggal = date('Y-m-d');
        $produk->deskripsi = $request->deskripsi;
        $produk->gambar = $gambar;
        $produk->save();
        Ikan::where('id_ikan', $request->ikan)
            ->update([
                'stok' => $ikan->stok - $request->jumlah_ikan
            ]);
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::where('id_produk', $id)
//            ->join('ikan', function ($join) {
//                $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
//            })
            ->first();
        if (Auth::user()->level == 1) {
            return view('admin_detail_produk', compact('produk'));
        } else {
            return view('detail_produk', ['produk' => $produk]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::where('id_produk', $id)
            ->join('ikan', function ($join) {
                $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
            })
            ->first();
        $ikan = Ikan::all();
        return view('admin_edit_produk', ['produk' => $produk, 'ikan' => $ikan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
