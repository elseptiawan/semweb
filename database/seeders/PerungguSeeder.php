<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerungguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perunggu')->insert([
            'negara' => 'Thailand',
            '2003' => '98',
            '2005' => '118',
            '2007' => '103',
            '2009' => '122',
            '2011' => '120',
            '2013' => '81',
            '2015' => '69',
            '2017' => '88',
            '2019' => '123',
            '2021' => '137',
            'total' => '1059',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Vietnam',
            '2003' => '91',
            '2005' => '89',
            '2007' => '82',
            '2009' => '103',
            '2011' => '100',
            '2013' => '86',
            '2015' => '60',
            '2017' => '60',
            '2019' => '105',
            '2021' => '116',
            'total' => '892',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Indonesia',
            '2003' => '98',
            '2005' => '89',
            '2007' => '83',
            '2009' => '108',
            '2011' => '143',
            '2013' => '111',
            '2015' => '74',
            '2017' => '90',
            '2019' => '111',
            '2021' => '81',
            'total' => '988',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Filipina',
            '2003' => '75',
            '2005' => '94',
            '2007' => '96',
            '2009' => '116',
            '2011' => '77',
            '2013' => '38',
            '2015' => '66',
            '2017' => '64',
            '2019' => '121',
            '2021' => '105',
            'total' => '852',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Malaysia',
            '2003' => '49',
            '2005' => '65',
            '2007' => '96',
            '2009' => '71',
            '2011' => '81',
            '2013' => '77',
            '2015' => '66',
            '2017' => '86',
            '2019' => '71',
            '2021' => '90',
            'total' => '752',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Singapura',
            '2003' => '50',
            '2005' => '55',
            '2007' => '41',
            '2009' => '66',
            '2011' => '73',
            '2013' => '45',
            '2015' => '102',
            '2017' => '73',
            '2019' => '68',
            '2021' => '73',
            'total' => '646',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Myanmar',
            '2003' => '50',
            '2005' => '48',
            '2007' => '47',
            '2009' => '49',
            '2011' => '47',
            '2013' => '85',
            '2015' => '31',
            '2017' => '20',
            '2019' => '51',
            '2021' => '35',
            'total' => '453',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Laos',
            '2003' => '15',
            '2005' => '12',
            '2007' => '32',
            '2009' => '27',
            '2011' => '36',
            '2013' => '49',
            '2015' => '25',
            '2017' => '21',
            '2019' => '28',
            '2021' => '33',
            'total' => '278',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Kamboja',
            '2003' => '11',
            '2005' => '9',
            '2007' => '11',
            '2009' => '36',
            '2011' => '24',
            '2013' => '28',
            '2015' => '9',
            '2017' => '12',
            '2019' => '36',
            '2021' => '41',
            'total' => '217',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Brunei Darussalam',
            '2003' => '8',
            '2005' => '2',
            '2007' => '4',
            '2009' => '6',
            '2011' => '7',
            '2013' => '6',
            '2015' => '6',
            '2017' => '9',
            '2019' => '6',
            '2021' => '1',
            'total' => '55',
        ]);

        DB::table('perunggu')->insert([
            'negara' => 'Timor Leste',
            '2003' => '0',
            '2005' => '3',
            '2007' => '0',
            '2009' => '5',
            '2011' => '6',
            '2013' => '5',
            '2015' => '1',
            '2017' => '3',
            '2019' => '5',
            '2021' => '2',
            'total' => '30',
        ]);
    }
}