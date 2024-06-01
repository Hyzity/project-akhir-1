<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'user_id',
        'update_at',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getThumbnail()
    {
        return 'uploads/img/prestasi/' . $this->gambar; // Ensure the field name matches
    }
}
