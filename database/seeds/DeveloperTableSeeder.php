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
        DB::table('developer')->insert(array('name' => 'People Can Fly','username' => 'PCF','email'=>'pcf@gmail.com','password' => password_hash('PCF', PASSWORD_BCRYPT),'status' => 1));//1
        DB::table('developer')->insert(array('name' => 'Square Enix','username' => 'SE','email'=>'se@gmail.com','password' => password_hash('SE', PASSWORD_BCRYPT),'status' => 1));//2
        DB::table('developer')->insert(array('name' => 'Ubisoft Montreal','username' => 'UM','email'=>'um@gmail.com','password' => password_hash('UM', PASSWORD_BCRYPT),'status' => 1));//3
        DB::table('developer')->insert(array('name' => 'Ubisoft','username' => 'UB','email'=>'ub@gmail.com','password' => password_hash('UB', PASSWORD_BCRYPT),'status' => 1));//4
        DB::table('developer')->insert(array('name' => 'Sports Interactive','username' => 'SI','email'=>'si@gmail.com','password' => password_hash('SI', PASSWORD_BCRYPT),'status' => 1));//5
        DB::table('developer')->insert(array('name' => 'SEGA','username' => 'SE2','email'=>'se2@gmail.com','password' => password_hash('SE2', PASSWORD_BCRYPT),'status' => 1));//6
        DB::table('developer')->insert(array('name' => 'Jackbox Games, Inc.','username' => 'JGI','email'=>'jgi@gmail.com','password' => password_hash('JGI', PASSWORD_BCRYPT),'status' => 1));//7
        DB::table('developer')->insert(array('name' => 'Saber Interactive','username' => 'SI2','email'=>'si2@gmail.com','password' => password_hash('SI2', PASSWORD_BCRYPT),'status' => 1));//8
        DB::table('developer')->insert(array('name' => 'Focus Home Interactive','username' => 'FHI','email'=>'fhi@gmail.com','password' => password_hash('FHI', PASSWORD_BCRYPT),'status' => 1));//9
        DB::table('developer')->insert(array('name' => 'CREATIVE ASSEMBLY','username' => 'CA','email'=>'ca@gmail.com','password' => password_hash('CA', PASSWORD_BCRYPT),'status' => 1));//10
        DB::table('developer')->insert(array('name' => 'ZA/UM','username' => 'ZA','email'=>'za@gmail.com','password' => password_hash('ZA', PASSWORD_BCRYPT),'status' => 1));//11
        DB::table('developer')->insert(array('name' => 'King Art Games','username' => 'KAG','email'=>'kag@gmail.com','password' => password_hash('KAG', PASSWORD_BCRYPT),'status' => 1));//12
        DB::table('developer')->insert(array('name' => 'Deep Silver','username' => 'DS','email'=>'ds@gmail.com','password' => password_hash('DS', PASSWORD_BCRYPT),'status' => 1));//13
        DB::table('developer')->insert(array('name' => 'Psyonix LLC','username' => 'PL','email'=>'pl@gmail.com','password' => password_hash('PL', PASSWORD_BCRYPT),'status' => 1));//14
        DB::table('developer')->insert(array('name' => 'Frontier Developments','username' => 'FD','email'=>'fd@gmail.com','password' => password_hash('FD', PASSWORD_BCRYPT),'status' => 1));//15
    }
}
