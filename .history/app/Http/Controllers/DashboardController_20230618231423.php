<?php

namespace App\Http\Controllers;

use App\Models\Kriteriaa;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $kriteriaa= kriteriaa::count();
        $lokasi= lokasi::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('kriteriaa','lokasi'))
        ;
    }
}
