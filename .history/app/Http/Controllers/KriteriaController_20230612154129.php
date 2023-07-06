<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;
use App\Models\User;

class lokasiiController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => kriteria::all(),
            'title' => 'Data kriteria'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data kriteria'
        ]);
    }
    public function edit($id){

        $kriteria = kriteria::where('id', $id)->first();

        return view('editdatalokasii', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data kriteria'
        ]);

    }

    public function update(Request $request, $id) {
        $lokasialternatif      = $request->input('lokasialternatif');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');

        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->lokasialternatif  = $lokasialternatif;
        $kriteria->kriteria     = $kriteria;
        $kriteria->bobot = $bobot;
        $kriteria->jenis = $jenis;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria= kriteria::count();

        return view('main', compact('kriteria'));

    }

    public function store(Request $request) {
        $lokasialternatif       = $request->input('lokasialternatif');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $kriteria           = new kriteria;
        $kriteria->lokasialternatif     = $lokasialternatif ;
        $kriteria->kriteria     = $kriteria;
        $kriteria->bobot = $bobot; // Don't forget to encryp!s
        $kriteria->jenis = $jenis;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }
    public function delete($id) {
        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
    }
}
