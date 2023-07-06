<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use App\Models\kriteriaa;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $lokasi= lokasi::count();
        $kriteriaa= kriteriaa::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('lokasi','kriteriaa'))
        ;
    }
}
