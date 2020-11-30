<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction')->insert(
            array(
                'tanggal_trans' => Carbon::parse('12-9-2020'),
                'game_price' => '10000',
                'game_id' => '1',
                'user_id' => '1',
            )
        );
        DB::table('transaction')->insert(
            array(
                'tanggal_trans' => Carbon::parse('15-10-2020'),
                'game_price' => '20000',
                'game_id' => '2',
                'user_id' => '1',
            )
        );
        DB::table('transaction')->insert(
            array(
                'tanggal_trans' => Carbon::parse('13-9-2020'),
                'game_price' => '30000',
                'game_id' => '5',
                'user_id' => '2',
            )
        );
        DB::table('transaction')->insert(
            array(
                'tanggal_trans' => Carbon::parse('12-10-2020'),
                'game_price' => '40000',
                'game_id' => '4',
                'user_id' => '3',
            )
        );
    }
}
