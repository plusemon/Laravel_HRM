<?php

use App\User;
use App\Salary;
use App\Country;
use App\Department;
use Illuminate\Database\Seeder;

class DefaultAdminSeeder extends Seeder
{
    public function run()
    {
        $department = [
            'name' => 'English',
            'deg1' => 'ABCD',
            'deg2' => 'EGFH'
        ];

        $county = ['name' => 'Bangladesh'];
        $salery = ['amount' => 1000];

        $admin = [
            'id' => 1,
            'avater' => 'avater/avater.svg',
            'name' => 'Admin',
            'father' => 'John',
            'date_of_birth' => '2020-06-11',
            'gender' => 'male',
            'blood' => 'A+',
            'mobile' => '01234567890',
            'address' => 'Dhaka, Bangladesh',
            'type' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'nid' => '1234567890',
            'department' => 'Engineering',
            'designation' => 'Head',
            'salary' => 1000,
            'country' => 'Bangladesh',
            'join' => '2020-06-11',
            'email_verified_at' => null,
            'status' => 1
        ];

        Department::create($department);
        Country::create($county);
        Salary::create($salery);
        User::create($admin);
    }
}
