<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert(
            array(
                'name' => 'Stevanus',
                'username' => 'stevanus',
                'password' => '123',
                'email' => 'stevanus123@gmail.com',
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'Billy',
                'username' => 'billy',
                'password' => '123',
                'email' => 'billy123@gmail.com',
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'Abraham',
                'username' => 'abraham',
                'password' => '123',
                'email' => 'abraham123@gmail.com',
            )
        );
    }
}
