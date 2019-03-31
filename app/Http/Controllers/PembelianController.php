<?php

namespace App\Http\Controllers;

use App\Pembelian;
use App\Produk;
use App\Supplier;
use Cart;
use Illuminate\Http\Request;
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
        $gambar = time() . '-' . $request->gambar->getClientOriginalName();
        $request->file('gambar')->storeAs('public/gambar', $gambar);
        $add = Cart::add([
            'id' => $request->id,
            'price' => $request->harga_beli,
            'quantity' => $request->jumlah,
            'name' => $request->nama_produk,
            'attributes' => [
                'deskripsi' => $request->deskripsi,
                'harga_jual' => $request->harga_jual,
                'gambar' => $gambar
            ]
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
        return view('admin_tambah_pengadaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Cart::getContent();
        foreach ($data as $item) {
            $produk = new Produk();
            $produk->id_produk = $item->id;
            $produk->id_supplier = $request->supplier;
            $produk->nama_produk = $item->name;
            $produk->tanggal = $request->tanggal;
            $produk->jumlah = $item->quantity;
            $produk->harga_beli = $item->price;
            $produk->harga_jual = $item->attributes['harga_jual'];
            $produk->deskripsi = $item->attributes['deskripsi'];
            $produk->gambar = $item->attributes['gambar'];
            $produk->save();
        }
        Cart::clear();
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }

    public function clear()
    {
        $gambar = Cart::getContent();
        foreach ($gambar as $item) {
            Storage::delete('public/gambar/' . $item->attributes['gambar'] . '');
        }
        Cart::clear();
        return redirect('pembelian');
    }
}
