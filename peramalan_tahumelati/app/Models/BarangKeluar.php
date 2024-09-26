<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BarangKeluar extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $table = 'keluar';
    protected $primaryKey = 'idkeluar';
    public $timestamps = false;
    protected $fillable = [
        'idproduk',
        'tanggal',
        'penerima',
        'quantity'
    ];

    public function keluar(){
        return $this-> belongsTo(Barang::class, 'idproduk')->withDefault([
            'idproduk' => 'tidak ada',
        ]);;
    }
}