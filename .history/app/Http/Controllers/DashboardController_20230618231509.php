<?php

namespace App\Http\Controllers;

use App\Models\kriteriaa;
use App\Models\lokasi;
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
