<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Lokasii;
use Illuminate\Http\Request;

class hitungController extends Controller
{
    public function hitung(Request $request){

        $lokasii = Lokasii::sum('bobot');

        $bobot1 = 30/$lokasii;
        $bobot2 = 20/$lokasii;
        $bobot3 = 10/$lokasii;
        $bobot4 = 40/$lokasii;
        $widget1 = [
            'lokasii' => $bobot1,
        ];
        $widget2 = [
            'lokasii' => $bobot2,
        ];
        $widget3 = [
            'lokasii' => $bobot3,
        ];
        $widget4 = [
            'lokasii' => $bobot4,
        ];



        $kriteria = kriteria::get();
        $data = kriteria::orderby('alamat', 'asc')->get();

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
