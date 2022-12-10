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
    Schema::create('surat_keputusans', function (Blueprint $table) {
      $table->id();
      $table->string('nomor');
      $table->date('tanggal');
      $table->string('dikeluarkan_oleh');
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
    Schema::dropIfExists('surat_keputusans');
  }
};
