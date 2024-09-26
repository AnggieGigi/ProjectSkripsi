<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Peramalan;
use App\Models\Produksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeramalanController extends Controller
{
    public function index()
    {
        // $peramalan = Peramalan::all ();
        $keluar = null;
        $keluar = BarangKeluar::orderBy('tanggal', 'asc')->get();
        if (count($keluar) > 0) {
            $a = 0;
            $avgmape = [];
            for ($j = 0; $j < 9; $j++) {
                $a += 0.1;
                $peramalan[$j][0] = [
                    'tanggal' => $keluar[0]->tanggal,
                    'penjualan' => $keluar[0]->quantity,
                    'st1' => $keluar[0]->quantity,
                    'st2' => $keluar[0]->quantity,
                    'at' => $keluar[0]->quantity,
                    'bt' => $keluar[0]->quantity,
                    'forecasting' => 0,
                    'mape' => 0
                ];
                // temporari mape = mape sementara
                $tempmape = 0;
                for ($i = 1; $i <= count($keluar); $i++) {
                    $st1 = ($a * $keluar[$i - 1]->quantity) + (1 - $a) * $peramalan[$j][$i - 1]['st1'];
                    $st2 = ($a * $st1) + (1 - $a) * $peramalan[$j][$i - 1]['st2'];
                    $at = 2 * $st1 - $st2;
                    $bt = ($a / (1 - $a) * ($st1 - $st2));
                    $forecasting = $at + $bt;

                    if(isset($keluar[$i]->tanggal)) {
                        $tempmape += ((abs($keluar[$i]->quantity - $forecasting) / $keluar[$i]->quantity) * 100);
                    }

                    $peramalan[$j][$i] = [
                        'tanggal' => isset($keluar[$i]->tanggal) ? $keluar[$i]->tanggal : '-',
                        'penjualan' => isset($keluar[$i]->quantity) ? $keluar[$i]->quantity : '-',
                        'st1' => $st1,
                        'st2' => $st2,
                        'at' => $at,
                        'bt' => $bt,
                        'forecasting' => $forecasting,
                        'mape' => isset($keluar[$i]->quantity) ? ((abs($keluar[$i]->quantity - $forecasting) / $keluar[$i]->quantity) * 100) : '-'
                        // (abs($keluar[$i]->quantity - $forecasting) / $keluar[$i]->quantity) * 100
                    ];
                    // buat meramalkan selanjutnya
                    if(!isset($keluar[$i]->tanggal)) {
                        Peramalan::create([
                            'hari' => $i+1,
                            'jumlah'=> $forecasting,
                            'alpha' => $a
                        ]);
                    }

                }
                $avgmape[] = $tempmape / (count($keluar)-1);
            }
        }

        return view('peramalan', compact('peramalan','avgmape'));
    }
}
