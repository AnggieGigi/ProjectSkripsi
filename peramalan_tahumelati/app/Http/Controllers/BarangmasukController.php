<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangmasukController extends Controller
{
    public function index()
    {
        $data = BarangMasuk::all();
        return view('masuk.index', compact('data'));
    }

    // halaman simpan
    public function create()
    {
        $barang = Barang::all();
        return view('masuk.create', compact('barang'));
    }

    //function simpan
    public function store(Request $req)
    {
        try {
            $validated = $req->validate([
                'idproduk' => 'required',
                'tanggal' => 'required',
                'penerima' => 'required',
                'quantity' => 'required',
            ]);

            if (!$validated) {
                return throw 'Validasi gagal';
            }

            BarangMasuk::create([
                'idproduk' => $req->idproduk,
                'tanggal' => $req->tanggal,
                'penerima' => $req->penerima,
                'quantity' => $req->quantity,
            ]);

            return redirect('/masuk');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    // halaman edit
    public function edit($id)
    {
        $barang = Barang::all();
        $data = BarangMasuk::find($id);
        return view('masuk.edit', compact('data','barang'));
    }

    // function update
    public function update(Request $req, $id)
    {
        try {
            $validated = $req->validate([
                'idproduk' => 'required',
                'tanggal' => 'required',
                'penerima' => 'required',
                'quantity' => 'required',
            ]);

            if (!$validated) {
                return throw 'Validasi gagal';
            }

            BarangMasuk::find($id)->update([
                'idproduk' => $req->idproduk,
                'tanggal' => $req->tanggal,
                'penerima' => $req->penerima,
                'quantity' => $req->quantity,
            ]);

            return redirect('/masuk');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function delete($id)
    {
        $data = BarangMasuk::find($id)->delete();
        return redirect('/masuk');
    }
}