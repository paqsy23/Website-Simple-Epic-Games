<?php

use Illuminate\Database\Seeder;
use PharIo\Manifest\Library;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DeveloperTableSeeder::class);
        $this->call(PlatformTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(LibraryTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(HtagTableSeeder::class);
        $this->call(HplatformTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
    }
}
