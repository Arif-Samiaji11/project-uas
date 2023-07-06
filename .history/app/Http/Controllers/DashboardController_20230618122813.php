<?php

namespace App\Http\Controllers;

use App\Models\kriteriaaa;
use App\Models\lokasi;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $lokasi= kriteriaaa::count();
        $kriteriaa= lokasi::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('lokasi','kriteriaa'))
        ;
    }
}
