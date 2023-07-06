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
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');

        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->Alamat  = $alamat;
        $kriteria->luas_lahan     = $luas_lahan;
        $kriteria->luas_bangunan = $luas_bangunan;
        $kriteria->daya_listrik = $daya_listrik;

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
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik$daya_listrik');
        // TODO: Compare $password and $rePassword

        $kriteria           = new kriteria;
        $kriteria->alamat     = $alamat ;
        $kriteria->kriteria     = $luas_lahan;
        $kriteria->luas_bangunan = $luas_bangunan; // Don't forget to encryp!s
        $kriteria->daya_listrik$daya_listrik = $daya_listrik;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }
    public function delete($id) {
        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
    }
}
