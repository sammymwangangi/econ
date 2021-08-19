<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prod\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shift::create([
            'name' => 'A',
            'hours' => 8,
            'mins' => 480,
            'from_1' => '08:00:00',
            'to_1' => '12:30:00',
            'from_2' => '13:00:00',
            'to_2' => '16:30:00'
        ]);



        Shift::create([
            'name' => 'A+',
            'hours' => 9,
            'mins' => 540,
            'from_1' => '08:00:00',
            'to_1' => '12:30:00',
            'from_2' => '13:00:00',
            'to_2' => '17:30:00'
        ]);



        Shift::create([
            'name' => 'B',
            'hours' => 14,
            'mins' => 840,
            'from_1' => '16:30:00',
            'to_1' => '07:00:00',
            'from_2' => NULL,
            'to_2' => NULL
        ]);



        Shift::create([
            'name' => 'C',
            'hours' => 5,
            'mins' => 300,
            'from_1' => '07:30:00',
            'to_1' => '12:30:00',
            'from_2' => NULL,
            'to_2' => NULL
        ]);



        Shift::create([
            'name' => 'A++',
            'hours' => 9.5,
            'mins' => 570,
            'from_1' => '08:00:00',
            'to_1' => '12:30:00',
            'from_2' => '13:00:00',
            'to_2' => '18:00:00'
        ]);
    }
}
