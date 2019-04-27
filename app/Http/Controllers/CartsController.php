<?php

namespace App\Http\Controllers;

use App\Carts;
use App\Produk;
use Illuminate\Http\Request;
use Cart;
use Auth;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $data = Cart::getContent();
            return view('cart', ['data' => $data]);
        } else {
            return redirect('login');
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
    public function store(Request $request, $id)
    {
        if (Auth::check()) {
            $produk = Produk::where('id_produk', $id)
                ->join('ikan', function ($join) {
                    $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
                })
                ->first();
            $add = Cart::add([
                'id' => $id,
                'price' => $produk->harga_jual,
                'name' => $produk->nama_produk,
                'quantity' => $request->jumlah,
                'attributes' => [
                    'gambar' => $produk->gambar
                ]
            ]);
            if ($add) {
                return redirect('produk');
            }
        } else {
            return redirect('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Carts $carts
     * @return \Illuminate\Http\Response
     */
    public function show(Carts $carts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Carts $carts
     * @return \Illuminate\Http\Response
     */
    public function edit(Carts $carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Carts $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carts $carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Carts $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carts $carts)
    {
        //
    }

    public function clear()
    {
        Cart::clear();
        return redirect('cart');
    }
}
