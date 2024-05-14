<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'foto',
        'nama',
        'bidang_keahlian',
        'pengalaman',
        'pendidikan',
        'no_telephon',
        'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
