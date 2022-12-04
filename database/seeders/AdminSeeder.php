<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Admin::create([
      'user_id' => User::create([
        'nama' => 'admin',
        'username' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('12345678'),
      ])->id
    ]);
  }
}
