<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'admin',
            'lastName' => 'admin',
            'cin' => '12349678',
            'password' => Hash::make('password'),
            'email' => 'admin@admin.com',
            'droit' => 2,
            'tel' => 1233221
        ]);

        DB::table('users')->insert([
            'firstName' => 'moniteur',
            'lastName' => 'momo',
            'cin' => '10010023',
            'password' => Hash::make('password'),
            'email' => 'moniteur@admin.com',
            'droit' => 1,
            'tel' => 32025025
        ]);

        DB::table('users')->insert([
            'firstName' => 'moniteur',
            'lastName' => 'bobo',
            'cin' => '10080023',
            'password' => Hash::make('password'),
            'email' => 'moniteurboo@admin.com',
            'droit' => 1,
            'tel' => 22658457
        ]);

        DB::table('users')->insert([
            'firstName' => 'Mark',
            'lastName' => 'Wahlberg',
            'cin' => '91196622',
            'password' => Hash::make('123456789'),
            'email' => 'mark@gmail.com',
            'droit' => 0,
            'tel' => 65784595
        ]);

//        TODO populate with 30 questions and answers

        $this->call(ReponsesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
    }
}
