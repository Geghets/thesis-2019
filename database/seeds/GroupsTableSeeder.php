<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            [
                'id' => 1,
                'title' => ucfirst(Str::random(6)),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'title' => ucfirst(Str::random(6)),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => ucfirst(Str::random(6)),
                'created_at' => now()
            ],
            [
                'id' => 4,
                'title' => ucfirst(Str::random(6)),
                'created_at' => now()
            ],
        ]);
    }
}
