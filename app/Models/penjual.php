<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjual extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_penjual";
    protected $fillable = [
        'nama_penjual','no_tlp','foto_penjual'
    ];
}

