<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pelayanan_informasis', function (Blueprint $table) {
      $table->id();
      $table->foreignId('materi_id')->nullable();
      $table->foreignId('laporan_id');
      $table->string('materi_lainnya')->nullable();
      $table->string('nama');
      $table->date('tanggal');
      $table->string('jabatan_narsum');
      $table->string('nama_narsum');
      $table->integer('jumlah_peserta');
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
    Schema::dropIfExists('pelayanan_informasis');
  }
};
