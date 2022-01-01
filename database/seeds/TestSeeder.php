<?php

use Illuminate\Database\Seeder;
use App\Test;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([
            'name'=> 'noura',
            'desc'=>'gyu hbjbnbnbnmnmvxfnbvjhdfhsnfb dnbvnfcbvhfb',
            'img'=>'1.png'
           ]);

           Test::create([
            'name'=> 'Ahmed',
            'desc'=>'hvdhcvhdv cnx ncbv dbnvfhjhghdfvcghvn nc bncvh',
            'img'=>'3.png'
           ]);

        Test::create([
            'name'=> 'toto',
            'desc'=>'jbcvjhdfgyhdbjbsjrgdujhx,nchdjhejdhsujhdjshjhcj',
            'img'=>'2.png'
           ]);


    }
}
