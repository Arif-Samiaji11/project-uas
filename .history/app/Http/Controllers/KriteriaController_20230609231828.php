<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;

class kriteriaController extends Controller {

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
        $alamat      = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');

        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->alamat     = $geografis;
        $kriteria->luas_lahan     = $luas_lahan;
        $kriteria->biaya = $biaya;
        $kriteria->sarana_dan_prasarana = $sarana_dan_prasarana;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria= kriteria::count();

        return view('main', compact('kriteria'));

    }

    public function store(Request $request) {
        $geografis       = $request->input('geografis');
        $penduduk       = $request->input('penduduk');
        $biaya   = $request->input('biaya');
        $sarana_dan_prasarana = $request->input('sarana_dan_prasarana');
        // TODO: Compare $password and $rePassword

        $kriteria           = new kriteria;
        $kriteria->geografis     = $geografis;
        $kriteria->penduduk     = $penduduk;
        $kriteria->biaya = $biaya; // Don't forget to encryp!s
        $kriteria->sarana_dan_prasarana = $sarana_dan_prasarana;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }
    public function delete($id) {
        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
    }
}
