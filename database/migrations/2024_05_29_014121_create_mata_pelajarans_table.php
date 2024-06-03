<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('mata_pelajaran');
            $table->unsignedBigInteger('id_hari');
            $table->unsignedBigInteger('user_id')->nullable(); // Jadikan nullable agar bisa menerima NULL
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_hari')->references('id')->on('jadwal_haris')->onDelete('cascade');
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
        Schema::dropIfExists('mata_pelajarans');
    }
}
