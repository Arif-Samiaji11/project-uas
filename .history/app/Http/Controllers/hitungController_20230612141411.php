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


        $produk =::get();
        $data = produk::orderby('nama', 'asc')->get();

        $minC1 = produk::min('C1');
        $maxC1 = produk::max('C1');
        $minC2 = produk::min('C2');
        $maxC2 = produk::max('C2');
        $minC3 = produk::min('C3');
        $maxC3 = produk::max('C3');
        $minC4 = produk::min('C4');
        $maxC4 = produk::max('C4');
        $minC5 = produk::min('C5');
        $maxC5 = produk::max('C5');

        $C1min =[
            'produks' => $minC1,
        ];
        $C1max =[
            'produks' => $maxC1,
        ];
        $C2min =[
            'produks' => $minC2,
        ];
        $C2max =[
            'produks' => $maxC2,
        ];
        $C3min =[
            'produks' => $minC3,
        ];
        $C3max =[
            'produks' => $maxC3,
        ];
        $C4min =[
            'produks' => $minC4,
        ];
        $C4max =[
            'produks' => $maxC4,
        ];
        $C5min =[
            'produks' => $minC5,
        ];
        $C5max =[
            'produks' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'produks' => $hasil,
        ];

        return view('admin.waspas.hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }


}
