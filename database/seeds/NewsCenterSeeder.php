<?php

use Illuminate\Database\Seeder;

class NewsCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 10 ; $i++) {
        DB::table('newscenter')->insert([
           'title' => 'This is News Title' . $i,
           'author' => 'Author' . $i,
           'imgpath' => '/img/news' . $i .'jpg',
           'content' => 'This is the article conent' . $i,
           ]);
      }
    }
}
