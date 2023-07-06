<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lokasi;

class lokasiController extends Controller {

    public function index() {
        return view('datalokasii', [
            'users' => Lokasi::all(),
            'title' => 'Data lokasi'
        ]);
    }
    public function add() {
        return view('adddatalokasi',[
            'title' => 'Tambah Data lokasi'
        ]);
    }
    public function edit($id){

        $lokasi = Lokasi::where('id', $id)->first();

        return view('editdatalokasii', [
            'lokasi' => $lokasi,
            'title' => 'Edit Data lokasi'
        ]);

    }

    public function update(Request $request, $id) {
        $kode      = $request->input('kode');
        $alamat      = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');

        $lokasi = Lokasi::where('id', $id)->first();
        $lokasi->kode     = $kode;
        $lokasi->alamat     = $alamat;
        $lokasi->luas_lahan     = $luas_lahan;
        $lokasi->luas_bangunan = $luas_bangunan;
        $lokasi->daya_listrik = $daya_listrik;

        $lokasi->save();

        return redirect()->to('/lokasi');
    }


    public function dashboard(){
        $lokasi= Lokasi::count();

        return view('main', compact('lokasi'));

    }

    public function store(Request $request) {
        $kode       = $request->input('kode');
        $alamat       = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');
        // TODO: Compare $password and $rePassword

        $lokasi           = new Lokasi;
        $lokasi->kode     = $kode;
        $lokasi->alamat     = $alamat;
        $lokasi->luas_lahan     = $luas_lahan;
        $lokasi->luas_bangunan = $luas_bangunan; // Don't forget to encryp!s
        $lokasi->daya_listrik = $daya_listrik;

        $lokasi->save();

        return redirect()->to('/lokasi');
    }
    public function delete($id) {
        $lokasi = Lokasi::where('id', $id)->first();
        $lokasi->delete();
        return redirect()->back();
    }
}
