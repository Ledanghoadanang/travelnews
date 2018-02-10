<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
      ['name' => 'Admin', 'email'  =>  'admin@gmail.com', 'password'  =>  'admin', 'phone' => '0934861123', 'address'  => 'Hải Châu, TP.Đà Nẵng','gender'  => '2', 'role' => 1],
      ['name' => 'Lê Đăng Hóa', 'email'  =>  'ledanghoadanang@gmail.com', 'password'  =>  'ledanghoa', 'phone' => '0934861123', 'address'  => 'Hải Châu, TP.Đà Nẵng','gender'  => '2', 'role' => 2],
    ]);
    }
}
