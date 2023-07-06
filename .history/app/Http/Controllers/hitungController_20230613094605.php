<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\kriteria;
use App\Models\lokasii;
use Illuminate\Http\Request;

class hitungController extends Controller
{
    //public function hitung(Request $request){

         = Lokasii::sum('bobot');

        $bobot1 = 30/$lokasii;
        $bobot2 = 20/$lokasii;
        $bobot3 = 10/$lokasii;
        $bobot4 = 20/$lokasii;
        $bobot5 = 20/$lokasii;
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
        $widget5 = [
            'lokasii' => $bobot5,
        ];


        $kriteria = kriteria::get();
        $data = kriteria::orderby('nama', 'asc')->get();

        $minC1 = kriteria::min('C1');
        $maxC1 = kriteria::max('C1');
        $minC2 = kriteria::min('C2');
        $maxC2 = kriteria::max('C2');
        $minC3 = kriteria::min('C3');
        $maxC3 = kriteria::max('C3');
        $minC4 = kriteria::min('C4');
        $maxC4 = kriteria::max('C4');

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

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }


}
