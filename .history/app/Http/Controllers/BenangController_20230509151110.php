<?php

namespace App\Http\Controllers;

use App\Models\lokasii;
use Illuminate\Http\Request;
use App\Models\User;

class BenangController extends Controller {

    public function index() {
        return view('databenang', [
            'users' => Benang::all(),
            'title' => 'Data benang'
        ]);
    }
    public function add() {
        return view('adddatabenang',[
            'title' => 'Tambah Data benang'
        ]);
    }
    public function edit($id){

        $benang = Benang::where('id', $id)->first();

        return view('editdatabenang', [
            'benang' => $benang,
            'title' => 'Edit Data benang'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_benang      = $request->input('nama_benang');
        $warnabenang       = $request->input('warnabenang');
        $ukuran   = $request->input('ukuran');
        $sifatbahan = $request->input('sifatbahan');

        $benang = Benang::where('id', $id)->first();
        $benang->nama_benang = $nama_benang;
        $benang->warnabenang     = $warnabenang;
        $benang->ukuran = $ukuran;
        $benang->sifatbahan = $sifatbahan;

        $benang->save();

        return redirect()->to('/benang');
    }


    public function dashboard(){
        $benang= Benang::count();

        return view('main', compact('benang'));

    }

    public function store(Request $request) {
        $nama_benang      = $request->input('nama_benang');
        $warnabenang       = $request->input('warnabenang');
        $ukuran   = $request->input('ukuran');
        $sifatbahan = $request->input('sifatbahan');
        // TODO: Compare $password and $rePassword

        $benang           = new Benang;
        $benang->nama_benang    = $nama_benang;
        $benang->warnabenang     = $warnabenang;
        $benang->ukuran = $ukuran; // Don't forget to encryp!s
        $benang->sifatbahan = $sifatbahan;

        $benang->save();

        return redirect()->to('/benang');
    }
    public function delete($id) {
        $benang = Benang::where('id', $id)->first();
        $benang->delete();
        return redirect()->back();
    }
}
