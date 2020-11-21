<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platform')->insert(
            array(
                'name' => 'Windows',
            )
        );
    }
}
