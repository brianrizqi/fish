<?php

namespace App\Http\Controllers;

use App\Penjadwalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjadwalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesin = DB::table('mesin')
            ->get();
        $job = DB::table('job')
            ->get();
        $urutan = DB::table('urutan_proses')
            ->join('job', function ($join) {
                $join->on('job.id_job', '=', 'urutan_proses.id_job');
            })
            ->join('mesin as m1', function ($join) {
                $join->on('m1.id_mesin', '=', 'urutan_proses.proses_1');
            })
            ->join('mesin as m2', function ($join) {
                $join->on('m2.id_mesin', '=', 'urutan_proses.proses_2');
            })
            ->join('mesin as m3', function ($join) {
                $join->on('m3.id_mesin', '=', 'urutan_proses.proses_3');
            })
            ->join('mesin as m4', function ($join) {
                $join->on('m4.id_mesin', '=', 'urutan_proses.proses_4');
            })
            ->select('urutan_proses.total_proses', 'job.job', 'm1.mesin as mesin1', 'm2.mesin as mesin2', 'm4.mesin as mesin4', 'm3.mesin as mesin3')
            ->get();
        $waktu = DB::table('waktu_proses')
            ->join('job', function ($join) {
                $join->on('job.id_job', '=', 'waktu_proses.id_job');
            })
            ->get();
        return view('admin_penjadwalan', ['mesin' => $mesin, 'job' => $job, 'urutan' => $urutan, 'waktu' => $waktu]);
    }

    public function result()
    {
        return view('admin_hasil_penjadwalan');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Penjadwalan $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Penjadwalan $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Penjadwalan $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Penjadwalan $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjadwalan $penjadwalan)
    {
        //
    }
}
