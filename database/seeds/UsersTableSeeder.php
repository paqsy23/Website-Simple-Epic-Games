<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                'name' => 'Paqsy',
                'username' => 'paqsy',
                'password' => password_hash('123', PASSWORD_BCRYPT),
                'email' => 'Paqsy123@gmail.com',
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'Billy',
                'username' => 'billy',
                'password' => password_hash('123', PASSWORD_BCRYPT),
                'email' => 'billy123@gmail.com',
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'Vincent',
                'username' => 'vincent',
                'password' => password_hash('123', PASSWORD_BCRYPT),
                'email' => 'vincent123@gmail.com',
            )
        );

        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            DB::table('users')->insert(
                array(
                    'name' => $faker->name,
                    'username' => $faker->userName,
                    'password' => password_hash('123', PASSWORD_BCRYPT),
                    'email' => $faker->safeEmail,
                )
            );
        }
    }
}
