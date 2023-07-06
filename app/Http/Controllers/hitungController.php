<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\kriteriaa;
use App\Models\lokasi;
use Illuminate\Http\Request;

class hitungController extends Controller
{
    public function hitung(Request $request){

        $kriteriaa = kriteriaa::sum('bobot');

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



        $lokasi = lokasi::get();
        $data = lokasi::orderby('kode', 'asc')->get();

        $minC1 = lokasi::min('alamat');
        $maxC1 = lokasi::max('alamat');
        $minC2 = lokasi::min('luas_lahan');
        $maxC2 = lokasi::max('luas_lahan');
        $minC3 = lokasi::min('luas_bangunan');
        $maxC3 = lokasi::max('luas_bangunan');
        $minC4 = lokasi::min('daya_listrik');
        $maxC4 = lokasi::max('daya_listrik');

        $C1min =[
            'lokasi' => $minC1,
        ];
        $C1max =[
            'lokasi' => $maxC1,
        ];
        $C2min =[
            'lokasi' => $minC2,
        ];
        $C2max =[
            'lokasi' => $maxC2,
        ];
        $C3min =[
            'lokasi' => $minC3,
        ];
        $C3max =[
            'lokasi' => $maxC3,
        ];
        $C4min =[
            'lokasi' => $minC4,
        ];
        $C4max =[
            'lokasi' => $maxC4,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'lokasi' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4','C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max'));
    }


}
