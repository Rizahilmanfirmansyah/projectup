<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_pembeli";
    protected $fillable = [
        'nama', 'no_tlp', 'email', 'kelas', 'foto_pembeli'

    ];
}
