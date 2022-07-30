<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' => '1',
            'first_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('pass@admin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'first_name' => 'Registrar',
            'email' => 'registrar@gmail.com',
            'password' => Hash::make('pass@registrar'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'first_name' => 'Dean',
            'email' => 'dean@gmail.com',
            'password' => Hash::make('pass@dean'),
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'first_name' => 'Program Adviser',
            'email' => 'adviser@gmail.com',
            'password' => Hash::make('pass@adviser'),
        ]);

        DB::table('users')->insert([
            'role_id' => '5',
            'first_name' => 'Applicant',
            'email' => 'applicant@gmail.com',
            'password' => Hash::make('pass@applicant'),
        ]);
    }
}
