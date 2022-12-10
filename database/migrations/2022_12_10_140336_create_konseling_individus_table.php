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
    Schema::create('konseling_individus', function (Blueprint $table) {
      $table->id();
      $table->foreignId('materi_id')->nullable();
      $table->foreignId('laporan_id');
      $table->foreignId('pengurus_id');
      $table->string('materi_lainnya')->nullable();
      $table->date('tanggal');
      $table->integer('jumlah_cowok');
      $table->integer('jumlah_cewek');
      $table->integer('jumlah_rawal');
      $table->integer('jumlah_rtengah');
      $table->integer('jumlah_rakhir');
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
    Schema::dropIfExists('konseling_individus');
  }
};
