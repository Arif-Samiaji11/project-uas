<?php

namespace App\Http\Controllers;

use App\Models\kriteriaa;
use App\Models\Kriteriaa;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $lokasi= kriteriaa::count();
        $kriteriaa= Kriteriaa::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('lokasi','kriteriaa'))
        ;
    }
}
