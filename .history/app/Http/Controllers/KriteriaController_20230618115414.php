<?php

namespace App\Http\Controllers;

use App\Models\Kriteriaa;
use Illuminate\Http\Request;
use App\Models\User;

class kriteriaController extends Controller {

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

        $kriteriaa = kriteriaa::where('id', $id)->first();

        return view('editdatakriteria', [
            'kriteriaa' => $kriteriaa,
            'title' => 'Edit Data kriteriaa'
        ]);

    }

    public function update(Request $request, $id) {
        $lokasialternat      = $request->input('lokasialternat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');

        $kriteriaa = kriteriaa::where('id', $id)->first();
        $kriteriaa->lokasialternat  = $lokasialternat;
        $kriteriaa->luas_lahan     = $luas_lahan;
        $kriteriaa->luas_bangunan = $luas_bangunan;
        $kriteriaa->daya_listrik = $daya_listrik;

        $kriteriaa->save();

        return redirect()->to('/kriteriaa');
    }


    public function dashboard(){
        $kriteriaa= kriteriaa::count();

        return view('main', compact('kriteriaa'));

    }

    public function store(Request $request) {
        $lokasialternat       = $request->input('lokasialternat');
        $luas_lahan       = $request->input('luas_lahan');
        $luas_bangunan   = $request->input('luas_bangunan');
        $daya_listrik = $request->input('daya_listrik');
        // TODO: Compare $password and $rePassword

        $kriteriaa           = new kriteriaa;
        $kriteriaa->lokasialternat     = $lokasialternat ;
        $kriteriaa->luas_lahan     = $luas_lahan;
        $kriteriaa->luas_bangunan = $luas_bangunan; // Don't forget to encryp!s
        $kriteriaa->daya_listrik = $daya_listrik;

        $kriteriaa->save();

        return redirect()->to('/kriteriaa');
    }
    public function delete($id) {
        $kriteriaa = kriteriaa::where('id', $id)->first();
        $kriteriaa->delete();
        return redirect()->back();
    }
}
