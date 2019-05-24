<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name'=>'John',
            'email'=>'johnsnow@gmail.com',
            'password'=>'$2y$12$5WNXHitbwuN0ubQqIC2OP.ECACHZBj5K7R6IFEJVT17K9xaFmyANy',
            'surname'=>'Snow',
            "role"=>'student',
            'group_id' => 1
        ]);
    }
}
