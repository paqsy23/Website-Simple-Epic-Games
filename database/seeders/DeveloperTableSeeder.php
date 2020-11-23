<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developer')->insert(array('name' => 'People Can Fly',));//1
        DB::table('developer')->insert(array('name' => 'Square Enix',));//2
        DB::table('developer')->insert(array('name' => 'Ubisoft Montreal',));//3
        DB::table('developer')->insert(array('name' => 'Ubisoft',));//4
        DB::table('developer')->insert(array('name' => 'Sports Interactive',));//5
        DB::table('developer')->insert(array('name' => 'SEGA',));//6
        DB::table('developer')->insert(array('name' => 'Jackbox Games, Inc.',));//7
        DB::table('developer')->insert(array('name' => 'Saber Interactive',));//8
        DB::table('developer')->insert(array('name' => 'Focus Home Interactive',));//9
        DB::table('developer')->insert(array('name' => 'CREATIVE ASSEMBLY',));//10
        DB::table('developer')->insert(array('name' => 'ZA/UM',));//11
        DB::table('developer')->insert(array('name' => 'King Art Games',));//12
        DB::table('developer')->insert(array('name' => 'Deep Silver',));//13
        DB::table('developer')->insert(array('name' => 'Psyonix LLC',));//14
        DB::table('developer')->insert(array('name' => 'Frontier Developments',));//15
    }
}
