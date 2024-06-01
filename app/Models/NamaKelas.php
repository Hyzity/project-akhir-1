<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaKelas extends Model
{
    use HasFactory;
    protected $fillable = [

        'nama_kelas',
        'user_id',


    ];
}
