<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Test Admin 2',
                'role' => 'admin',
                'contact' => '0702324345',
                'email' => 'testadmin2@mail.com',
                'password' => Hash::make('testadmin2'),
            ],
            [
                'name' => 'Test Admin 3',
                'role' => 'admin',
                'contact' => '0702324347',
                'email' => 'testadmin3@mail.com',
                'password' => Hash::make('testadmin3'),
            ],
        ];

        foreach ($admins as $admin) {
            DB::table('users')->insert($admin);
        }
    }
}
