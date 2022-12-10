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
    Schema::create('mitra_pikr', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pikr_id');
      $table->foreignId('mitra_id');
      $table->boolean('mou')->default(false);
      $table->string('bentuk_kerjasama');
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
    Schema::dropIfExists('materi_pikr');
  }
};
