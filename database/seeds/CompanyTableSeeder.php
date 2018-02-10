<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies')->insert([
      ['name' => 'DaNaSky'],
      ['name' => 'NewSky'],
      ['name' => 'Novel Hotel'],
      ['name' => 'Furama Resort'],
      ['name' => 'SaigonTourist'],
    ]);
    }
}
