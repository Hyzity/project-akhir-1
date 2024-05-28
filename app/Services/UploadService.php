<?php
namespace App\Services;

use Illuminate\Support\Str;

class UploadService
{
    public function imageUpload($path)
    {
        // Validasi bahwa file ada dalam request
        if (!request()->hasFile('foto')) {  // Sesuaikan dengan nama input file di form
            throw new \Exception('Tidak ada file yang diupload');
        }

        // Dapatkan file dari request
        $file = request()->file('foto');  // Sesuaikan dengan nama input file di form

        // Periksa apakah file valid
        if (!$file->isValid()) {
            throw new \Exception('File yang diupload tidak valid');
        }

        // Buat nama file baru yang unik
        $filename = Str::random(9) . $file->getClientOriginalName();

        // Pindahkan file ke lokasi yang ditentukan
        $file->move(public_path('uploads/img/' . $path), $filename);

        // Kembalikan nama file
        return $filename;
    }
}
