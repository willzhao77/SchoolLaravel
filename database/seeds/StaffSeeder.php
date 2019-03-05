<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 10 ; $i++) {
        DB::table('staff')->insert([
           'name' => 'Staff' . $i,
           'title' => 'Title' . $i,
           'imgpath' => '/img/staff/staff' . $i .'jpg',
           'type' => '1',
           ]);
      }
    }
}
