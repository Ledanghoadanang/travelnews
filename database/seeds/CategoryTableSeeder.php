<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
      ['name' => 'Tin Địa Điểm Du Lịch Đà Nẵng'],
      ['name' => 'Tin Khách Sạn Đà Nẵng'],
      ['name' => 'Tin Nhà Hàng Đà Nẵng'],
    ]);
    }
}
