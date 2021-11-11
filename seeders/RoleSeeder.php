<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // 1
            ['role' => 'Super Admin', 'description' => 'Super Admin/ '],
            // 2
            ['role' => 'Home Page Admin', 'description' => 'Home Page Admin'],
            // 3
            ['role' => 'AR Officer Admin', 'description' => 'AR Admin'],
            // 4
            ['role' => 'AR President Admin', 'description' => 'AR Admin'],
            // 5
            ['role' => 'Membership Admin', 'description' => 'Membership Admin'],
            // 6
            ['role' => 'GPOA Admin', 'description' => 'GPOA Admin'],
            // 7
            ['role' => 'Finance Admin', 'description' => 'Finance Admin'],
            // 8
            ['role' => 'User', 'description' => 'Users/Students'],
        ];
        DB::table('roles')->insert($data);
    }
}
