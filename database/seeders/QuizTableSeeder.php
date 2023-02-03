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
        // ES -> 6

        $createMultipleQuizzes = [
            ['quiz'=>'You like Software Engineering','major_id'=> 1],           
            ['quiz'=>'You like Software Engineering 2','major_id'=> 1],           
            
            ['quiz'=>'You like Knowledge Engineering','major_id'=> 2],           
            ['quiz'=>'You like Knowledge Engineering 2','major_id'=> 2],
            
            ['quiz'=>'You like HPC','major_id'=> 3],           
            ['quiz'=>'You like HPC 2','major_id'=> 3],
            
            ['quiz'=>'You like BIS','major_id'=> 4],           
            ['quiz'=>'You like BIS 2','major_id'=> 4],
            
            ['quiz'=>'You like CN','major_id'=> 5],           
            ['quiz'=>'You like CN 2','major_id'=> 5],
            
            ['quiz'=>'You like ES','major_id'=> 6],           
            ['quiz'=>'You like ES 2','major_id'=> 6],
        ];

        DB::table('quizzes')->insert($createMultipleQuizzes);
    }
}
