<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prod\Reject;

class RejectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reject::create([
            'code' => 'R1',
            'name' => 'Plain Sheets',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R2',
            'name' => 'Ruled Sheets',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R3',
            'name' => 'Head & Bottom',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R4',
            'name' => 'Registration rejects/Impresion',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R5',
            'name' => 'Pinless Books',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R6',
            'name' => 'Undersized Books',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R7',
            'name' => 'Plain Books',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R8',
            'name' => 'Wrong margin',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R9',
            'name' => 'Bend Books',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R10',
            'name' => 'Wrong cover',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R11',
            'name' => 'Wrong cutted/Perforation',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R12',
            'name' => 'Scumming on paper',
            'value_stream_id' => 1
        ]);

        Reject::create([
            'code' => 'R13',
            'name' => 'No Margin',
            'value_stream_id' => 4
        ]);

        Reject::create([
            'code' => 'R14',
            'name' => 'Undersized Books',
            'value_stream_id' => 4
        ]);

        Reject::create([
            'code' => 'R15',
            'name' => 'Wrong Folding',
            'value_stream_id' => 4
        ]);

        Reject::create([
            'code' => 'R16',
            'name' => 'Paper Stuck',
            'value_stream_id' => 4
        ]);

        Reject::create([
            'code' => 'R17',
            'name' => 'Setting Rejects/Skipped  Numbers',
            'value_stream_id' => 4
        ]);

        Reject::create([
            'code' => 'R18',
            'name' => 'Mis-aligned glue brwn',
            'value_stream_id' => 2
        ]);

        Reject::create([
            'code' => 'R19',
            'name' => 'Mis-aligned glue wht',
            'value_stream_id' => 2
        ]);

        Reject::create([
            'code' => 'R20',
            'name' => 'Folding error',
            'value_stream_id' => 2
        ]);

        Reject::create([
            'code' => 'R21',
            'name' => 'Paper jamming',
            'value_stream_id' => 2
        ]);

        Reject::create([
            'code' => 'R22',
            'name' => 'Tearing',
            'value_stream_id' => 2
        ]);

        Reject::create([
            'code' => 'R23',
            'name' => 'Feeding',
            'value_stream_id' => 2
        ]);

        Reject::create([
            'code' => 'R24',
            'name' => 'Input Torn blank',
            'value_stream_id' => 2
        ]);

        Reject::create([
            'code' => 'R25',
            'name' => '',
            'value_stream_id' => 2
        ]);
    }
}
