<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Kriteriaa;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class hitungController extends Controller
{
    public function hitung(Request $request){

        $kriteriaa = Lokasi::sum('bobot');

        $bobot1 = 30/$kriteriaa;
        $bobot2 = 20/$kriteriaa;
        $bobot3 = 10/$kriteriaa;
        $bobot4 = 40/$kriteriaa;
        $widget1 = [
            'kriteriaa' => $bobot1,
        ];
        $widget2 = [
            'kriteriaa' => $bobot2,
        ];
        $widget3 = [
            'kriteriaa' => $bobot3,
        ];
        $widget4 = [
            'kriteriaa' => $bobot4,
        ];



        $kriteria = kriteria::get();
        $data = kriteria::orderby('kode', 'asc')->get();

        $minC1 = kriteria::min('alamat');
        $maxC1 = kriteria::max('alamat');
        $minC2 = kriteria::min('luas_lahan');
        $maxC2 = kriteria::max('luas_lahan');
        $minC3 = kriteria::min('luas_bangunan');
        $maxC3 = kriteria::max('luas_bangunan');
        $minC4 = kriteria::min('daya_listrik');
        $maxC4 = kriteria::max('daya_listrik');

        $C1min =[
            'kriteria' => $minC1,
        ];
        $C1max =[
            'kriteria' => $maxC1,
        ];
        $C2min =[
            'kriteria' => $minC2,
        ];
        $C2max =[
            'kriteria' => $maxC2,
        ];
        $C3min =[
            'kriteria' => $minC3,
        ];
        $C3max =[
            'kriteria' => $maxC3,
        ];
        $C4min =[
            'kriteria' => $minC4,
        ];
        $C4max =[
            'kriteria' => $maxC4,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'kriteria' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4','C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max'));
    }


}
