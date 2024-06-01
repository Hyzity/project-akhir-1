<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;
   
protected $fillable = [

    'mata_pelajaran',
    'id_hari',
    'user_id'

];
}
