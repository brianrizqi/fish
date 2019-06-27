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
        $karyawan = DB::table(
            'karyawan'
        )
            ->get();
        $waktu = DB::table('waktu')
            ->join('job', function ($join) {
                $join->on('job.id_job', '=', 'waktu.id_job');
            })
            ->join('karyawan', function ($join) {
                $join->on('karyawan.id_karyawan', '=', 'waktu.id_karyawan');
            })
            ->orderBy('waktu.id_job', "ASC")
            ->get();
        return view('admin_penjadwalan', ['mesin' => $mesin, 'job' => $job, 'waktu' => $waktu]);
    }

    public function result()
    {
        $jumlahJob = 5;
        $proses[] = array();
        $proses[0] = "Pemotongan";
        $proses[1] = "Penggilingan";
        $proses[2] = "Pencampuran";
        $proses[3] = "Pemasakan";
        $proses[4] = "Penggorengan";

        $job [$jumlahJob - 1][] = array();
        $job[0] = array(10, 5, 0, 12, 0);
        $job[1] = array(0, 7, 0, 0, 7);
        $job[2] = array(0, 0, 10, 0, 5);
        $job[3] = array(9, 0, 11, 15, 0);
        $job[4] = array(7, 0, 7, 0, 0);
        $jumlahProses = 5;
        $iterasi = 0;
        $maxIterasi = 1000000;
        $suhuSekarang = 10000.0;
        $alpha = 0.955;

        $solusi[$jumlahProses - 1] = array();
        for ($i = 0; $i < $jumlahProses; $i++) {
            $w = rand(0, $jumlahJob);
            do {
                $w += 1;
                if ($w > $jumlahJob - 1) {
                    $w = 0;
                }
            } while ($job[$w][$i] == 0);
            $solusi[$i] = $w;
        }

        $energi = $this->hitungEnergi($solusi, $job);
        $solusiTerbaik = $solusi;
        $energiTerbaik = $energi;
        $solusiBerikutnya = array();
        $energiSolusiBerikutnya = 0;

//        echo "Solusi Awal : ";
        for ($i = 0; $i < count($solusi) - 1; $i++) {
//            echo $solusi[$i] . " ";
        }
//        echo ", Nilai energi awal : " . $energi;
//        echo "<br>";
        $array = array();
        do {
            $solusiBerikutnya = $this->kemungkinanSolusiBerikutnya($solusi, $job);
            $energiSolusiBerikutnya = $this->hitungEnergi($solusiBerikutnya, $job);

            if ($energiSolusiBerikutnya < $energi) {
                $solusiTerbaik = $solusiBerikutnya;
                $energiTerbaik = $energiSolusiBerikutnya;
//                echo "<br>";
//                echo "Iterasi ke " . $iterasi . " , pada suhu " . $suhuSekarang;
//                echo "<br>";
//                echo "Solusi terbaik yang baru :";
                for ($i = 0; $i < count($solusiTerbaik) - 1; $i++) {
//                    echo $solusiTerbaik[$i] . " ";
                }
//                echo " , dengan Nilai Energi = " . $energiTerbaik;

//                echo "<br>";
            }

            $p = rand(0, 100) / 10;

            $kemungkinanPenerimaanSolusiBaru = 0.0;
            if ($energiSolusiBerikutnya < $energi) {
                $kemungkinanPenerimaanSolusiBaru = 1.0;
            } else {
                $kemungkinanPenerimaanSolusiBaru = ($energi - $energiSolusiBerikutnya) / $suhuSekarang;
            }

            if ($kemungkinanPenerimaanSolusiBaru > $p) {
                $solusi = $solusiBerikutnya;
                $energi = $energiSolusiBerikutnya;
            }

            $suhuSekarang = $suhuSekarang * $alpha;
            $iterasi += 1;
        } while ($iterasi < $maxIterasi && $suhuSekarang > 0.0001);
//        echo "<br>";
//        echo "Suhu sudah turun mendekati 0 derajat pada iterasi ke " . $iterasi;
//        echo "<br>";
//        echo "<br>";
//        echo "Solusi terbaik yang ditemukan : ";
        for ($i = 0; $i < count($solusiTerbaik); $i++) {
            $array[$i] = $solusiTerbaik[$i];
//            echo $solusiTerbaik[$i] . " ";
        }
        $array = $solusiTerbaik;
//        echo ", dengan nilai energi = " . $energiTerbaik;
//        echo "<br>";
        for ($i = 0; $i < count($solusiTerbaik); $i++) {
            $w = $solusiTerbaik[$i];
//            echo "Proses " . $proses[$i] . " diberikan kepada job " . ($w) . " dengan waktu " . $job[$w][$i];
//            echo "<br>";
        }
        return view('admin_hasil_penjadwalan', ['solusiawal' => $solusi, 'energiawal' => $energi, 'solusiterbaik' => $array, 'energiterbaik' => $energiTerbaik]);
    }

    private function hitungEnergi($solusi, $data)
    {
        $hasil = 0.0;
        for ($i = 0; $i < count($solusi) - 1; $i++) {
            $job = $solusi[$i];
            $waktu = $data[$job][$i];
            $hasil += $waktu;
        }

        $jumlahJob = count($data);
        $jumlaProses [$jumlahJob - 1] = array();
        for ($i = 0; $i < count($solusi); $i++) {
            $job = $solusi[$i];
            $jumlaProses[$job] = 1;
            if ($jumlaProses[$job] > 1) {
                $hasil += 5;
            }
            $jumlaProses[$job]++;
        }
        return $hasil;
    }

    private function kemungkinanSolusiBerikutnya($solusiSekarang, $data)
    {
        $jumlahJob = count($data);
        $jumlahProses = count($data[0]);
        $solusi[$jumlahJob - 1] = array();

        $proses = rand(0, $jumlahProses);
        $job = rand(0, $jumlahJob);

        do {
            $job += 1;
            if ($job > $jumlahJob - 1) {
                $job = 0;
            }
        } while ($data[$job][$proses] = 0.0);
        $solusi = $solusiSekarang;
        $solusi[$proses] = $job;
        return $solusi;
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
