<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => ucfirst('poxos'),
                    'email' => Str::random(6).'@gmail.com',
                    'password' => bcrypt('secret'),
                    'surname'=> ucfirst(Str::random(6)),
                    "role"=> 'student',
                    'group_id' => 1,
                    'created_at' => now()
                ],
                [
                    'name' => ucfirst('arman'),
                    'email' => Str::random(6).'@gmail.com',
                    'password' => bcrypt('secret'),
                    'surname'=> ucfirst(Str::random(6)),
                    "role"=> 'student',
                    'group_id' => 1,
                    'created_at' => now()
                ],
                [
                    'name' => ucfirst('mari'),
                    'email' => Str::random(6).'@gmail.com',
                    'password' => bcrypt('secret'),
                    'surname'=> ucfirst(Str::random(6)),
                    "role"=> 'student',
                    'group_id' => 2,
                    'created_at' => now()
                ],
                [
                    'name' => ucfirst('astxik'),
                    'email' => Str::random(6).'@gmail.com',
                    'password' => bcrypt('secret'),
                    'surname'=> ucfirst(Str::random(6)),
                    "role"=> 'student',
                    'group_id' => 3,
                    'created_at' => now()
                ],
                [
                    'name' => ucfirst('Marat'),
                    'email' => Str::random(6).'@gmail.com',
                    'password' => bcrypt('secret'),
                    'surname'=> "Hovsepyan",
                    "role"=> 'teacher',
                    'group_id' => 1,
                    'created_at' => now()
                ],
        ]);
    }
}
