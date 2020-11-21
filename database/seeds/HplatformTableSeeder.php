<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HplatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '1',
            )
        );
    }
}
