<?php

namespace Database\Seeders;

use App\Models\Edication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EdicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $data = [[
        'id' => Str::uuid(),
        'name' => 'SMA  1 DENPASAR',
        'title' => '-',
        'start_date' => '2014-06-12',
        'end_date' => '2018-06-12',
        'description' => 'lorem, ipsum dolor sit amet consectetur adipisicing alit, voluptatem necessitatibus au',
    ],

    [
        'id' => Str::uuid(),
        'name' => 'instutue',
        'title' => '-',
        'start_date' => '2014-06-12',
        'end_date' => '2018-06-12',
        'description' => 'lorem, ipsum dolor sit amet consectetur adipisicing alit, voluptatem necessitatibus au',
    ]];
    Edication::insert($data);
    }

}
