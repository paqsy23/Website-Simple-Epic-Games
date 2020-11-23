<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert(array(
            'game_id' => '1',
            'link' => 'https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-02-1920x1080-285554257.jpg?h=1080&resize=1&w=1920'
        ));
        DB::table('image')->insert(array(
            'game_id' => '1',
            'link' => 'https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-03-1920x1080-285553599.jpg?h=1080&resize=1&w=1920'
        ));
        DB::table('image')->insert(array(
            'game_id' => '1',
            'link' => 'https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920'
        ));
        DB::table('image')->insert(array(
            'game_id' => '2',
            'link' => 'https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920'
        ));
        DB::table('image')->insert(array(
            'game_id' => '2',
            'link' => 'https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920'
        ));
        DB::table('image')->insert(array(
            'game_id' => '2',
            'link' => 'https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920'
        ));
    }
}
