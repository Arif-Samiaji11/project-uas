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

        return view('editdatakriteria', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data kriteria'
        ]);

    }

    public function update(Request $request, $id) {
        $alamat      = $request->input('alamat$alamat');
        $luas_lahan       = $request->input('luas_bangunan');
        $luas_bangunan   = $request->input('luas_bangu');
        $jenis = $request->input('jenis');

        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->alamat$alamat  = $alamat;
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
        $alamat       = $request->input('alamat$alamat');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $kriteria           = new kriteria;
        $kriteria->alamat$alamat     = $alamat ;
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
