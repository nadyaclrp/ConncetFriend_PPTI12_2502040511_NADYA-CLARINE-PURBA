<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interests = [
            ['interestName' => 'Hiking'],
            ['interestName' => 'Cooking'],
            ['interestName' => 'Reading'],
            ['interestName' => 'Photography'],
            ['interestName' => 'Painting'],
            ['interestName' => 'Traveling'],
            ['interestName' => 'Yoga'],
            ['interestName' => 'Gardening'],
        ];

        foreach($interests as $interest){
            Interest::create($interest);
        }
    }
}
