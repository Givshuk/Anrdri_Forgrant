<?php

use Illuminate\Database\Seeder;

class IntervalPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('interval_prices')->insert([
            'product_id' => 1,
            'date_from' => '2016-05-01',
            'date_till' =>'2017-01-01',
            'price' => 12000,
            'created_at' => '2016-04-28'
        ]);

        DB::table('interval_prices')->insert([
            'product_id' => 1,
            'date_from' => '2017-07-01',
            'date_till' =>'2017-10-20',
            'price' => 15000,
            'created_at' => '2016-04-26'
        ]);
        DB::table('interval_prices')->insert([
            'product_id' => 1,
            'date_from' => '2017-06-01',
            'date_till' =>'2017-10-20',
            'price' => 20000,
            'created_at' => '2016-04-25'
        ]);

        }
}
