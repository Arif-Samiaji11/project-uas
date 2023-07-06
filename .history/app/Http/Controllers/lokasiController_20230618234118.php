<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lokasii;

class lokasiController extends Controller {

    public function index() {
        return view('datalokasi', [
            'users' => Lokasi::all(),
            'title' => 'Data lokasii'
        ]);
    }
    public function add() {
        return view('adddatalokasi',[
            'title' => 'Tambah Data lokasii'
        ]);
    }
    public function edit($id){

        $lokasii = Lokasi::where('id', $id)->first();

        return view('editdatalokasi', [
            'lokasii' => $lokasii,
            'title' => 'Edit Data lokasii'
        ]);

    }

    public function update(Request $request, $id) {
        $alamat      = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');

        $lokasii = Lokasi::where('id', $id)->first();
        $lokasii->alamat     = $alamat;
        $lokasii->luas_lahan     = $luas_lahan;
        $lokasii->luas_bangunan = $luas_bangunan;
        $lokasii->daya_listrik = $daya_listrik;

        $lokasii->save();

        return redirect()->to('/lokasii');
    }


    public function dashboard(){
        $lokasii= Lokasi::count();

        return view('main', compact('lokasii'));

    }

    public function store(Request $request) {
        $alamat       = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');
        // TODO: Compare $password and $rePassword

        $lokasii           = new Lokasi;
        $lokasii->alamat     = $alamat;
        $lokasii->luas_lahan     = $luas_lahan;
        $lokasii->luas_bangunan = $luas_bangunan; // Don't forget to encryp!s
        $lokasii->daya_listrik = $daya_listrik;

        $lokasii->save();

        return redirect()->to('/lokasii');
    }
    public function delete($id) {
        $lokasii = Lokasi::where('id', $id)->first();
        $lokasii->delete();
        return redirect()->back();
    }
}
