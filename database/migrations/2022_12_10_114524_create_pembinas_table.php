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
    Schema::create('pembinas', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id');
      $table->foreignId('jabatan_id');
      $table->foreignId('desa_id');
      $table->string('nomor_urut', 2);
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
    Schema::dropIfExists('pembinas');
  }
};
