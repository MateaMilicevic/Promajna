<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class reservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insertGetId([
            'title' => 'Nikola',
            'apartment_id' => 1,
            'contact'=> 063664122,
            'number_of_people'=> 5,
            'starts_at' => '2019-05-12',
            'ends_at' => '2019-05-16',
            'color' => '#4286f4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


            DB::table('reservations')->insertGetId([
                'title' => 'Marko',
                'apartment_id' => 1,
                'contact'=> 063664122,
                'number_of_people'=> 5,
                'starts_at' => '2019-05-12',
                'ends_at' => '2019-05-16',
                'color' => '#706b63',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

                DB::table('reservations')->insertGetId([
                    'title' => 'Natasa',
                    'apartment_id' => 1,
                    'contact'=> 063664122,
                    'number_of_people'=> 5,
                    'starts_at' => '2019-05-01',
                    'ends_at' => '2019-05-06',
                    'color' => '#706b63',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ]);
    }
}
