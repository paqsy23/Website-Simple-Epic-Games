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
        DB::table('developer')->insert(array('name' => 'People Can Fly','username' => 'PCF','password' => password_hash('PCF', PASSWORD_BCRYPT)));//1
        DB::table('developer')->insert(array('name' => 'Square Enix','username' => 'SE','password' => password_hash('SE', PASSWORD_BCRYPT)));//2
        DB::table('developer')->insert(array('name' => 'Ubisoft Montreal','username' => 'UM','password' => password_hash('UM', PASSWORD_BCRYPT)));//3
        DB::table('developer')->insert(array('name' => 'Ubisoft','username' => 'UB','password' => password_hash('UB', PASSWORD_BCRYPT)));//4
        DB::table('developer')->insert(array('name' => 'Sports Interactive','username' => 'SI','password' => password_hash('SI', PASSWORD_BCRYPT)));//5
        DB::table('developer')->insert(array('name' => 'SEGA','username' => 'SE2','password' => password_hash('SE2', PASSWORD_BCRYPT)));//6
        DB::table('developer')->insert(array('name' => 'Jackbox Games, Inc.','username' => 'JGI','password' => password_hash('JGI', PASSWORD_BCRYPT)));//7
        DB::table('developer')->insert(array('name' => 'Saber Interactive','username' => 'SI2','password' => password_hash('SI2', PASSWORD_BCRYPT)));//8
        DB::table('developer')->insert(array('name' => 'Focus Home Interactive','username' => 'FHI','password' => password_hash('FHI', PASSWORD_BCRYPT)));//9
        DB::table('developer')->insert(array('name' => 'CREATIVE ASSEMBLY','username' => 'CA','password' => password_hash('CA', PASSWORD_BCRYPT)));//10
        DB::table('developer')->insert(array('name' => 'ZA/UM','username' => 'ZA','password' => password_hash('ZA', PASSWORD_BCRYPT)));//11
        DB::table('developer')->insert(array('name' => 'King Art Games','username' => 'KAG','password' => password_hash('KAG', PASSWORD_BCRYPT)));//12
        DB::table('developer')->insert(array('name' => 'Deep Silver','username' => 'DS','password' => password_hash('DS', PASSWORD_BCRYPT)));//13
        DB::table('developer')->insert(array('name' => 'Psyonix LLC','username' => 'PL','password' => password_hash('PL', PASSWORD_BCRYPT)));//14
        DB::table('developer')->insert(array('name' => 'Frontier Developments','username' => 'FD','password' => password_hash('FD', PASSWORD_BCRYPT)));//15



    }
}
