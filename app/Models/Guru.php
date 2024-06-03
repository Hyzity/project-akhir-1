<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'bidang_keahlian',
        'tgl_lahir',
        'pendidikan',
        'tempat_lahir',
        'foto',
        'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function getThumbnail()
    {
    	return 'uploads/img/guru/'.$this->foto;
    }
}
