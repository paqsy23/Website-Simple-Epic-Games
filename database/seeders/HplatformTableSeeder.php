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
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '2',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '3',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '4',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '5',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '6',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '2',
                'game_id' => '6',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '7',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '2',
                'game_id' => '7',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '8',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '9',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '10',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '2',
                'game_id' => '10',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '11',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '2',
                'game_id' => '11',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '12',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '13',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '14',
            )
        );
        DB::table('h_platform')->insert(
            array(
                'platform_id' => '1',
                'game_id' => '15',
            )
        );
    }
}
