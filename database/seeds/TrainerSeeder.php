<?php

use Illuminate\Database\Seeder;
use App\Trainer;
class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
         'name'=> 'noura',
         'spec'=>'web development',
         'img'=>'1.png'
        ]);

        Trainer::create([
            'name'=> 'Ahmed',
            'spec'=>'dentidt',
            'img'=>'3.png'
           ]);

        Trainer::create([
            'name'=> 'toto',
            'spec'=>'english',
            'img'=>'2.png'
           ]);


    }
}
