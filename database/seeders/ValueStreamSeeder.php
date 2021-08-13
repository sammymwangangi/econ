<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prod\ValueStream;

class ValueStreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value_stream1 = ValueStream::create([
            'name' => 'STAT'
        ]);

        $value_stream2 = ValueStream::create([
            'name' => 'ENV'
        ]);

        $value_stream3 = ValueStream::create([
            'name' => 'EXP'
        ]);

        $value_stream4 = ValueStream::create([
            'name' => 'EXB'
        ]);
    }
}
