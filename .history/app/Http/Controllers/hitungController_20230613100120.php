<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\kriteria;
use App\Models\Lokasii;
use Illuminate\Http\Request;

class hitungController extends Controller
{
    public function hitung(Request $request){

        $lokasii = Lokasii::sum('bobot');

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


        $Kriteria = Kriteria::get();
        $data = d::orderby('lokasialternatif', 'asc')->get();

        $minC1 = d::min('C1');
        $maxC1 = d::max('C1');
        $minC2 = d::min('C2');
        $maxC2 = d::max('C2');
        $minC3 = d::min('C3');
        $maxC3 = d::max('C3');
        $minC4 = d::min('C4');
        $maxC4 = d::max('C4');
        $minC5 = d::min('C5');
        $maxC5 = d::max('C5');


        $C1min =[
            'lokasii' => $minC1,
        ];
        $C1max =[
            'lokasii' => $maxC1,
        ];
        $C2min =[
            'lokasii' => $minC2,
        ];
        $C2max =[
            'lokasii' => $maxC2,
        ];
        $C3min =[
            'lokasii' => $minC3,
        ];
        $C3max =[
            'lokasii' => $maxC3,
        ];
        $C4min =[
            'lokasii' => $minC4,
        ];
        $C4max =[
            'lokasii' => $maxC4,
        ];
        $C5min =[
            'lokasii' => $minC5,
        ];
        $C5max =[
            'lokasii' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'lokasii' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }


}
