<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::User()->level == 1) {
                return view('admin');
            } else {
                $top = DB::table('produk')
                    ->join('ikan', function ($join) {
                        $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
                    })
                    ->orderBy('created_at', 'DESC')
                    ->take(3)
                    ->get();
                $produk = DB::table('produk')
                    ->join('ikan', function ($join) {
                        $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
                    })
                    ->orderBy('created_at', 'DESC')
                    ->take(4)
                    ->get();
                return view('welcome', ['produk' => $produk, 'top' => $top]);
            }
        } else {
            return redirect('login');
        }
    }

    public function home()
    {
        $this->middleware('auth');
        $top = DB::table('produk')
            ->join('ikan', function ($join) {
                $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
            })
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        $produk = DB::table('produk')
            ->join('ikan', function ($join) {
                $join->on('ikan.id_ikan', '=', 'produk.id_ikan');
            })
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();
        return view('welcome', ['produk' => $produk, 'top' => $top]);
    }


}
