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
        DB::table('tag')->insert(
            array(
                'name' => 'Action',
            )
        );
        DB::table('tag')->insert(
            array(
                'name' => 'Adventure',
            )
        );
        DB::table('tag')->insert(
            array(
                'name' => 'Shooter',
            )
        );
    }
}
