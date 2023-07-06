<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class lokasiiController extends Controller {

    public function index() {
        return view('datalokasii', [
            'users' => Lokasi::all(),
            'title' => 'Data lokasi'
        ]);
    }
    public function add() {
        return view('adddatalokasii',[
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
        $alamat      = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $jenis = $request->input('jenis');

        $lokasi = lokasi::where('id', $id)->first();
        $lokasi->alamat     = $alamat;
        $lokasi->luas_lahan     = $luas_lahan;
        $lokasi->luas_bangunan = $luas_bangunan;
        $lokasi->jenis = $jenis;

        $lokasi->save();

        return redirect()->to('/lokasi');
    }


    public function dashboard(){
        $lokasi= lokasi::count();

        return view('main', compact('lokasi'));

    }

    public function store(Request $request) {
        $alamat       = $request->input('alamat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $lokasi           = new lokasi;
        $lokasi->alamat     = $alamat;
        $lokasi->luas_lahan     = $luas_lahan;
        $lokasi->luas_bangunan = $luas_bangunan; // Don't forget to encryp!s
        $lokasi->jenis = $jenis;

        $lokasi->save();

        return redirect()->to('/lokasi');
    }
    public function delete($id) {
        $lokasi = lokasi::where('id', $id)->first();
        $lokasi->delete();
        return redirect()->back();
    }
}
