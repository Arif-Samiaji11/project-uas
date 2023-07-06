<?php

namespace App\Http\Controllers;
use app\Models\kriteria;
use app\Models\lokasii;
use Illuminate\Http\Request;

class hitung extends Controller
{
    public function hitung(Request $request){

        $kriteria = kriteria::sum('bobot');

        $bobot1 = 2/$kriteria;
        $bobot2 = 2/$kriteria;
        $bobot3 = 1/$kriteria;
        $bobot4 = 2/$kriteria;
        $bobot5 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $ = lokasii::get();
        $data = ::orderby('nama', 'asc')->get();

        $minC1 = ::min('C1');
        $maxC1 = ::max('C1');
        $minC2 = ::min('C2');
        $maxC2 = ::max('C2');
        $minC3 = ::min('C3');
        $maxC3 = ::max('C3');
        $minC4 = ::min('C4');
        $maxC4 = ::max('C4');
        $minC5 = ::min('C5');
        $maxC5 = ::max('C5');

        $C1min =[
            's' => $minC1,
        ];
        $C1max =[
            's' => $maxC1,
        ];
        $C2min =[
            's' => $minC2,
        ];
        $C2max =[
            's' => $maxC2,
        ];
        $C3min =[
            's' => $minC3,
        ];
        $C3max =[
            's' => $maxC3,
        ];
        $C4min =[
            's' => $minC4,
        ];
        $C4max =[
            's' => $maxC4,
        ];
        $C5min =[
            's' => $minC5,
        ];
        $C5max =[
            's' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            's' => $hasil,
        ];

        return view('admin.waspas.hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }


}
