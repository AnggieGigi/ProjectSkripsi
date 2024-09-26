<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    // halaman simpan
    public function create()
    {
        return view('barang.create');
    }

    //function simpan
    public function store(Request $req)
    {
        try {
            $validated = $req->validate([
                'namabarang' => 'required',
                'stok' => 'required',
            ]);

            if (!$validated) {
                return throw 'Validasi gagal';
            }

            Barang::create([
                'namabarang' => $req->namabarang,
                'stok' => $req->stok,
                'iduser' => 0,
            ]);

            return redirect('/barang');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    // halaman edit
    public function edit($id)
    {
        $data = Barang::find($id);
        return view('barang.edit', compact('data'));
    }

    // function update
    public function update(Request $req, $id)
    {
        try {
            $validated = $req->validate([
                'namabarang' => 'required',
                'stok' => 'required',
            ]);

            if (!$validated) {
                return throw 'Validasi gagal';
            }

            Barang::find($id)->update([
                'namabarang' => $req->namabarang,
                'stok' => $req->stok,
                'iduser' => 0,
            ]);

            return redirect('/barang');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    // hapus berdasarkan id
    public function delete($id)
    {
        $data = Barang::find($id)->delete();
        return redirect('/barang');
    }
}
