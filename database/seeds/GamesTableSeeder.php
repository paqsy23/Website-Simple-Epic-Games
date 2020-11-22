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
                'rating' => null,
                'add_ons' => null,
            )
        );//1
        DB::table('games')->insert(
            array(
                'developer_id' => '3',
                'publisher_id' => '4',
                'name' => "Assassin's Creed® Valhalla Standard Edition",
                'release' => Carbon::parse('2020-11-10'),
                'description'=> 'Become a legendary Viking on a quest for glory. Raid your enemies, grow your settlement, and build your political power.',
                'instagram' => 'https://www.instagram.com/assassinscreed_us/',
                'website' => 'https://www.ubisoft.com/en-us/game/assassins-creed/valhalla',
                'reddit' => '',
                'youtube' => '',
                'facebook' => 'https://www.facebook.com/assassinscreed',
                'twitch' => '',
                'twitter' => 'https://twitter.com/assassinscreed',
                'price' =>57,
                'rating' => 92,
                'add_ons' => null,
            )
        );//2
        DB::table('games')->insert(
            array(
                'developer_id' => '3',
                'publisher_id' => '4',
                'name' => "Assassin's Creed® Valhalla Gold Edition",
                'release' => Carbon::parse('2020-11-10'),
                'description'=> "Enhance your Assassin's Creed® Valhalla experience with the Gold Edition, which includes the game and Season Pass.",
                'instagram' => 'https://www.instagram.com/assassinscreed_us/',
                'website' => 'https://www.ubisoft.com/en-us/game/assassins-creed/valhalla',
                'reddit' => '',
                'youtube' => '',
                'facebook' => 'https://www.facebook.com/assassinscreed',
                'twitch' => '',
                'twitter' => 'https://twitter.com/assassinscreed',
                'price' =>57,
                'rating' => 92,
                'add_ons' => 2,
            )
        );//3
        DB::table('games')->insert(
            array(
                'developer_id' => '3',
                'publisher_id' => '4',
                'name' => "Far Cry Primal",
                'release' => Carbon::parse('2016-3-1'),
                'description'=> "Welcome to the Stone Age, a time of extreme danger and limitless adventure, when giant mammoths and sabretooth tigers ruled the Earth and humanity is at the bottom of the food chain. As the last survivor of your hunting group",
                'instagram' => '',
                'website' => 'https://www.ubisoft.com/en-gb/game/far-cry/far-cry-primal',
                'reddit' => '',
                'youtube' => '',
                'facebook' => '',
                'twitch' => '',
                'twitter' => '',
                'price' =>45,
                'rating' => 60,
                'add_ons' => null,
            )
        );//4
        DB::table('games')->insert(
            array(
                'developer_id' => '3',
                'publisher_id' => '4',
                'name' => "Far Cry Primal Apex Edition",
                'release' => Carbon::parse('2016-3-1'),
                'description'=> "The Digital Apex edition includes the game and all additional digital content for Far Cry Primal:",
                'instagram' => '',
                'website' => 'https://www.ubisoft.com/en-gb/game/far-cry/far-cry-primal',
                'reddit' => '',
                'youtube' => '',
                'facebook' => '',
                'twitch' => '',
                'twitter' => '',
                'price' =>45,
                'rating' => 60,
                'add_ons' => 4,
            )
        );//5
        DB::table('games')->insert(
            array(
                'developer_id' => '5',
                'publisher_id' => '6',
                'name' => "Football Manager 2021",
                'release' => Carbon::parse('2020-11-25'),
                'description'=> "Dynamic, true-to-life management experiences deliver football authenticity like no other game can. You are empowered like never before to develop your managerial prowess and reach elite status. Pre-purchase on Epic for 10% off and Early Access.",
                'instagram' => '',
                'website' => '',
                'reddit' => '',
                'youtube' => '',
                'facebook' => '',
                'twitch' => '',
                'twitter' => '',
                'price' =>30,
                'rating' => null,
                'add_ons' => null,
            )
        );//6
        DB::table('games')->insert(
            array(
                'developer_id' => '7',
                'publisher_id' => '7',
                'name' => "The Jackbox Party Pack 7 Search",
                'release' => Carbon::parse('2020-10-16'),
                'description'=> "Five new games: the hit threequel Quiplash 3, the collaborative chaos of Devils and the Details, the fierce drawing game Champ’d Up, the speech game Talking Points and the guessing game Blather Round.",
                'instagram' => 'https://www.instagram.com/playjackboxgames/',
                'website' => 'https://www.jackboxgames.com/party-pack-seven/',
                'reddit' => '',
                'youtube' => 'https://www.youtube.com/jackboxgames/',
                'facebook' => 'https://www.facebook.com/JackboxGames/',
                'twitch' => 'https://www.twitch.tv/jackboxgames',
                'twitter' => 'https://twitter.com/jackboxgames',
                'price' =>11,
                'rating' => 76,
                'add_ons' => null,
            )
        );//7
        DB::table('games')->insert(
            array(
                'developer_id' => '8',
                'publisher_id' => '9',
                'name' => "SnowRunner",
                'release' => Carbon::parse('2020-04-28'),
                'description'=> "Get ready for the next-generation off-road experience! Drive powerful vehicles and overcome extreme open environments to complete dozens of challenging missions solo or with up to 3 friends!",
                'instagram' => '',
                'website' => '',
                'reddit' => '',
                'youtube' => '',
                'facebook' => '',
                'twitch' => '',
                'twitter' => '',
                'price' =>25,
                'rating' => 81,
                'add_ons' => null,
            )
        );//8
        DB::table('games')->insert(
            array(
                'developer_id' => '8',
                'publisher_id' => '9',
                'name' => "SnowRunner Premium Edition",
                'release' => Carbon::parse('2020-04-28'),
                'description'=> "Get ready for the next-generation off-road experience! The Premium Edition includes the base game SnowRunner and its Season Pass.",
                'instagram' => '',
                'website' => '',
                'reddit' => '',
                'youtube' => '',
                'facebook' => '',
                'twitch' => '',
                'twitter' => '',
                'price' =>37,
                'rating' => 81,
                'add_ons' => 8,
            )
        );//9
        DB::table('games')->insert(
            array(
                'developer_id' => '10',
                'publisher_id' => '6',
                'name' => "A Total War Saga: TROY",
                'release' => Carbon::parse('2020-08-13'),
                'description'=> "In this legendary age, heroes walk the earth. In an act that shocks the world, audacious Paris, prince of Troy, elopes with the beautiful queen of Sparta. As they sail away, King Menelaus curses her name.",
                'instagram' => 'https://www.instagram.com/totalwarofficial/',
                'website' => 'https://www.totalwar.com/',
                'reddit' => 'https://www.reddit.com/r/totalwar/',
                'youtube' => 'https://www.youtube.com/user/thecreativeassembly',
                'facebook' => 'https://www.facebook.com/TotalWar/',
                'twitch' => 'https://www.twitch.tv/totalwar',
                'twitter' => 'https://twitter.com/totalwar',
                'price' =>32,
                'rating' => 67,
                'add_ons' => null,
            )
        );//10
        DB::table('games')->insert(
            array(
                'developer_id' => '11',
                'publisher_id' => '11',
                'name' => "Disco Elysium",
                'release' => Carbon::parse('2019-10-15'),
                'description'=> "Disco Elysium is a groundbreaking role playing game. You’re a detective with a unique skill system at your disposal. Interrogate unforgettable characters, crack murders or take bribes. Become a hero or an absolute disaster of a human being.",
                'instagram' => 'https://www.instagram.com/zaumstudio/',
                'website' => 'https://www.discoelysium.com/',
                'reddit' => 'https://www.reddit.com/r/DiscoElysium/',
                'youtube' => 'https://www.youtube.com/channel/UCj14g6rLgQtyXpoop2JKU7w',
                'facebook' => 'https://www.facebook.com/zaumstudio/',
                'twitch' => '',
                'twitter' => 'https://twitter.com/studioZAUM',
                'price' => 12,
                'rating' => 97,
                'add_ons' => null,
            )
        );//11
        DB::table('games')->insert(
            array(
                'developer_id' => '12',
                'publisher_id' => '13',
                'name' => "Iron Harvest",
                'release' => Carbon::parse('2020-11-20'),
                'description'=> "
                A classic real-time strategy game with an epic single player campaign, multiplayer & coop, set in the alternate reality of 1920+",
                'instagram' => 'https://www.instagram.com/iron_harvest/',
                'website' => 'http://www.iron-harvest.com/',
                'reddit' => '',
                'youtube' => 'https://www.youtube.com/user/KINGArtGames/videos',
                'facebook' => 'https://www.facebook.com/ironharvest/',
                'twitch' => 'https://www.twitch.tv/kingartgames',
                'twitter' => 'https://twitter.com/kingartgames',
                'price' => 32,
                'rating' => null,
                'add_ons' => null,
            )
        );//12
        DB::table('games')->insert(
            array(
                'developer_id' => '12',
                'publisher_id' => '13',
                'name' => "Iron Harvest Deluxe Edition",
                'release' => Carbon::parse('2020-11-20'),
                'description'=> "The Deluxe Edition includes a Mini Campaign and a big Add-on, granting access to all new adventures in the alternative reality of 1920+.!",
                'instagram' => 'https://www.instagram.com/iron_harvest/',
                'website' => 'http://www.iron-harvest.com/',
                'reddit' => '',
                'youtube' => 'https://www.youtube.com/user/KINGArtGames/videos',
                'facebook' => 'https://www.facebook.com/ironharvest/',
                'twitch' => 'https://www.twitch.tv/kingartgames',
                'twitter' => 'https://twitter.com/kingartgames',
                'price' => 55,
                'rating' => null,
                'add_ons' => 12,
            )
        );//13
        DB::table('games')->insert(
            array(
                'developer_id' => '14',
                'publisher_id' => '14',
                'name' => "Rocket League®",
                'release' => Carbon::parse('2020-09-24'),
                'description'=> "Rocket League is a high-powered hybrid of arcade-style soccer and vehicular mayhem with easy-to-understand controls and fluid, physics-driven competition.",
                'instagram' => 'https://www.instagram.com/rocketleague/',
                'website' => 'https://www.rocketleague.com/',
                'reddit' => 'https://www.reddit.com/r/RocketLeague',
                'youtube' => 'https://www.youtube.com/c/RocketLeague',
                'facebook' => 'https://www.facebook.com/RocketLeague',
                'twitch' => 'https://www.twitch.tv/directory/game/Rocket%20League',
                'twitter' => 'https://twitter.com/rocketleague',
                'price' => 0,
                'rating' => 93,
                'add_ons' => null,
            )
        );//14
        DB::table('games')->insert(
            array(
                'developer_id' => '15',
                'publisher_id' => '15',
                'name' => "Elite Dangerous",
                'release' => Carbon::parse('2015-04-03'),
                'description'=> "Take control of your own starship in a cutthroat galaxy. Elite Dangerous is the definitive massively multiplayer space epic, bringing gaming’s original open world adventure to the modern generation with an evolving narrative.",
                'instagram' => '',
                'website' => 'https://www.elitedangerous.com/',
                'reddit' => '',
                'youtube' => 'https://www.youtube.com/elitedangerous/',
                'facebook' => 'https://www.facebook.com/EliteDangerousOfficial/',
                'twitch' => 'https://www.twitch.tv/frontierdevelopments',
                'twitter' => 'https://twitter.com/EliteDangerous',
                'price' => 27,
                'rating' => 72,
                'add_ons' => null,
            )
        );//15
    }
}
