<?php

use Illuminate\Database\Seeder;

class group_id extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('groups')->insert([
          'title' => 'this is title'
       ]);
    }
}
