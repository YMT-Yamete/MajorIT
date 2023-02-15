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
            ['major'=>'Software Engineering',
            'catalogueDescription'=>'A Software Engineering major prepares students to design, develop, and maintain software systems. Students gain technical skills in programming languages, software development tools, and computer systems. Graduates can pursue various careers in the technology industry, where demand for software engineering professionals is high.', 
            'description' => 'Majoring in Software Engineering is a smart choice because it prepares you for a career in a fast-growing field with high demand for skilled professionals. As a software engineer, you can expect to earn a lucrative salary and have opportunities to work on innovative projects that make a difference in people\'s lives.'],

            ['major'=>'Knowledge Engineering',
            'catalogueDescription'=>'A Knowledge Engineering major focuses on designing, developing, and maintaining knowledge-based systems, such as artificial intelligence and expert systems. Graduates can pursue careers in various industries, such as healthcare, finance, and technology, where demand for professionals who can develop and apply advanced technologies is high.', 
            'description' => 'Majoring in Knowledge Engineering offers opportunities to work with advanced technologies and solve complex problems in a variety of industries. Graduates can pursue in-demand careers in fields such as healthcare, finance, and technology, where there is a growing need for professionals who can develop and apply knowledge-based systems.'],

            ['major'=>'High Performance Computing',
            'catalogueDescription'=>'A High Performance Computing major teaches students to design and optimize powerful computing systems for solving complex problems in fields like scientific research, engineering, and finance. Graduates can pursue careers in industries where there is a demand for professionals with skills in high-performance computing.', 
            'description' => 'Majoring in High Performance Computing provides opportunities to work on powerful computing systems and solve complex problems in fields like scientific research, engineering, and finance. Graduates can pursue careers in industries where there is a growing demand for professionals with skills in high-performance computing.'],

            ['major'=>'Business Information System',
            'catalogueDescription'=>'A Business Information Systems major combines business principles with technical skills to manage and analyze information in organizations. Graduates can pursue careers in industries where there is a demand for professionals who can use information technology to solve business problems and make informed decisions.', 
            'description' => 'Majoring in Business Information Systems equips you with the skills to use information technology to solve business problems and improve operations, while combining business knowledge with technical expertise. This degree can lead to career opportunities in various industries where there is a growing demand for professionals who can manage and analyze information.'],

            ['major'=>'Computer Networks',
            'catalogueDescription'=>'A Network Systems major is an academic program that teaches students how to design, build, and maintain computer networks. Students learn about networking protocols, security, and troubleshooting, and gain practical experience working with network hardware and software. Graduates with a degree in Network Systems can pursue careers in various industries, such as technology, finance, and healthcare, where there is a growing demand for professionals who can design, maintain, and secure computer networks.', 
            'description' => 'Majoring in Network Systems prepares you for a career in designing, building, and maintaining computer networks. Graduates can pursue various job opportunities in industries such as technology, finance, and healthcare, where there is a growing demand for professionals who can secure and optimize network systems.'],
        ];
        DB::table('majors')->insert($createMultipleMajors);
    }
}
