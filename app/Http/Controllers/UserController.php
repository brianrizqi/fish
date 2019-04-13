<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UserController extends Controller
{
    public function telegram()
    {
        return view('telegram');
    }

    public function store(Request $request)
    {
        $tele = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'id_telegram' => $request->id_telegram
            ]);
        return redirect('home');
    }
}
