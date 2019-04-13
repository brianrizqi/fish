<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $table = 'detail_penjualan';
}
