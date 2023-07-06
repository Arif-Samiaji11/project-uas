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


        $Kriteria = lokasii::get();
        $data = lokasii::orderby('lokasialternatif', 'asc')->get();

        $minC1 = lokasii::min('C1');
        $maxC1 = lokasii::max('C1');
        $minC2 = lokasii::min('C2');
        $maxC2 = lokasii::max('C2');
        $minC3 = lokasii::min('C3');
        $maxC3 = lokasii::max('C3');
        $minC4 = lokasii::min('C4');
        $maxC4 = lokasii::max('C4');
        $minC5 = lokasii::min('C5');
        $maxC5 = lokasii::max('C5');


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