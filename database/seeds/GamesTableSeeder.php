<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(
            array(
                'developer_id' => '1',
                'publisher_id' => '2',
                'name' => 'OUTRIDERS',
                'release' => Carbon::parse('2021-02-03'),
                'description'=> 'Pre-order OUTRIDERS now to receive the Hells Rangers Content Pack, which includes: • The Hell’s Rangers Male and Female Gear Sets. • The Hell’s Rangers Arsenal of 11 unique Guns. • The Hell’s Rangers Truck Mods and Decals.',
                'instagram' => '',
                'website' => 'https://outriders.square-enix-games.com/en-gb/?',
                'reddit' => '',
                'youtube' => 'https://www.youtube.com/outriders',
                'facebook' => 'https://www.facebook.com/outriders',
                'twitch' => 'https://www.twitch.tv/squareenix/',
                'twitter' => '',
                'price' => 60,
                'rating' => 4,
                'add_ons' => null,
            )
        );
    }
}
