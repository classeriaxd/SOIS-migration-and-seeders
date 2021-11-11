<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = 1;
        $data = [
            [
                //1
                'course_id' => NULL,
                'gender_id' => NULL, 
                'email' => 'super-admin@email.com', 
                'password' => Hash::make('super-admin@email.com'),
                'student_number' => NULL, 
                'first_name' => 'Super Admin',
                'middle_name' => 'I',
                'last_name' => 'Am',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456124',
                'address' => 'Bulacan Malolos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,
            ],
            [
                //2
                'course_id' => 1,
                'gender_id' => 1,
                'email' => 'bsa-homepage@email.com', 
                'password' => Hash::make('bsa-homepage@email.com'),
                'student_number' => '2018-12346-TG-0', 
                'first_name' => 'John',
                'middle_name' => 'Faraday',
                'last_name' => 'Doe',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456700',
                'address' => 'Bulacan Malolos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,
            ],
            [
                // 3qar
                'course_id' => 1,
                'gender_id' => 1,
                'email' => 'bsa@email.com', 
                'password' => Hash::make('bsa@email.com'),
                'student_number' => '2018-00001-TG-0', 
                'first_name' => 'John',
                'middle_name' => 'Faraday',
                'last_name' => 'Doe',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456700',
                'address' => 'Bulacan Malolos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,
            ],
            [
                //4
                'course_id' => 1,
                'gender_id' => 2, 
                'email' => 'bsa-president@email.com', 
                'password' => Hash::make('bsa-president@email.com'),
                'student_number' => '2018-000013-TG-0', 
                'first_name' => 'BSA Presi Ronaldo',
                'middle_name' => 'Cristiano',
                'last_name' => 'Reagan',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456123',
                'address' => 'Bulacan Malolos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,
            ],
            [
                //5
                'course_id' => 1,
                'gender_id' => 1,
                'email' => 'bsa-membership@email.com', 
                'password' => Hash::make('bsa-membership@email.com'),
                'student_number' => '2018-12345-TG-0', 
                'first_name' => 'John',
                'middle_name' => 'Faraday',
                'last_name' => 'Doe',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456700',
                'address' => 'Bulacan Malolos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,
            ],
            [
                //6
                'course_id' => 1,
                'gender_id' => 1,
                'email' => 'bsa-gpoa@email.com', 
                'password' => Hash::make('bsa-gpoa@email.com'),
                'student_number' => '2018-12348-TG-0', 
                'first_name' => 'John',
                'middle_name' => 'Faraday',
                'last_name' => 'Doe',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456700',
                'address' => 'Bulacan Malolos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,
            ],
            [
                //7
                'course_id' => 1,
                'gender_id' => 1,
                'email' => 'bsa-finance@email.com', 
                'password' => Hash::make('bsa-finance@email.com'),
                'student_number' => '2018-12347-TG-0', 
                'first_name' => 'John',
                'middle_name' => 'Faraday',
                'last_name' => 'Doe',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456700',
                'address' => 'Bulacan Malolos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,
            ],
            [
                //8 normal user
                'course_id' => 1,
                'gender_id' => 2, 
                'email' => 'bsa-member@email.com', 
                'password' => Hash::make('bsa-member@email.com'),
                'student_number' => '2018-00012-TG-0', 
                'first_name' => 'BSA John',
                'middle_name' => 'Fitzgerald',
                'last_name' => 'Kennedy',
                'date_of_birth' => '2000-01-01',
                'mobile_number' => '+639123456710',
                'address' => 'Lower Bicutan Taguig City',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $status,       
            ],
            
            
            
        ];

        DB::table('users')->insert($data);
    }
}