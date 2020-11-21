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
        DB::table('developer')->insert(
            array(
                'name' => 'People Can Fly',
            )
        );
        DB::table('developer')->insert(
            array(
                'name' => 'Square Enix',
            )
        );
    }
}
