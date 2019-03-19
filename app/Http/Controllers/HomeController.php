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
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::User()->level == 1) {
            return view('admin');
        } else {
            $produk = DB::table('produk')
                ->orderBy('created_at', 'DESC')
                ->take(4)
                ->get();
            return view('welcome', ['produk' => $produk]);
        }
    }

    public function home()
    {
        $produk = DB::table('produk')
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();
        return view('welcome', ['produk' => $produk]);
    }
}
