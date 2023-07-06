<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lok;

class kriteriaController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => lok::all(),
            'title' => 'Data lok'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data lok'
        ]);
    }
    public function edit($id){

        $lok = lok::where('id', $id)->first();

        return view('editdatakriteria', [
            'lok' => $lok,
            'title' => 'Edit Data lok'
        ]);

    }

    public function update(Request $request, $id) {
        $alamat      = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');

        $lok = lok::where('id', $id)->first();
        $lok->alamat     = $alamat;
        $lok->luas_lahan     = $luas_lahan;
        $lok->luas_bangunan = $luas_bangunan;
        $lok->daya_listrik = $daya_listrik;

        $lok->save();

        return redirect()->to('/lok');
    }


    public function dashboard(){
        $lok= lok::count();

        return view('main', compact('lok'));

    }

    public function store(Request $request) {
        $alamat       = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');
        // TODO: Compare $password and $rePassword

        $lok           = new lok;
        $lok->alamat     = $alamat;
        $lok->luas_lahan     = $luas_lahan;
        $lok->luas_bangunan = $luas_bangunan; // Don't forget to encryp!s
        $lok->daya_listrik = $daya_listrik;

        $lok->save();

        return redirect()->to('/lok');
    }
    public function delete($id) {
        $lok = lok::where('id', $id)->first();
        $lok->delete();
        return redirect()->back();
    }
}
