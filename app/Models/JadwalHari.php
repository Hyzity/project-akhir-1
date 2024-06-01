<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalHari extends Model
{
    use HasFactory;
    protected $fillable = [

        'nama_hari',
        'id_kelas',
        'user_id'

    ];
    
}
