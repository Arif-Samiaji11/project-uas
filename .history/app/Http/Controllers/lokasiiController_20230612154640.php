<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lokasii;

class kriteriaController extends Controller {

    public function index() {
        return view('datalokasii', [
            'users' => lokasii::all(),
            'title' => 'Data lokasii'
        ]);
    }
    public function add() {
        return view('adddatalokasii',[
            'title' => 'Tambah Data lokasii'
        ]);
    }
    public function edit($id){

        $lokasii = lokasii::where('id', $id)->first();

        return view('editdatalokasii', [
            'lokasii' => $lokasii,
            'title' => 'Edit Data lokasii'
        ]);

    }

    public function update(Request $request, $id) {
        $luasalternatif      = $request->input('luasalternatif');
        $kriteria       = $request->input('kriteria');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');

        $lokasii = lokasii::where('id', $id)->first();
        $lokasii->luasalternatif     = $luasalternatif;
        $lokasii->kriteria     = $kriteria;
        $lokasii->luas_bangunan = $luas_bangunan;
        $lokasii->daya_listrik = $daya_listrik;

        $lokasii->save();

        return redirect()->to('/lokasii');
    }


    public function dashboard(){
        $lokasii= lokasii::count();

        return view('main', compact('lokasii'));

    }

    public function store(Request $request) {
        $luasalternatif       = $request->input('luasalternatif');
        $kriteria       = $request->input('kriteria');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');
        // TODO: Compare $password and $rePassword

        $lokasii           = new lokasii;
        $lokasii->luasalternatif     = $luasalternatif;
        $lokasii->kriteria     = $kriteria;
        $lokasii->luas_bangunan = $luas_bangunan; // Don't forget to encryp!s
        $lokasii->daya_listrik = $daya_listrik;

        $lokasii->save();

        return redirect()->to('/lokasii');
    }
    public function delete($id) {
        $lokasii = lokasii::where('id', $id)->first();
        $lokasii->delete();
        return redirect()->back();
    }
}
