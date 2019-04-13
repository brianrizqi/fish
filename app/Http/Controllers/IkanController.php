<?php

namespace App\Http\Controllers;

use App\Ikan;
use Illuminate\Http\Request;

class IkanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ikan = Ikan::all();
        return view('admin_ikan', ['ikan' => $ikan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_tambah_ikan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ikan = new Ikan();
        $ikan->ikan = $request->ikan;
        $ikan->save();
        return redirect('ikan');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Ikan $ikan
     * @return \Illuminate\Http\Response
     */
    public function show(Ikan $ikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Ikan $ikan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ikan = Ikan::where('id_ikan', $id)
            ->first();
        return view('admin_edit_ikan', ['ikan' => $ikan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Ikan $ikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ikan = Ikan::where('id_ikan', $id)
            ->update([
                'ikan' => $request->ikan
            ]);
        return redirect('ikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Ikan $ikan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ikan = Ikan::where('id_ikan', $id);
        $ikan->delete();
        return redirect('ikan');
    }
}
