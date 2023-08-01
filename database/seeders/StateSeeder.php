<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['stateName' => 'new'],
            ['stateName' => 'haveF']
        ];

        foreach($states as $state){
            State::create($state);
        }
    }
}
