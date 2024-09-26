<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Produksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduksiController extends Controller
{
    public function index()
    {
        $data = Produksi::join('dataproduk','dataproduk.idproduk','=','dataproduksi.idproduk')->get();
        return view('produksi.index', compact('data'));
    }

    // halaman simpan
    public function create()
    {
        $barang = Barang::all();

        return view('produksi.create',compact('barang'));
    }

    //function simpan
    public function store(Request $req)
    {
        try {
            $validated = $req->validate([
                'idproduk' => 'required',
                'tanggal' => 'required',
                'deskripsi' => 'required',
                'quantity' => 'required',
            ]);

            if (!$validated) {
                return throw 'Validasi gagal';
            }

            $barang = Barang::find($req->idproduk);
            if($barang) {
                $barang->update([
                    'stok' => $barang->stok + $req->quantity
                ]);
            }

            Produksi::create([
                'idproduk' => $req->idproduk,
                'tanggal' => $req->tanggal,
                'deskripsi' => $req->deskripsi,
                'quantity' => $req->quantity,
                'iduser' => 0,
            ]);

            return redirect('/produksi');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    // halaman edit
    public function edit($id)
    {
        $barang = Barang::all();
        
        $data = Produksi::where('idproduksi',$id)->first();
        return view('produksi.edit', compact('data','barang'));
    }

    // function update
    public function update(Request $req, $id)
    {
        try {
            $validated = $req->validate([
                'idproduk' => 'required',
                'tanggal' => 'required',
                'deskripsi' => 'required',
                'quantity' => 'required',
            ]);

            if (!$validated) {
                return throw 'Validasi gagal';
            }

            Produksi::where('idproduksi',$id)->update([
                'idproduk' => $req->idproduk,
                'tanggal' => $req->tanggal,
                'deskripsi' => $req->deskripsi,
                'quantity' => $req->quantity,
                'iduser' => 0,
            ]);

            return redirect('/produksi');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function delete($id)
    {
        Produksi::where('idproduksi',$id)->delete();
        return redirect('/produksi');
    }
}
