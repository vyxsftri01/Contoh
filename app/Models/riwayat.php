<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['id_identitas', 'id_pemesanans', 'id_transaksis','id_villas'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    public function identitas()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(identitas::class, 'id_identitas');
    }

    public function pemesanans()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'riwayat' melalui id_siswa
        return $this->hasOne(pemesanans::class, 'id_pemesanans');
    }
    public function transaksis()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(transaksis::class, 'id_transaksis');
    }

    public function villas()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'riwayat' melalui id_siswa
        return $this->hasOne(villas::class, 'id_villas');
    }
}
