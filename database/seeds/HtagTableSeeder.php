<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HtagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('h_tag')->insert(
            array(
                'tag_id' => '1',
                'game_id' => '1',
            )
        );
        DB::table('h_tag')->insert(
            array(
                'tag_id' => '2',
                'game_id' => '1',
            )
        );
        DB::table('h_tag')->insert(
            array(
                'tag_id' => '3',
                'game_id' => '1',
            )
        );
    }
}
