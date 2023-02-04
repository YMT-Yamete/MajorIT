<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createMultipleMajors = [
            ['major'=>'Software Engineering','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, officiis! Obcaecati recusandae ea nostrum velit porro ut, rerum quidem distinctio?', 'catalogueDescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, eum.'],
            ['major'=>'Knowledge Engineering','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, officiis! Obcaecati recusandae ea nostrum velit porro ut, rerum quidem distinctio?', 'catalogueDescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, eum.'],
            ['major'=>'High Performance Computing','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, officiis! Obcaecati recusandae ea nostrum velit porro ut, rerum quidem distinctio?', 'catalogueDescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, eum.'],
            ['major'=>'Business Information System','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, officiis! Obcaecati recusandae ea nostrum velit porro ut, rerum quidem distinctio?', 'catalogueDescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, eum.'],
            ['major'=>'Computer Networks','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, officiis! Obcaecati recusandae ea nostrum velit porro ut, rerum quidem distinctio?', 'catalogueDescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, eum.'],
            ['major'=>'Embedded Systems','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, officiis! Obcaecati recusandae ea nostrum velit porro ut, rerum quidem distinctio?', 'catalogueDescription' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, eum.'],
        ];
        DB::table('majors')->insert($createMultipleMajors);
    }
}
