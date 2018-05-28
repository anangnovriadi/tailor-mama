<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    protected $fillable = ['nama_pakaian', 'model_pakaian', 'harga', 'stok_pakaian'];
}