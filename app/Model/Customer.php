<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nama_pelanggan', 'email', 'no_telp', 'alamat'];
}