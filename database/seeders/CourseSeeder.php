<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // the 10 IT courses (pre-requisites are written by course name)
        $courses = [
            ['code' => 'ITT107', 'name' => 'Computer Information Essentials', 'credits' => 3, 'prerequisites' => 'None',
             'description' => 'Core fundamentals of IT systems, hardware components, software installations, productivity configurations, and structural computing safety.'],
            ['code' => 'ITT103', 'name' => 'Programming Techniques', 'credits' => 3, 'prerequisites' => 'Computer Information Essentials',
             'description' => 'Fundamental programmatic logic, pseudo-coding frameworks, flowchart layouts, and top-down problem-solving design principles.'],
            ['code' => 'ITT104', 'name' => 'Database Management Systems', 'credits' => 3, 'prerequisites' => 'Programming Techniques',
             'description' => 'Intro to database structures, entity-relationship diagrams (ERDs), data normalization models, and structured query language (SQL) scripts.'],
            ['code' => 'ITT200', 'name' => 'Object Oriented Programming Design using C++', 'credits' => 3, 'prerequisites' => 'Programming Techniques',
             'description' => 'Transitioning into modular application builds. Key pillars include encapsulation, class inheritance, data abstraction, and custom object models in C++.'],
            ['code' => 'ITT203', 'name' => 'Data Structure & File Mgt I', 'credits' => 3, 'prerequisites' => 'Object Oriented Programming Design using C++',
             'description' => 'Algorithmic optimization focusing on basic structure arrangements like pointers, dynamic lists, runtime memory stacks, queue systems, and record organization.'],
            ['code' => 'ITT105', 'name' => 'Computer Essentials & Troubleshooting I', 'credits' => 3, 'prerequisites' => 'Computer Information Essentials',
             'description' => 'Practical desktop and device hardware component building blocks, assembly parameters, operating system fundamentals, and hardware troubleshooting matrices.'],
            ['code' => 'ITT106', 'name' => 'Computer Essentials & Troubleshooting II', 'credits' => 3, 'prerequisites' => 'Computer Essentials & Troubleshooting I',
             'description' => 'Advanced diagnostic techniques, peripheral configuration management, support environments, enterprise software deployment, and technical diagnostics.'],
            ['code' => 'ITT201', 'name' => 'Data Communication & Networks I', 'credits' => 3, 'prerequisites' => 'Computer Information Essentials',
             'description' => 'Computer infrastructure network routing basics, signal architectures, transmission methodologies, Local Area Network (LAN) designs, and OSI models.'],
            ['code' => 'ITT208', 'name' => 'Internet Authoring I', 'credits' => 3, 'prerequisites' => 'Programming Techniques',
             'description' => 'Client-side scripting foundations, syntax structures for website generation, structured semantic layouts, style presentation sheets, and dynamic front-end execution.'],
            ['code' => 'ITT211', 'name' => 'Computer Data Analysis', 'credits' => 3, 'prerequisites' => 'None',
             'description' => 'Analytical parsing using calculation toolsets, functional script processing engines, graphical interpretation plots, data summary groupings, and introductory inference models.'],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
