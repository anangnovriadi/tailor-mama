<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tailor extends Model
{
    protected $fillable = [
        'nama_jahitan', 'pelanggan_id',
        'ongkos_jahitan', 'jumlah_jahitan',
        'total_harga', 'estimasi_selesai',
        'tgl_masuk', 'tgl_diambil'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer', 'pelanggan_id');
    }
}
