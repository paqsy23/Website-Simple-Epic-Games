<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag')->insert(array('name' => 'Action',));//1
        DB::table('tag')->insert(array('name' => 'Adventure',));//2
        DB::table('tag')->insert(array('name' => 'Shooter',));//3
        DB::table('tag')->insert(array('name' => 'RPG',));//4
        DB::table('tag')->insert(array('name' => 'Open World',));//5
        DB::table('tag')->insert(array('name' => 'Survival',));//6
        DB::table('tag')->insert(array('name' => 'Simulation',));//7
        DB::table('tag')->insert(array('name' => 'Sports',));//8
        DB::table('tag')->insert(array('name' => 'Single Player',));//9
        DB::table('tag')->insert(array('name' => 'Competitive',));//10
        DB::table('tag')->insert(array('name' => 'Indie',));//11
        DB::table('tag')->insert(array('name' => 'Party',));//12
        DB::table('tag')->insert(array('name' => 'Strategy',));//13
        DB::table('tag')->insert(array('name' => 'Investigation',));//14
        DB::table('tag')->insert(array('name' => 'Casual',));//15
        DB::table('tag')->insert(array('name' => 'Co-op',));//16
        DB::table('tag')->insert(array('name' => 'Multiplayer',));//17
        DB::table('tag')->insert(array('name' => 'Space Sim',));//18
    }
}
