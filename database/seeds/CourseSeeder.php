<?php

use Illuminate\Database\Seeder;
use App\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=3;$i++){
            for($j=1;$j<=6;$j++){
                Course::create([
                    'cat_id' => $i,
                    'trainer_id'=> rand(1,3),
                    'name'=> "course num  $j cat num $i",
                    'small_desc'=> 'bhvghyhfghfvghfvgh',
                    'desc'=>'bvghfvgbhbbbjhjhuhughuuguggghvbbhbhbhb',
                    'price'=>rand(1000,5000),
                    'img'=>"$i$j.png"
                ]);
            }
        }
    }
}
