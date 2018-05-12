<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tailor extends Model
{
    protected $fillable = [
        'nama_jahitan', 'id_pelanggan',
        'ongkos_jahitan', 'jumlah_jahitan',
        'total_harga', 'estimasi_selesai',
        'tgl_masuk', 'tgl_diambil'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer', 'id_pelanggan');
    }
}
