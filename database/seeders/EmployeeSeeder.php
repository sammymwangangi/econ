<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prod\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'code' => '4',
            'grade' => 'D',
            'name' => 'Daniel Mutangili Mutuku',
            'designation' => 'Quality Controller',
            'department' => 'Operations',
            'vs' => 'ALL',
            'cell' => 'All',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '217',
            'reports_to_name' => 'Kamal Rajput Kumar',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '5',
            'grade' => 'G',
            'name' => 'Davidson Wesonga Kabiri',
            'designation' => 'Material handler',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'All',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '6',
            'grade' => 'F',
            'name' => 'Michael Wambua Mathias',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'Stationery',
            'cell' => 'Folding',
            'machine' => 'Folding',
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '7',
            'grade' => 'G',
            'name' => 'Paul Bosire Monyancha',
            'designation' => 'Picker',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'FG store',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '8',
            'grade' => 'F',
            'name' => 'Shedrack Musembi Kimatu',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Beilo 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '9',
            'grade' => 'F',
            'name' => 'Stephen Muendo Mutua',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Nova',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '10',
            'grade' => 'F',
            'name' => 'Johnson mutuku Kilonzo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Beilo 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '11',
            'grade' => 'F',
            'name' => 'Josiah mutava Kamula',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Beilo 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '13',
            'grade' => 'F',
            'name' => 'Jackline Nduku Mwinzi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Nova',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '14',
            'grade' => 'G',
            'name' => 'Jeneffer Kathina Mutinda',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Muller-Counter ',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '15',
            'grade' => 'G',
            'name' => 'Judith Ngonyo Masila',
            'designation' => 'Sorter',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Rejects /Rework',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '16',
            'grade' => 'F',
            'name' => 'Judith Rael Mumbua',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'Stationery',
            'cell' => 'Binding line 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '17',
            'grade' => 'G',
            'name' => 'Veronicah Wanjiru Njoroge',
            'designation' => 'Sorter',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Rejects /rework',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '19',
            'grade' => 'F',
            'name' => 'Carolyne Kerubo Onyancha',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'All',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '20',
            'grade' => 'G',
            'name' => 'Christine Odero',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'Design',
            'cell' => 'Design',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '226',
            'reports_to_name' => 'Augustus Omwenga Makana',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '21',
            'grade' => 'G',
            'name' => 'Daniel Mutinda Mutiso',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'Stationery',
            'cell' => 'Timson 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '22',
            'grade' => 'F',
            'name' => 'David Mweu',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kuggler',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '23',
            'grade' => 'F',
            'name' => 'Erastus Muli Mutua',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Beilo 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '24',
            'grade' => 'G',
            'name' => 'Francis Kinyamasyo Margaret',
            'designation' => 'Cover inserter',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Beilo 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '25',
            'grade' => 'F',
            'name' => 'Fredrick Otieno Odinga',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kord 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '26',
            'grade' => 'G',
            'name' => 'Gordon Odhiambo Bonyo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Polar',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '27',
            'grade' => 'F',
            'name' => 'Henry Muhindi Asira',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'Stationery',
            'cell' => 'Mozp',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '28',
            'grade' => 'F',
            'name' => 'Muthiani Maleve',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Beilo 1-polar',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '29',
            'grade' => 'F',
            'name' => 'Robert Ngala Muthoka',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kord 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '30',
            'grade' => 'G',
            'name' => 'Sheila Mweka Kanyanya',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '31',
            'grade' => 'F',
            'name' => 'Shem Abuga Sereti',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kuggler & Beilo 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '33',
            'grade' => 'F',
            'name' => 'Evans Ochieng Opes',
            'designation' => 'Supervisor',
            'department' => 'Operations',
            'vs' => 'EXB/EXP',
            'cell' => 'EXB/EXP',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '217',
            'reports_to_name' => 'Kamal Rajput Kumar',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '34',
            'grade' => 'F',
            'name' => 'William Basili Mukara',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Knocking',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '35',
            'grade' => 'F',
            'name' => 'Anthony Masika Ngome',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'Envelope',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '36',
            'grade' => 'F',
            'name' => 'Edward Musembi Kyego',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Case binding-Casing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '38',
            'grade' => 'F',
            'name' => 'George Otieno Ogembo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Cutting-Shneider',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '39',
            'grade' => 'F',
            'name' => 'Kennedy Omondi',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Cutting-Polar 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '40',
            'grade' => 'F',
            'name' => 'Muloboti Simon Con',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Beilo 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '41',
            'grade' => 'F',
            'name' => 'Simon Mutinda Mwanthi',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Print tools',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '43',
            'grade' => 'G',
            'name' => 'Robert katithi mutua',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Mozp',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '44',
            'grade' => 'F',
            'name' => 'Annastacia Nguta Ndavi',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Spiral',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '45',
            'grade' => 'G',
            'name' => 'Benedeta Nthenya Kitaka',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '46',
            'grade' => 'F',
            'name' => 'Esther Kavindu Mutunga',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Spiral-dye punching',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '48',
            'grade' => 'G',
            'name' => 'Eunice Mwende Kilyambuli',
            'designation' => 'Putty Fixer',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '49',
            'grade' => 'F',
            'name' => 'Florence Kambua Ndonye',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '50',
            'grade' => 'G',
            'name' => 'Irene Mulee Kitavi',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'Envelope',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '52',
            'grade' => 'F',
            'name' => 'Jane Nekesa Mukanda',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2-Numbering',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '53',
            'grade' => 'G',
            'name' => 'Josephine Kiloko Matolo',
            'designation' => 'Cover Fixer',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '54',
            'grade' => 'G',
            'name' => 'Josephine Mbatha Mwangangi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '55',
            'grade' => 'G',
            'name' => 'Judy Moraa Mato',
            'designation' => 'Glue/seperation',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding Line 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '56',
            'grade' => 'G',
            'name' => 'Lucia Nthnya Kiio',
            'designation' => 'Mechanism Fixing',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Filing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '57',
            'grade' => 'F',
            'name' => 'Lucy Wambui Kamande',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Stitching',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '58',
            'grade' => 'G',
            'name' => 'Martha Syombua Mulinge',
            'designation' => 'Board Inserter',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Shrink Wrap',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '59',
            'grade' => 'G',
            'name' => 'Mary W. Karuiru',
            'designation' => 'Putty Fixer',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '60',
            'grade' => 'F',
            'name' => 'Mutindi Mwinzi',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '61',
            'grade' => 'F',
            'name' => 'Nancy Atieno Ochuodho',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Spiral',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '62',
            'grade' => 'G',
            'name' => 'Nancy K. Omwenga',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Filing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '63',
            'grade' => 'D',
            'name' => 'Naom  Nthamo Kiilu',
            'designation' => 'Team leader',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Stationery',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '64',
            'grade' => 'G',
            'name' => 'Ngina Maingi',
            'designation' => 'Fixing',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Case binding -Fixing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '65',
            'grade' => 'F',
            'name' => 'Peninah  K Ngondi',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 1-Gluing Machine',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '66',
            'grade' => 'G',
            'name' => 'Phides Mwemba Mwangeti',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 1-board and putty ',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '68',
            'grade' => 'F',
            'name' => 'Rebecca Mukai Nzula',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson -mina binder',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '69',
            'grade' => 'G',
            'name' => 'Virginia Nduku Mulandi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding ;line 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '71',
            'grade' => 'F',
            'name' => 'Zipporah Koko Nzuki',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 1-thead sewing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '72',
            'grade' => 'F',
            'name' => 'Charles Wambua Mutuku',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '73',
            'grade' => 'F',
            'name' => 'Jane Ngina Ndonye',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 1-Stitching machine',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '74',
            'grade' => 'F',
            'name' => 'Annastacia Wayua Kiio',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2-gluing ',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '75',
            'grade' => 'G',
            'name' => 'Catherine Mwende',
            'designation' => 'Cover fixer',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '77',
            'grade' => 'F',
            'name' => 'Charles Obilo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Mozp',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '78',
            'grade' => 'F',
            'name' => 'Evans Ogeto Tochi',
            'designation' => 'Knocking ',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Knocking',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '79',
            'grade' => 'G',
            'name' => 'Felista Mokeira Allijah',
            'designation' => 'Folding/collection',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Stitching',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '80',
            'grade' => 'G',
            'name' => 'Jane Wangithi Muriuki',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Print tools',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '81',
            'grade' => 'F',
            'name' => 'John Maingi Kikuvi',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Beilo 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '83',
            'grade' => 'F',
            'name' => 'Juliet Namaemba Sirengo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 2-numbering',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '85',
            'grade' => 'F',
            'name' => 'Leonard Nzaka Gibson',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kord 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '87',
            'grade' => 'F',
            'name' => 'Maithya  Mutunga',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Mozp',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '88',
            'grade' => 'G',
            'name' => 'Samuel Murathe Maina',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Mozp',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '89',
            'grade' => 'F',
            'name' => 'Josphat Odinga Sakwa',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 1 & Beilo 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '92',
            'grade' => 'C3',
            'name' => 'Abednego Muoki Mutuku',
            'designation' => 'Engineer',
            'department' => 'Operations',
            'vs' => 'Maintenance',
            'cell' => 'All',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '218',
            'reports_to_name' => 'Wambua Stanslaus John',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '94',
            'grade' => 'G',
            'name' => 'John Mutuku Wambua ',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Bolt',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '95',
            'grade' => 'F',
            'name' => 'Fredrick P. Makoma',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Banker 26G',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '96',
            'grade' => 'F',
            'name' => 'Jackson Sakwa Ayuka',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Banker 26C',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '97',
            'grade' => 'F',
            'name' => 'John Mbithi Musyoki',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Banker 29E',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '98',
            'grade' => 'F',
            'name' => 'Joseph Mbau',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Small Pocket 46B',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '99',
            'grade' => 'F',
            'name' => 'Nicodemus K Kithome',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '100',
            'grade' => 'F',
            'name' => 'Titus Makoma Maingi ',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big Pocket 49O',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '101',
            'grade' => 'G',
            'name' => 'Alex  Omonyi Sendora',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '103',
            'grade' => 'G',
            'name' => 'Bruno Omingo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Dye cutting',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '105',
            'grade' => 'F',
            'name' => 'Dennis Mariita Nyakundi',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Dye cutting',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '106',
            'grade' => 'G',
            'name' => 'Dominic Ochomba',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Sheeting',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '107',
            'grade' => 'F',
            'name' => 'Douglas Amurago',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '108',
            'grade' => 'G',
            'name' => 'Emmanuel Odera',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '109',
            'grade' => 'G',
            'name' => 'Eugene  Ochieng Odhiambo',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '111',
            'grade' => 'F',
            'name' => 'Francis Muyale',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '112',
            'grade' => 'F',
            'name' => 'Gideon Athiaya',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '113',
            'grade' => 'G',
            'name' => 'Ian Manyasa',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Small medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '114',
            'grade' => 'G',
            'name' => 'Jackson Wambua Mwendwa',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Dye cutting',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '115',
            'grade' => 'F',
            'name' => 'Jacob Nzangi Mutuku',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '117',
            'grade' => 'F',
            'name' => 'James Mwania',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Sheeting',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '118',
            'grade' => 'F',
            'name' => 'Johnbosco Mutua',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '119',
            'grade' => 'F',
            'name' => 'Joneson Mutie Nzau',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '122',
            'grade' => 'G',
            'name' => '',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '123',
            'grade' => 'G',
            'name' => 'Kevin Ouma Otieno',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '125',
            'grade' => 'F',
            'name' => 'Mauti Bisera Moffat',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Sheeting',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '127',
            'grade' => 'F',
            'name' => 'Muthoka Kasivu',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Dye cut',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '128',
            'grade' => 'F',
            'name' => 'Nixon Lizalia Muchera',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '129',
            'grade' => 'F',
            'name' => 'Onesmus Musyoki Ndulii',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '131',
            'grade' => 'F',
            'name' => 'Raphael Angenyi Ongera',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Bank',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '132',
            'grade' => 'F',
            'name' => 'Robert Mombo Gwaro',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Waste',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '134',
            'grade' => 'F',
            'name' => 'Samwel Kyalo Mwau',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Small pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '135',
            'grade' => 'G',
            'name' => 'Silas Odhiambo Wandera',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '136',
            'grade' => 'F',
            'name' => 'Stanley Manyasa Olusamu',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Window ',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '137',
            'grade' => 'F',
            'name' => 'Stephen Luvwa  Muchera',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Dye cut',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '138',
            'grade' => 'F',
            'name' => 'Stephen Njuki Muthigani',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '139',
            'grade' => 'G',
            'name' => 'Thaddeus Nzivo',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '140',
            'grade' => 'G',
            'name' => 'Timothy Bwala Odinga',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '142',
            'grade' => 'G',
            'name' => 'Catherine Nzula Musyoki',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Banker',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '143',
            'grade' => 'G',
            'name' => 'Domiannah Mulekyo Maoka',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '144',
            'grade' => 'G',
            'name' => 'Doreen Kawira Mbuba',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Bank',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '145',
            'grade' => 'G',
            'name' => 'Georgina Nduku Nduume',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '147',
            'grade' => 'G',
            'name' => 'Judy Kasyoka Mwanzia',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Small pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '148',
            'grade' => 'G',
            'name' => 'Koki Muoki',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '149',
            'grade' => 'G',
            'name' => 'Lydia Moraa',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '151',
            'grade' => 'G',
            'name' => 'Mary  Wanzau  Mwangangi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Dye cut',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '152',
            'grade' => 'G',
            'name' => 'Patricia Nthenya Musembi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '154',
            'grade' => 'F',
            'name' => 'Schollah Mutisya',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '155',
            'grade' => 'G',
            'name' => 'Schollastica Gatwiri',
            'designation' => 'Receptionist',
            'department' => 'Admin',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '387',
            'reports_to_name' => 'Amrat Dinesh Naran',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '156',
            'grade' => 'G',
            'name' => 'Schollastica Kakei Matava ',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '157',
            'grade' => 'G',
            'name' => 'Sharon Mbithe Mwikali',
            'designation' => 'Assistant',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '158',
            'grade' => 'G',
            'name' => 'Veronicah Ndungu',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '159',
            'grade' => 'G',
            'name' => 'Virginia Mulike Nyamai',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Bank',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '160',
            'grade' => 'C3',
            'name' => 'David Kimeu John',
            'designation' => 'Engineer',
            'department' => 'Operations',
            'vs' => 'Maintenance',
            'cell' => 'All',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '218',
            'reports_to_name' => 'Wambua Stanslaus John',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '161',
            'grade' => 'F',
            'name' => 'Lucas wambua kimako',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'COMP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '162',
            'grade' => 'F',
            'name' => 'Geoffrey Ondieki  Gwaro',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'COMP',
            'cell' => 'Slitter',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '163',
            'grade' => 'F',
            'name' => 'Jacinta Kambua M.',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => ' EXP',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '164',
            'grade' => 'F',
            'name' => 'Wilson Kasyoki Kimeu',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'COMP',
            'cell' => 'Timson 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '165',
            'grade' => 'F',
            'name' => 'Everlyne Mutanu Keli',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'COMP',
            'cell' => 'Numbering',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '166',
            'grade' => 'G',
            'name' => 'Jannet Moraa Marube',
            'designation' => 'Assistant',
            'department' => 'Admin',
            'vs' => 'Administration',
            'cell' => 'Administration',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '167',
            'grade' => 'G',
            'name' => 'Isabellah Nyangeri',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'Design',
            'cell' => 'Plates',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '226',
            'reports_to_name' => 'Augustus Omwenga Makana',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '168',
            'grade' => 'F',
            'name' => 'Resah Ndubi Geoffrey',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 3',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '169',
            'grade' => 'F',
            'name' => 'Stephen Owino Meyo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '170',
            'grade' => 'F',
            'name' => 'John pakata fetha',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '171',
            'grade' => 'G',
            'name' => 'Gladys Wanjala',
            'designation' => 'Sorter',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Rejects /Rework',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '172',
            'grade' => 'G',
            'name' => 'Vane Kemunto Mayaka',
            'designation' => 'Covers',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Covers',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '173',
            'grade' => 'F',
            'name' => 'Joseph Kimondo Mutunga',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '174',
            'grade' => 'F',
            'name' => 'Charles Mulwa',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Speed Master',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '176',
            'grade' => 'G',
            'name' => 'Dennis Mosota',
            'designation' => 'Cover Inserter',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '178',
            'grade' => 'F',
            'name' => 'Fred Ojambo Opiyo',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Polar 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '180',
            'grade' => 'G',
            'name' => 'Jackson  Kioko Kyaka',
            'designation' => 'Cover inserter',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '181',
            'grade' => 'G',
            'name' => 'Joseph Maina  Mutemi',
            'designation' => 'Packer ',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);

        Employee::create([
            'code' => '182',
            'grade' => 'F',
            'name' => 'Titus Makau Muli',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);

        Employee::create([
            'code' => '183',
            'grade' => 'D',
            'name' => 'Monica Mwelu Kitaka',
            'designation' => 'Team leader',
            'department' => 'Operations',
            'vs' => 'Computer',
            'cell' => 'Computer',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '217',
            'reports_to_name' => 'Kamal Rajput Kumar',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '184',
            'grade' => 'D',
            'name' => 'Charles Manga Nzioka',
            'designation' => 'Workshop Engineer',
            'department' => 'Operations',
            'vs' => 'Maintenance',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '218',
            'reports_to_name' => 'Wambua Stanslaus John',
            'status' => '1',
        ]);



        Employee::create([
            'code' => '185',
            'grade' => 'F',
            'name' => 'Cleophas Mutuku Mutindi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'Maintenance',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '218',
            'reports_to_name' => 'Wambua Stanslaus John',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '187',
            'grade' => 'G',
            'name' => 'Raphael Musyoki Musau',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'Maintenance',
            'cell' => 'workshop',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '184',
            'reports_to_name' => 'Charles Mang',
            'status' => '0',
        ]);



        Employee::create([
            'code' => '188',
            'grade' => 'G',
            'name' => 'Titus Musyoka Paul',
            'designation' => 'Loader',
            'department' => 'Dispatch',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '190',
            'grade' => 'D',
            'name' => 'David Omondi Opes',
            'designation' => 'Supervisor',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '217',
            'reports_to_name' => 'Kamal Rajput Kumar',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '191',
            'grade' => 'F',
            'name' => 'George Odera Otieno',
            'designation' => 'Messenger',
            'department' => 'Finance',
            'vs' => 'Administration',
            'cell' => 'Administration',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '192',
            'grade' => 'F',
            'name' => 'Joseph Gitonga Wanjohi',
            'designation' => 'Driver',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '193',
            'grade' => 'G',
            'name' => 'Joseph Masyuko Kamula',
            'designation' => 'Loader',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '194',
            'grade' => 'G',
            'name' => 'Josphat Omanga Gwaro',
            'designation' => 'Loader',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '195',
            'grade' => 'F',
            'name' => 'Mwinzi Musili',
            'designation' => 'Driver',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '196',
            'grade' => 'G',
            'name' => 'Philip Nyanchama',
            'designation' => 'Loader',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '216',
            'reports_to_name' => 'Nilesh J Patel',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '197',
            'grade' => 'G',
            'name' => 'Theophilus Ngovi Nzioka',
            'designation' => 'FG Store keeper',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Store office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '200',
            'grade' => 'F',
            'name' => 'Brian Maingi Mulinge',
            'designation' => 'Driver',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '201',
            'grade' => 'G',
            'name' => 'Kennedy Mutua Kamula',
            'designation' => 'Assistant',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Store',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '202',
            'grade' => 'G',
            'name' => 'Kilonzi Mativo',
            'designation' => 'Picker',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Store',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '203',
            'grade' => 'G',
            'name' => 'Robert  Mironga Mosota',
            'designation' => 'Assistant',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '204',
            'grade' => 'G',
            'name' => 'Stephen Keli  Wambua',
            'designation' => 'Assistant',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Store',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '206',
            'grade' => 'G',
            'name' => 'Vincent Ogeto  Arisa',
            'designation' => 'Assistant',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Store',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '208',
            'grade' => 'G',
            'name' => 'Lawrence Okaru Maato',
            'designation' => 'Waste',
            'department' => 'Supply-Chain',
            'vs' => 'Waste',
            'cell' => 'Waste',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '217',
            'reports_to_name' => 'Kamal Rajput Kumar',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '209',
            'grade' => 'G',
            'name' => 'Richard Onchiri Arisa',
            'designation' => 'Waste',
            'department' => 'Supply-Chain',
            'vs' => 'Waste',
            'cell' => 'Waste',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '217',
            'reports_to_name' => 'Kamal Rajput Kumar',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '210',
            'grade' => 'A',
            'name' => 'Bhavesh V Shah',
            'designation' => 'Managing Director',
            'department' => NULL,
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => NULL,
            'reports_to_name' => NULL,
            'status' => '1'
        ]);



        Employee::create([
            'code' => '211',
            'grade' => 'A',
            'name' => 'Vinod N Shah',
            'designation' => 'Director',
            'department' => NULL,
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => NULL,
            'reports_to_name' => NULL,
            'status' => '1'
        ]);



        Employee::create([
            'code' => '212',
            'grade' => 'B',
            'name' => 'Jayantkumar K Haria',
            'designation' => 'Financial Controller',
            'department' => 'Finance',
            'vs' => 'Accounts',
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '213',
            'grade' => 'B',
            'name' => 'Akhil Shah',
            'designation' => 'Operations Manager',
            'department' => 'Operations',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '214',
            'grade' => 'C2',
            'name' => 'Priyan Pravin Shah',
            'designation' => 'Manager',
            'department' => 'Dispatch',
            'vs' => 'Dispatch',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '215',
            'grade' => 'D',
            'name' => 'Nehal Dipak Arya',
            'designation' => 'CS Admin 1',
            'department' => 'Customer Service',
            'vs' => 'Cs',
            'cell' => 'Office Sales',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '216',
            'grade' => 'C2',
            'name' => 'Nilesh J Patel',
            'designation' => 'Manager',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatch',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '217',
            'grade' => 'C2',
            'name' => 'Kamal Rajput Kumar',
            'designation' => 'Production Manager 1',
            'department' => 'Operations',
            'vs' => 'Operations',
            'cell' => 'EXP/Stationery',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '218',
            'grade' => 'C2',
            'name' => 'Wambua Stanslaus John',
            'designation' => 'Manager',
            'department' => 'Operations',
            'vs' => 'Maintenance',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '222',
            'grade' => 'D',
            'name' => 'Rebbeca Wanjiku Kirega',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Nairobi C.B.D',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '223',
            'grade' => 'D',
            'name' => 'Shuffah Olando Suleiman',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Nairobi ',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '224',
            'grade' => 'F',
            'name' => 'Sween Kadunyi Kaguluka',
            'designation' => 'Cook',
            'department' => 'HR',
            'vs' => 'Administration',
            'cell' => 'Kitchen',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '242',
            'reports_to_name' => 'Martha Kalondu Musau',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '226',
            'grade' => 'C3',
            'name' => 'Augustus Omwenga Makana',
            'designation' => 'Chief Designer',
            'department' => 'Customer Service',
            'vs' => 'Administration',
            'cell' => 'Design',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '227',
            'grade' => 'F',
            'name' => 'Catherine Mutanu Kangeu',
            'designation' => 'Merchandiser',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Nairobi',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '223',
            'reports_to_name' => 'Shuffah Olando Suleiman',
            'status' => '1',
        ]);



        Employee::create([
            'code' => '228',
            'grade' => 'F',
            'name' => 'Neima Suleiman',
            'designation' => 'Merchandiser',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Nairobi',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '223',
            'reports_to_name' => 'Shuffah Olando Suleiman',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '229',
            'grade' => 'F',
            'name' => 'Ruth Jemutai Kagoroka',
            'designation' => 'Assistant Cook',
            'department' => 'HR',
            'vs' => 'Administration',
            'cell' => 'Kitchen',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '242',
            'reports_to_name' => 'Martha Kalondu Musau',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '231',
            'grade' => 'C3',
            'name' => 'Caroline Chebet',
            'designation' => 'Manager',
            'department' => 'Customer Service',
            'vs' => 'Cs',
            'cell' => 'Sales office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '232',
            'grade' => 'C3',
            'name' => 'Peris Chebet Ngeny',
            'designation' => 'Production Manager 2',
            'department' => 'Operations',
            'vs' => 'Operations',
            'cell' => 'EXB/Envelope',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '234',
            'grade' => 'C3',
            'name' => 'Elvis Shivachi',
            'designation' => 'Business Development Manager',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '235',
            'reports_to_name' => 'Tim Lare',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '235',
            'grade' => 'C1',
            'name' => 'Tim Lare',
            'designation' => 'Sales Manager',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '237',
            'grade' => 'G',
            'name' => 'James Muoki Wambua',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Medical',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '239',
            'grade' => 'F',
            'name' => 'Zachaeus Munywoki Mwanzia',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 2',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '240',
            'grade' => 'G',
            'name' => 'Jane Mutiso',
            'designation' => 'Cover inserter',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '242',
            'grade' => 'C2',
            'name' => 'Martha Kalondu Musau',
            'designation' => 'Human Resource Officer',
            'department' => 'HR',
            'vs' => 'Administration',
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '245',
            'grade' => 'D',
            'name' => 'Fatuma Juma Mrisho',
            'designation' => 'Cs Admin 3',
            'department' => 'Customer Service',
            'vs' => 'Sales',
            'cell' => 'Sales Office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '248',
            'grade' => 'G',
            'name' => 'Innocent Musyoka',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'COMP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '249',
            'grade' => 'D',
            'name' => 'Noel Oduor Wangalwa',
            'designation' => 'Telesales 1',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Sales Office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '250',
            'grade' => 'D',
            'name' => 'Lilian Katunge',
            'designation' => 'Assistant Designer',
            'department' => 'Operations',
            'vs' => 'Administration',
            'cell' => 'Design',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '251',
            'grade' => 'D',
            'name' => 'Douglas Jumba Imboji',
            'designation' => 'Supervisor',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Envelope',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '232',
            'reports_to_name' => 'Peris Chebet Ngeny',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '252',
            'grade' => 'F',
            'name' => 'Charles Hyslop Manyasa',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Banker 26G',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '253',
            'grade' => 'F',
            'name' => 'Charles Awuor Ouma',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kugler-Polar',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '254',
            'grade' => 'F',
            'name' => 'David Kikonde Kimweli',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Sheeting',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '258',
            'grade' => 'G',
            'name' => 'Delvin Wairimu Nyambura',
            'designation' => 'Cleaner',
            'department' => 'Operations',
            'vs' => 'Administration',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '242',
            'reports_to_name' => 'Martha Kalondu Musau',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '261',
            'grade' => 'F',
            'name' => 'Peter Nzivo Nzuva',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kuggler-couter',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '264',
            'grade' => 'G',
            'name' => 'Jacinta Ndanu Kisale',
            'designation' => 'Ring fixing',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Filing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '265',
            'grade' => 'G',
            'name' => 'Pauline Nzambi Muthangya',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 3',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '267',
            'grade' => 'G',
            'name' => 'Elizabeth Akech Otieno',
            'designation' => 'Cove inserter',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '269',
            'grade' => 'G',
            'name' => 'Faosta Shilaho',
            'designation' => 'Counter',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '270',
            'grade' => 'G',
            'name' => 'Joseph Musembi Makoma',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Muller',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '274',
            'grade' => 'D',
            'name' => 'Shivangi Hirani',
            'designation' => 'Customer Service Admin 2',
            'department' => 'CS',
            'vs' => 'Sales',
            'cell' => 'Sales Office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '275',
            'grade' => 'D',
            'name' => 'Joan Waruguru Nyambura',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Central region',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '276',
            'grade' => 'G',
            'name' => 'Kennedy Gilbert Osoro',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Bank',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '278',
            'grade' => 'G',
            'name' => 'Paul Omondi Ojijo',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '280',
            'grade' => 'G',
            'name' => 'Felix Wambua Muthembwa',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '281',
            'grade' => 'G',
            'name' => 'Denis Ochieng Osodo',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '283',
            'grade' => 'G',
            'name' => 'Shadrack Nyangara Maunde',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '286',
            'grade' => 'G',
            'name' => 'David Nyongesa Wafula',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '287',
            'grade' => 'G',
            'name' => 'Clovins Omondi Omoso',
            'designation' => 'Cover inserter',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '288',
            'grade' => 'G',
            'name' => 'Annastacias Wavinya Musyimi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Filing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '292',
            'grade' => 'F',
            'name' => 'Kennedy Ndondi Ngei',
            'designation' => 'Manager',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '300',
            'grade' => 'G',
            'name' => 'David Nyanchoka sereti',
            'designation' => 'Material  handler',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'EXP',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '301',
            'grade' => 'G',
            'name' => 'Elijah Muraya Kusinjilu',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Big pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '302',
            'grade' => 'G',
            'name' => 'Kennedy Wilson',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Bank',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '304',
            'grade' => 'G',
            'name' => 'Meshack Maundu Muisya',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Small pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '305',
            'grade' => 'G',
            'name' => 'Karanja Simon Mwaura',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Small pocket',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '308',
            'grade' => 'F',
            'name' => 'Aaron Irangu Kibungo',
            'designation' => 'Data clerk',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Store office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '315',
            'grade' => 'G',
            'name' => 'Omache Osoro Raphael',
            'designation' => 'Assistant',
            'department' => 'Supply-Chain',
            'vs' => 'Dispatch',
            'cell' => 'Dispatck',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '216',
            'reports_to_name' => 'Nilesh J Patel',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '316',
            'grade' => 'G',
            'name' => 'Dominic Nyamwamu Mokomba',
            'designation' => 'Material Handler',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'EXB',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '319',
            'grade' => 'G',
            'name' => 'Stephen Wambua Mboya',
            'designation' => 'Material Handler',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Stationery',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '63',
            'reports_to_name' => 'Naom  Nthamo Kiilu',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '320',
            'grade' => 'D',
            'name' => 'Mary Ndinda Ndolo',
            'designation' => 'Telesales 2',
            'department' => 'Customer Service',
            'vs' => 'CS',
            'cell' => 'Sales Office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '322',
            'grade' => 'C2',
            'name' => 'Mohammed Juanid Munshi',
            'designation' => 'Stores Manager',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Store office',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '323',
            'grade' => 'G',
            'name' => 'Martin Kyalo Mbolu',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'Bank',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '324',
            'grade' => 'G',
            'name' => 'Job Sifuna Remu',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Stationery',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '326',
            'grade' => 'G',
            'name' => 'Lela David',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '327',
            'grade' => 'G',
            'name' => 'Loise Wangui Kaghungu',
            'designation' => 'Asistant',
            'department' => 'Operations',
            'vs' => 'Design',
            'cell' => 'Plates',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '226',
            'reports_to_name' => 'Augustus Omwenga Makana',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '328',
            'grade' => 'G',
            'name' => 'Godfrey Odongo Ouma',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXP',
            'cell' => 'Kuggler-polar',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '333',
            'grade' => 'G',
            'name' => 'Daudi Mwalimu',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'Exb',
            'cell' => 'Lineomatic',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '335',
            'grade' => 'D',
            'name' => 'Susan Khakasa Wanyama',
            'designation' => 'Accountant',
            'department' => 'Finance',
            'vs' => 'Accounts',
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '336',
            'grade' => 'F',
            'name' => 'Sylva Mwanzia Musingi',
            'designation' => 'Forklift-driver',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Workshop',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '120',
            'grade' => 'F',
            'name' => 'Alfred Tsalwa Khania',
            'designation' => 'Forklift driver',
            'department' => 'Supply-Chain',
            'vs' => 'Store',
            'cell' => 'Envelope/store',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '337',
            'grade' => 'D',
            'name' => 'Benard Lwova Imbuga',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Coast ',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => NULL,
            'grade' => 'F',
            'name' => 'Lucy Mukiri Mbaabu',
            'designation' => 'Merchandiser',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Nairobi',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => NULL,
            'grade' => 'F',
            'name' => 'Mburu Muchiri',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Kord ',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '341',
            'grade' => 'F',
            'name' => 'Shakila Anyangi Suleiman',
            'designation' => 'Merchandiser',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Nairobi',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '223',
            'reports_to_name' => 'Shuffah Olando Suleiman',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '339',
            'grade' => 'D',
            'name' => 'Timothy Owuor Nyakiti',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Eastern/ Msa Rd',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '340',
            'grade' => 'D',
            'name' => 'Tobias Omondi Ogolah',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Nyanza',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '338',
            'grade' => 'D',
            'name' => 'William Mizety Okoth',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => 'Sales',
            'cell' => 'Rift Valley',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '342',
            'grade' => 'F',
            'name' => 'Antony Musyoki Wambua',
            'designation' => 'Assistant',
            'department' => 'Maintenance',
            'vs' => 'STA/EXP',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '218',
            'reports_to_name' => 'Wambua Stanslaus',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '343',
            'grade' => 'C3',
            'name' => 'Antony Gachuru Macharia',
            'designation' => 'Quality Controler',
            'department' => 'Operations',
            'vs' => 'ALL',
            'cell' => 'All',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '70',
            'grade' => 'F',
            'name' => 'Winfred Katulu Ndolo ',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '51',
            'grade' => 'F',
            'name' => 'Irene Namusonge Wafula',
            'designation' => 'Operator',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '47',
            'grade' => 'G',
            'name' => 'Eunice Akinyi Owiti',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Binding line 1',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '198',
            'grade' => 'G',
            'name' => 'Mercy Waithera Mwangi',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Lineomatic',
            'machine' => 'Nova',
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '86',
            'grade' => 'G',
            'name' => 'lydia Mbithe Mutua',
            'designation' => 'Assistant',
            'department' => 'Stationery',
            'vs' => 'Timson 1',
            'cell' => 'Putty fixing',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'Edward Musembi',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '257',
            'grade' => 'F',
            'name' => 'Jane Mwangi',
            'designation' => 'Receptionist',
            'department' => 'Admin',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '150',
            'grade' => 'F',
            'name' => 'Mary Mwende Kyumwa',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'ENV',
            'cell' => 'SB',
            'machine' => '26C',
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '344',
            'grade' => 'C3',
            'name' => 'Rajiv Kumar',
            'designation' => 'Engineer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '351',
            'grade' => 'G',
            'name' => 'Justus Mbondo Kisale',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Bolt',
            'machine' => 'Bolt',
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '354',
            'grade' => 'G',
            'name' => 'Lucas Onchoke Sosi',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '349',
            'grade' => 'G',
            'name' => 'Evans Misiani',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'Bolt',
            'cell' => 'Bolt',
            'machine' => 'Bolt',
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '355',
            'grade' => 'G',
            'name' => 'Stephen Mutunga',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'Bolt',
            'cell' => 'Bolt',
            'machine' => 'Bolt',
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '350',
            'grade' => 'G',
            'name' => 'Isaiah Obare',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'Bolt',
            'cell' => 'Bolt',
            'machine' => 'Bolt',
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '353',
            'grade' => 'G',
            'name' => 'Francis Mutuku Matheka',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'Envelope',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '356',
            'grade' => 'G',
            'name' => 'Daniel Kyalo Kimange',
            'designation' => 'Packer',
            'department' => 'Operations',
            'vs' => 'Envelope',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '352',
            'grade' => 'G',
            'name' => 'Jaspher Onkoba',
            'designation' => 'Packer',
            'department' => 'EXB',
            'vs' => 'Nova',
            'cell' => 'Nova',
            'machine' => 'Nova',
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '67',
            'grade' => 'G',
            'name' => 'Priscilla Mwikali',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'EXB',
            'cell' => 'Rejects & rework',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '348',
            'grade' => 'G',
            'name' => 'David Kingori Maina',
            'designation' => 'Loader',
            'department' => 'Dispatch',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1',
        ]);



        Employee::create([
            'code' => '364',
            'grade' => 'F',
            'name' => 'David irungu Waithaka',
            'designation' => 'Driver',
            'department' => 'Dispatch',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '357',
            'grade' => 'G',
            'name' => 'Victor Wambua Nzive',
            'designation' => 'Sales Data analyst',
            'department' => 'Operations',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '263',
            'grade' => 'G',
            'name' => 'Kennedy Munyao',
            'designation' => 'Counter',
            'department' => 'Operations',
            'vs' => 'Exp',
            'cell' => 'Material Handler',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '359',
            'grade' => 'G',
            'name' => 'Davies Epale ',
            'designation' => 'Reliever',
            'department' => 'EXP',
            'vs' => 'Beilo 1',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '360',
            'grade' => 'G',
            'name' => 'Peter Kioko',
            'designation' => 'Counter',
            'department' => 'EXP',
            'vs' => 'Kugler',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '361',
            'grade' => 'G',
            'name' => 'Nicholas Mutuku Munywoki',
            'designation' => 'Assistant',
            'department' => 'Operations',
            'vs' => 'STAT',
            'cell' => 'Timson 3',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '291',
            'grade' => 'G',
            'name' => 'Elizabeth Kalumu',
            'designation' => 'Cover Folder',
            'department' => 'Operations',
            'vs' => 'Exp',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '289',
            'grade' => 'G',
            'name' => 'Roseline Anyona',
            'designation' => 'Book Loader',
            'department' => 'EXP',
            'vs' => 'Muller',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '309',
            'grade' => 'G',
            'name' => 'Joselyne Nafula Kaunda',
            'designation' => 'Assistant',
            'department' => 'Design',
            'vs' => 'Design',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '226',
            'reports_to_name' => 'Augustus Omwenga Makana',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '346',
            'grade' => 'G',
            'name' => 'David Anekeya Sakwa',
            'designation' => 'Material handler',
            'department' => 'STAT',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '345',
            'grade' => 'F',
            'name' => 'Mburu Muchiri',
            'designation' => 'Operator',
            'department' => 'STAT',
            'vs' => 'KORD',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '347',
            'grade' => 'F',
            'name' => 'Paul Njogu Kiratu',
            'designation' => 'Operator',
            'department' => 'STAT',
            'vs' => 'MOZP',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '366',
            'grade' => 'D',
            'name' => 'Daniel Muinde Kioko',
            'designation' => 'Designer',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '367',
            'grade' => 'D',
            'name' => 'James Michael Akali',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '225',
            'grade' => 'E',
            'name' => 'Lucy Mukiri Mbaabu',
            'designation' => 'Merchandiser',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '223',
            'reports_to_name' => 'Shuffah Olando Suleiman',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '362',
            'grade' => 'C2',
            'name' => 'Samuel Wambugu Karanja',
            'designation' => 'Kaizen coordinator',
            'department' => 'Operations',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '368',
            'grade' => 'D',
            'name' => 'Sheila Natembea',
            'designation' => 'Assistant Accountant',
            'department' => 'Accounts',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '370',
            'grade' => 'D',
            'name' => 'Irine Chepkurui',
            'designation' => 'Assistant Accountant',
            'department' => 'Accounts',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '369',
            'grade' => 'E',
            'name' => 'Jebichy Herodian',
            'designation' => 'Data clerk',
            'department' => 'Supply-Chain',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '371',
            'grade' => 'E',
            'name' => 'Alfrence Morani Muyeiya',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '372',
            'grade' => 'G',
            'name' => 'Festus Kilonzo Mulu',
            'designation' => 'Loader',
            'department' => 'Stores',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '373',
            'grade' => 'G',
            'name' => 'Mwanzia Mutuku',
            'designation' => 'Loader',
            'department' => 'Stores',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '374',
            'grade' => 'D',
            'name' => 'Doreen Kananu Kamunde',
            'designation' => 'Assistant Accountant',
            'department' => 'Accountant',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '375',
            'grade' => 'D',
            'name' => 'Benson Mule Musembi',
            'designation' => 'Assistant Accountant',
            'department' => 'Accountant',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '376',
            'grade' => 'F',
            'name' => 'Peter Okello Juma',
            'designation' => 'Operator',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '40',
            'reports_to_name' => 'Muloboti Simon Con',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '384',
            'grade' => 'D',
            'name' => 'Irene Nafula Poipoi',
            'designation' => 'CS Admin',
            'department' => 'CS',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '385',
            'grade' => 'D',
            'name' => 'Deepa Dahyalal',
            'designation' => 'Store/Dispatch Admin',
            'department' => 'Stores/Dispatch',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '322',
            'reports_to_name' => 'Mohammed Juanid Munshi',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '386',
            'grade' => 'D',
            'name' => 'Esther Ndanu Patrick',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '387',
            'grade' => 'C2',
            'name' => 'Amrat Dinesh Naran',
            'designation' => 'Customer service manager',
            'department' => 'Customer Service',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '389',
            'grade' => 'D',
            'name' => 'James Akali',
            'designation' => 'Sales Executive',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '390',
            'grade' => 'C2',
            'name' => 'Edwin Nyakundi',
            'designation' => 'HR Intern',
            'department' => 'HR',
            'vs' => 'Administration',
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '391',
            'grade' => 'D',
            'name' => 'Veronicah Wamuyu Kabuthi',
            'designation' => 'Quality Controler',
            'department' => 'Operations',
            'vs' => 'All',
            'cell' => 'All',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '392',
            'grade' => 'G',
            'name' => 'Millicent Riziki Ogula',
            'designation' => 'Receptionist',
            'department' => 'Admin',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '398',
            'grade' => 'G',
            'name' => 'James Waweru Mburu',
            'designation' => 'Driver',
            'department' => 'Dispatch',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1059',
            'grade' => 'G',
            'name' => 'Norah Eva Gatari',
            'designation' => 'Accounts intern',
            'department' => 'Accounts',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1055',
            'grade' => 'D',
            'name' => 'Idah Muthoni Rukwaro',
            'designation' => 'Sales advisor',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '1089',
            'reports_to_name' => 'Bhavin Pitrola',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1061',
            'grade' => 'D',
            'name' => 'Jackson Lisanza Shivanda',
            'designation' => 'Sales rep',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '213',
            'reports_to_name' => 'Akhil Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1028',
            'grade' => 'F',
            'name' => 'Mwendwa Kioko',
            'designation' => 'Packer',
            'department' => 'Stationery',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '63',
            'reports_to_name' => 'Naom  Nthamo Kiilu',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1030',
            'grade' => 'F',
            'name' => 'Soti Denis',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1032',
            'grade' => 'F',
            'name' => 'Kevin Hamisi',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1033',
            'grade' => 'F',
            'name' => 'Fredrick Otieno Omondi',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1034',
            'grade' => 'F',
            'name' => 'John Mwanga Maina',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1035',
            'grade' => 'F',
            'name' => 'Geoffrey Simiyu Nyongesa',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1038',
            'grade' => 'F',
            'name' => 'Titus Kinale Sifuna',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1002',
            'grade' => 'F',
            'name' => 'Stephen Wambani Odera',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1014',
            'grade' => 'F',
            'name' => 'Boniface Muli Kingoo',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0',
        ]);



        Employee::create([
            'code' => '1021',
            'grade' => 'F',
            'name' => 'Mwachitoo Abdallah Mohammed',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1024',
            'grade' => 'F',
            'name' => 'Edwin Wekesa Wafula',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1025',
            'grade' => 'F',
            'name' => 'Jackson Khakali',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1026',
            'grade' => 'F',
            'name' => 'David Okindo Ongangi',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1046',
            'grade' => 'F',
            'name' => 'Brian Peter Nzomo',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1052',
            'grade' => 'F',
            'name' => 'Areba Matara',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '393',
            'grade' => 'F',
            'name' => 'Valentino Muhembi Shitakiwa',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '394',
            'grade' => 'F',
            'name' => 'Stephene Omondi Otieno',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '395',
            'grade' => 'F',
            'name' => 'Kevin Miito Ouko',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '218',
            'reports_to_name' => 'Wambua Stanslaus John',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '396',
            'grade' => 'F',
            'name' => 'Paul Makau Mutua',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '397',
            'grade' => 'F',
            'name' => 'Benjamin Musyoki Kinyoli',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1006',
            'grade' => 'F',
            'name' => 'Justus Muteti Kimuyu',
            'designation' => 'Assistant',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1012',
            'grade' => 'F',
            'name' => 'John Musomi Kitolo',
            'designation' => 'Assistant',
            'department' => 'STAT',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '63',
            'reports_to_name' => 'Naom  Nthamo Kiilu',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1007',
            'grade' => 'F',
            'name' => 'Evans Owino Maramba',
            'designation' => 'Assistant',
            'department' => 'STAT',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '63',
            'reports_to_name' => 'Naom  Nthamo Kiilu',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1039',
            'grade' => 'F',
            'name' => 'Joseph Mani Otsimi',
            'designation' => 'Assistant',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1051',
            'grade' => 'F',
            'name' => 'Augustus Musya Munuve',
            'designation' => 'Assistant',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1062',
            'grade' => 'D',
            'name' => 'Cosmas Konga',
            'designation' => 'Accountant',
            'department' => 'Accounts',
            'vs' => 'Accounts',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '212',
            'reports_to_name' => 'Jayantkumar K Haria',
            'status' => '0',
        ]);



        Employee::create([
            'code' => '1044',
            'grade' => 'F',
            'name' => 'Joyce Nguta Matilu',
            'designation' => 'Assistant',
            'department' => 'STAT',
            'vs' => 'BL 1',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1013',
            'grade' => 'F',
            'name' => 'Daniel Izoberi Mukabi',
            'designation' => 'Assistant',
            'department' => 'STAT',
            'vs' => 'Timson',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '190',
            'reports_to_name' => 'David Omondi Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1015',
            'grade' => 'F',
            'name' => 'Joshua Kiema Jeremiah',
            'designation' => 'Assistant',
            'department' => 'EXB',
            'vs' => 'NOVA',
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1017',
            'grade' => 'F',
            'name' => 'Ephraim Lumbasia Meja',
            'designation' => 'Assistant',
            'department' => 'STAT',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '63',
            'reports_to_name' => 'Naom  Nthamo Kiilu',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1018',
            'grade' => 'F',
            'name' => 'Alexander Kasembeli Wasike',
            'designation' => 'Assistant',
            'department' => 'STAT',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '63',
            'reports_to_name' => 'Naom  Nthamo Kiilu',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1009',
            'grade' => 'F',
            'name' => 'Kennedy Wanyoike Kiio',
            'designation' => 'Loader',
            'department' => 'Dispatch',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1011',
            'grade' => 'F',
            'name' => 'Junior Muthui Ngui',
            'designation' => 'Loader',
            'department' => 'Store',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1029',
            'grade' => 'G',
            'name' => 'Joseph Kikau Paul',
            'designation' => 'Data clerk',
            'department' => 'Store',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '1058',
            'grade' => 'F',
            'name' => 'Daniel Mutua Jeremiah',
            'designation' => 'Driver',
            'department' => 'Admin',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '0'
        ]);



        Employee::create([
            'code' => '238',
            'grade' => 'F',
            'name' => 'Delvin Wairimu Nyambura',
            'designation' => 'Cleaner',
            'department' => 'Admin',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '242',
            'reports_to_name' => 'Martha Kalondu Musau',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '363',
            'grade' => 'F',
            'name' => 'David Kingori Maina',
            'designation' => 'Loader',
            'department' => 'Dispatch',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1',
        ]);



        Employee::create([
            'code' => '364',
            'grade' => 'G',
            'name' => 'David irungu Waithaka',
            'designation' => 'Driver',
            'department' => 'Dispatch',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '214',
            'reports_to_name' => 'Priyan Pravin Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1063',
            'grade' => 'D',
            'name' => 'Gilbert Kipkorir Ngetich',
            'designation' => 'Accountant',
            'department' => 'Accounts',
            'vs' => NULL,
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '1064',
            'reports_to_name' => 'Jayesh Bhatt',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1069',
            'grade' => 'D',
            'name' => 'Oscar Ongaya',
            'designation' => 'Accountant',
            'department' => 'Accounts',
            'vs' => NULL,
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '1064',
            'reports_to_name' => 'Jayesh Bhatt',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1064',
            'grade' => 'B',
            'name' => 'Jayesh Bhatt',
            'designation' => 'Financial Controller',
            'department' => 'Accounts',
            'vs' => NULL,
            'cell' => 'Accounts',
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1083',
            'grade' => 'G',
            'name' => 'Evans Ngondi Ngethe',
            'designation' => 'Assistant',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1',
        ]);



        Employee::create([
            'code' => '1068',
            'grade' => 'G',
            'name' => 'Emmanuel Mutendesya Mutulu',
            'designation' => 'Assistant',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1069',
            'grade' => 'G',
            'name' => 'Gladys Wanjala',
            'designation' => 'Assistant',
            'department' => 'OPEX',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '232',
            'reports_to_name' => 'Peris Chebet Ngeny',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1090',
            'grade' => 'F',
            'name' => 'Alex Lusike Wanjala',
            'designation' => 'Operator',
            'department' => 'Computer',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '183',
            'reports_to_name' => 'Monica Mwelu Kitaka',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1086',
            'grade' => 'D',
            'name' => 'Bansi Halai',
            'designation' => 'Invoicing Admin',
            'department' => 'CS',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '231',
            'reports_to_name' => 'Caroline Chebet',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1091',
            'grade' => 'D',
            'name' => 'Sammy Mwangangi',
            'designation' => 'Programmer',
            'department' => 'IT/Design',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1087',
            'grade' => 'G',
            'name' => 'Julius Kithuka Kamanthe',
            'designation' => 'Packer',
            'department' => 'Envelope',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '251',
            'reports_to_name' => 'Douglas Jumba Imboji',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1083',
            'grade' => 'G',
            'name' => 'Evans Ngondi Ngethe',
            'designation' => 'Assistant',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1',
        ]);



        Employee::create([
            'code' => '1085',
            'grade' => 'G',
            'name' => 'Esmail Odhiambo Adem',
            'designation' => 'Assistant',
            'department' => 'EXP',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '33',
            'reports_to_name' => 'Evans Ochieng Opes',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1089',
            'grade' => 'C3',
            'name' => 'Bhavin Pitrola',
            'designation' => 'Manager',
            'department' => 'Sales',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '210',
            'reports_to_name' => 'Bhavesh V Shah',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1065',
            'grade' => 'G',
            'name' => 'Cosmas Munyao Kilonzo',
            'designation' => 'Assistant',
            'department' => 'Stationery',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '63',
            'reports_to_name' => 'Naom  Nthamo Kiilu',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1076',
            'grade' => 'G',
            'name' => 'James Munyoki Makau',
            'designation' => 'Assistant',
            'department' => 'Store',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);



        Employee::create([
            'code' => '1078',
            'grade' => 'G',
            'name' => 'James Kyalo Mutunga',
            'designation' => 'Assistant',
            'department' => 'Store',
            'vs' => NULL,
            'cell' => NULL,
            'machine' => NULL,
            'territory' => NULL,
            'reports_to_code' => '292',
            'reports_to_name' => 'Kennedy Ndondi Ngei',
            'status' => '1'
        ]);
    }
}
