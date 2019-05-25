<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'id' => 1,
                'title' => 'Math',
                'created_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'English',
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => "German",
                'created_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Programming',
                'created_at' => now()
            ],
        ]);
    }
}
