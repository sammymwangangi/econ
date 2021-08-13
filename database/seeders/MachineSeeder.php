<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prod\Machine;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Machine::create([
            'name' => 'BL-1',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'BL-2',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'TIM-1',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'TIM-2',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'TIM-3',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'BIELO-2',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'CUTTING ',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'MOZ-P',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'KORD-1',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'STITCHING',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'FILING ',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'LOOSELEAF',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'SPIRAL ',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'CASE ',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'Polar 1',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => '3- KNIFE',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'FOLDING',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'KNOCKING',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'SCHNEIDER-1',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'POLAR 3',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'COLLECTION',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'Accounts',
            'value_stream_id' => 1
        ]);

        Machine::create([
            'name' => 'Bielo1',
            'value_stream_id' => 3
        ]);

        Machine::create([
            'name' => 'Kugler',
            'value_stream_id' => 3
        ]);

        Machine::create([
            'name' => 'Kord2',
            'value_stream_id' => 3
        ]);

        Machine::create([
            'name' => 'Muller',
            'value_stream_id' => 3
        ]);

        Machine::create([
            'name' => 'SORTING',
            'value_stream_id' => 3
        ]);

        Machine::create([
            'name' => 'POLAR 1',
            'value_stream_id' => 3
        ]);

        Machine::create([
            'name' => 'POLAR 2',
            'value_stream_id' => 3
        ]);

        Machine::create([
            'name' => 'BOLT',
            'value_stream_id' => 4
        ]);

        Machine::create([
            'name' => 'NOVA',
            'value_stream_id' => 4
        ]);

        Machine::create([
            'name' => 'SCHNEIDER-4',
            'value_stream_id' => 4
        ]);

        Machine::create([
            'name' => 'WD26G',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD26C',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD29E',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD99',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD49N',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD49O',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD149',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD86',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD46A',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD46N',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD33',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD46L',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD46B',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'WD49E',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'HP 250 A',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'HP 250 B',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'HP 250 C',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'HP 250 D',
            'value_stream_id' => 2
        ]);

        Machine::create([
            'name' => 'HP 250 E',
            'value_stream_id' => 2
        ]);
    }
}
