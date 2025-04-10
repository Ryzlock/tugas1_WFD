<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class flightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            [
                'flight_code' => 'A01',
                'origins' => 'CGK',
                'destination' => 'DPS',
                'departure_time' => Carbon::parse('2025-04-11 08:00:00'),
                'arrival_time' => Carbon::parse('2025-04-11 10:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'B02',
                'origins' => 'DPS',
                'destination' => 'SUB',
                'departure_time' => Carbon::parse('2025-04-11 13:30:00'),
                'arrival_time' => Carbon::parse('2025-04-11 15:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'C03',
                'origins' => 'SUB',
                'destination' => 'JOG',
                'departure_time' => Carbon::parse('2025-04-12 07:15:00'),
                'arrival_time' => Carbon::parse('2025-04-12 09:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'D04',
                'origins' => 'JOG',
                'destination' => 'BDO',
                'departure_time' => Carbon::parse('2025-04-12 14:45:00'),
                'arrival_time' => Carbon::parse('2025-04-12 16:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'E05',
                'origins' => 'BDO',
                'destination' => 'LOP',
                'departure_time' => Carbon::parse('2025-04-13 09:30:00'),
                'arrival_time' => Carbon::parse('2025-04-13 11:15:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'F06',
                'origins' => 'LOP',
                'destination' => 'PKU',
                'departure_time' => Carbon::parse('2025-04-13 18:00:00'),
                'arrival_time' => Carbon::parse('2025-04-13 19:40:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_code' => 'G07',
                'origins' => 'PKU',
                'destination' => 'UPG',
                'departure_time' => Carbon::parse('2025-04-14 06:00:00'),
                'arrival_time' => Carbon::parse('2025-04-14 07:15:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}