<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangkeluarController extends Controller
{
    public function index()
    {
        $data = BarangKeluar::all();
        return view('keluar.index', compact('data'));
    }

    // halaman simpan
    public function create()
    {
        $barang = Barang::all();
        return view('keluar.create', compact('barang'));
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

            $barang = Barang::find($req->idproduk);
            if($barang) {
                $barang->update([
                    'stok' => $barang->stok - $req->quantity
                ]);
            }

            BarangKeluar::create([
                'idproduk' => $req->idproduk,
                'tanggal' => $req->tanggal,
                'penerima' => $req->penerima,
                'quantity' => $req->quantity,
                // 'iduser' => 0,
            ]);

            return redirect('/keluar');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    // halaman edit
    public function edit($id)
    {
        $barang = Barang::all();
        $data = BarangKeluar::find($id);
        return view('keluar.edit', compact('data', 'barang'));
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

            BarangKeluar::find($id)->update([
                'idproduk' => $req->idproduk,
                'tanggal' => $req->tanggal,
                'penerima' => $req->penerima,
                'quantity' => $req->quantity,
            ]);

            return redirect('/keluar');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function delete($id)
    {
        $data = BarangKeluar::find($id)->delete();
        return redirect('/keluar');
    }
}
