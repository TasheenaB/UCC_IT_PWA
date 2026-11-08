<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        // Staff from the UCC Students' Help Desk Directory (School of Mathematics, Science and Technology)
        // main number is 876-906-3000 and each person has an extension
        $staff = [
            ['name' => 'Mr. Otis Osbourne',  'position' => 'Head of Department, Information Technology', 'photo' => 'staff1.png', 'phone' => '876-906-3000', 'extension' => '4116', 'email' => 'ithod@ucc.edu.jm'],
            ['name' => 'Dr. Peter Ndajah',   'position' => 'Dean, School of Mathematics, Science and Technology', 'photo' => 'staff2.png', 'phone' => '876-906-3000', 'extension' => '4037', 'email' => 'headofschoolsmathit@ucc.edu.jm'],
            ['name' => 'Ms. Sherida Levy',   'position' => 'Programme Officer', 'photo' => 'staff3.png', 'phone' => '876-906-3000', 'extension' => '4020', 'email' => 'itprogrammeofficer2@ucc.edu.jm'],
            ['name' => 'Mr. Craig Wilmot',   'position' => 'Programme Officer', 'photo' => 'staff4.png', 'phone' => '876-906-3000', 'extension' => '3937', 'email' => 'itprogofficer4@ucc.edu.jm'],
        ];

        foreach ($staff as $member) {
            Staff::create($member);
        }
    }
}
