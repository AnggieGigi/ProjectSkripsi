<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BarangMasuk extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $table = 'masuk';
    protected $primaryKey = 'idmasuk';
    public $timestamps = false;
    protected $fillable = [
        'idproduk',
        'tanggal',
        'penerima',
        'quantity'
    ];

    public function masuk(){
        return $this-> belongsTo(Barang::class, 'idproduk', 'idproduk');
    }
}
