<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SE -> 1
        // KE -> 2
        // HPC -> 3
        // BIS -> 4
        // CN -> 5

        $createMultipleQuizzes = [
            // SE
            ['quiz'=>'You have a passion for improving what is around you.','major_id'=> 1],           
            ['quiz'=>'You always pay a sharp attention to detail.','major_id'=> 1],           
            ['quiz'=>'You love making things creatively.','major_id'=> 1],   
            ['quiz'=>'You have a passion for strategy games.','major_id'=> 1],   
            
            // KE
            ['quiz'=>'You are curious about new technologies such as Artificial Intelligence, Robotics, etc.','major_id'=> 2],           
            ['quiz'=>'You want to learn about how automated systems work','major_id'=> 2],
            ['quiz'=>'You always wonder why computers are so good in playing chess.','major_id'=> 2],
            ['quiz'=>'You want to make things smart.','major_id'=> 2],
            
            // HPC
            ['quiz'=>'You always dreamt of working in scientific laboratories.','major_id'=> 3],           
            ['quiz'=>'You enjoy using cloud-based services such as gmail, dropbox, etc.','major_id'=> 3],
            ['quiz'=>'You always feel frustrated because of the slow computers and you want to fix them.','major_id'=> 3],
            ['quiz'=>'It never fails to amaze you how computers are constructed.','major_id'=> 3],
            
            // BIS
            ['quiz'=>'You are interested to learn how technology and business are complementing each other','major_id'=> 4],           
            ['quiz'=>'You like works which let you communicate with many people.','major_id'=> 4],
            ['quiz'=>'You often try to analyze and understand something in the business point of view','major_id'=> 4],
            ['quiz'=>'You think that innovative business ideas can be developed with the help of technology.','major_id'=> 4],
            
            //CN
            ['quiz'=>'You always wonder how communication through the internet is possible.','major_id'=> 5],           
            ['quiz'=>'You are curious to know who is using your wifi and how to manage and secure it.','major_id'=> 5],
            ['quiz'=>'Sometimes, when the internet connection is slow, you want to find out the issues and fix them.','major_id'=> 5],
            ['quiz'=>'You are curious to know how the internet security works and how secure it is.','major_id'=> 5],
        ];

        DB::table('quizzes')->insert($createMultipleQuizzes);
    }
}
