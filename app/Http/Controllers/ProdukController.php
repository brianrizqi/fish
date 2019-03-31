<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $produk = Produk::where('id_produk', $id)
            ->first();
        $add = Cart::add([
            'id' => $id,
            'price' => $produk->harga_jual,
            'name' => $produk->nama_produk,
            'quantity' => $request->jumlah
        ]);
        if ($add) {
            return redirect('gambar');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::where('id_produk', $id)->first();
        return view('detail_produk', ['produk' => $produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
