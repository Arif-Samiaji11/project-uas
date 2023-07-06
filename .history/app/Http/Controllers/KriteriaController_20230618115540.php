<?php

namespace App\Http\Controllers;

use App\Models\Kriteriaa;
use Illuminate\Http\Request;
use App\Models\User;

class KriteriaController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => Kriteriaa::all(),
            'title' => 'Data kriteriaa'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data kriteriaa'
        ]);
    }
    public function edit($id){

        $kriteriaa = Kriteriaa::where('id', $id)->first();

        return view('editdatakriteria', [
            'kriteriaa' => $kriteriaa,
            'title' => 'Edit Data kriteriaa'
        ]);

    }

    public function update(Request $request, $id) {
        $lokasialternatif      = $request->input('lokasialternatif$lokasialternatif');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');

        $kriteriaa = kriteriaa::where('id', $id)->first();
        $kriteriaa->lokasialternatif$lokasialternatif  = $lokasialternatif;
        $kriteriaa->kriteria     = $kriteria;
        $kriteriaa->bobot = $bobot;
        $kriteriaa->jenis = $jenis;

        $kriteriaa->save();

        return redirect()->to('/kriteriaa');
    }


    public function dashboard(){
        $kriteriaa= Kriteriaa::count();

        return view('main', compact('kriteriaa'));

    }

    public function store(Request $request) {
        $lokasialternatif       = $request->input('lokasialternatif$lokasialternatif');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $kriteriaa           = new Kriteriaa;
        $kriteriaa->lokasialternatif$lokasialternatif     = $lokasialternatif ;
        $kriteriaa->kriteria     = $kriteria;
        $kriteriaa->bobot = $bobot; // Don't forget to encryp!s
        $kriteriaa->jenis = $jenis;

        $kriteriaa->save();

        return redirect()->to('/kriteriaa');
    }
    public function delete($id) {
        $kriteriaa = Kriteriaa::where('id', $id)->first();
        $kriteriaa->delete();
        return redirect()->back();
    }
}
