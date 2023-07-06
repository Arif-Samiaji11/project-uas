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



        $kriteriaa = kriteriaa::get();
        $data = kriteriaa::orderby('kode', 'asc')->get();

        $minC1 = kriteriaa::min('alamat');
        $maxC1 = kriteriaa::max('alamat');
        $minC2 = kriteriaa::min('luas_lahan');
        $maxC2 = kriteriaa::max('luas_lahan');
        $minC3 = kriteriaa::min('luas_bangunan');
        $maxC3 = kriteriaa::max('luas_bangunan');
        $minC4 = kriteriaa::min('daya_listrik');
        $maxC4 = kriteriaa::max('daya_listrik');

        $C1min =[
            'kriteriaa' => $minC1,
        ];
        $C1max =[
            'kriteriaa' => $maxC1,
        ];
        $C2min =[
            'kriteriaa' => $minC2,
        ];
        $C2max =[
            'kriteriaa' => $maxC2,
        ];
        $C3min =[
            'kriteriaa' => $minC3,
        ];
        $C3max =[
            'kriteriaa' => $maxC3,
        ];
        $C4min =[
            'kriteriaa' => $minC4,
        ];
        $C4max =[
            'kriteriaa' => $maxC4,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'kriteriaa' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4','C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max'));
    }


}
