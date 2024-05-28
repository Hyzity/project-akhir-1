<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'deskripsi',
        'nama_fasilitas',
        'user_id',
        'foto_fasilitas',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getThumbnail()
    {
    	return 'uploads/img/fasilitas/'.$this->thumbnail;
    }
}

