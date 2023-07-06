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
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');

        $lokasi = lokasi::where('id', $id)->first();
        $lokasi->alamat     = $alamat;
        $lokasi->kriteria     = $kriteria;
        $lokasi->bobot = $bobot;
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
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $lokasi           = new lokasi;
        $lokasi->alamat     = $alamat;
        $lokasi->kriteria     = $kriteria;
        $lokasi->bobot = $bobot; // Don't forget to encryp!s
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
