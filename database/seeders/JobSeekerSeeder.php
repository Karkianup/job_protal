<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobSeeker;

class JobSeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobSeeker::insert([
            [
                "name"=>"Ramesh Khatri",
                "email"=>"ramesh@mail.com",
                "password"=>bcrypt('a1234567'),
                "is_approved"=>"0",
            ],
            [
                "name"=>"Himesh Resham",
                "email"=>"himesh@mail.com",
                "password"=>bcrypt('a1234567'),
                "is_approved"=>"1",
            ],
            [
                "name"=>"Pashuram Sapkota",
                "email"=>"himeshpashuram@mail.com",
                "password"=>bcrypt('a1234567'),
                "is_approved"=>"2",
            ],
        ]);
    }
}