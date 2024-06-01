<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalHarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_haris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hari');
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('user_id')->nullable(); // Jadikan nullable agar bisa menerima NULL
            $table->foreign('id_kelas')->references('id')->on('nama_kelas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_haris');
    }
}
