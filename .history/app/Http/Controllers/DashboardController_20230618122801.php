<?php

namespace App\Http\Controllers;

use App\Models\;
use App\Models\Kriteriaa;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $lokasi= ::count();
        $kriteriaa= Kriteriaa::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('lokasi','kriteriaa'))
        ;
    }
}
