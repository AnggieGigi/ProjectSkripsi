<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Barang extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $table = 'dataproduk';
    protected $primaryKey = 'idproduk';
    public $timestamps = false;
    protected $fillable = [
        'namabarang',
        'stok',
        'iduser'
    ];
}
