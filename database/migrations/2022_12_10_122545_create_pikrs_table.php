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
    Schema::create('pikrs', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id'); // untuk login user pengelola pangkalan
      $table->foreignId('desa_id');
      $table->foreignId('pembina_id');
      $table->foreignId('sk_id')->nullable();
      $table->string('nama');
      $table->string('no_urut', 2);
      $table->string('basis');
      $table->string('akun_medsos');
      $table->string('sumber_dana');
      $table->boolean('keterpaduan_kelompok')->default(false);
      $table->boolean('pro_pn')->default(false);
      $table->string('materi_lainnya')->nullable();
      $table->string('sarana_lainnya')->nullable();
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
    Schema::dropIfExists('pikrs');
  }
};
