<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $lokasi= lokasi::count();
        $kriteria= Kriteria::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('lokasi','kriteria'))
        ;
    }
}
