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
            'tel' => 1233221
        ]);

        DB::table('questions')->insert([
            ['body' => 'Question de test num 1'],
            ['body' => 'Question de test num 2'],
            ['body' => 'Question de test num 3'],
            ['body' => 'Question de test num 4']
        ]);

        DB::table('reponses')->insert([
            ['question_id' => 1,
            'body' => 'Reponse de test num 1'],

            ['question_id' => 1,
                'body' => 'Reponse de test num 2'],

            ['question_id' => 1,
                'body' => 'Reponse de test num 3'],

            ['question_id' => 1,
                'body' => 'Reponse de test num 4'],

            ['question_id' => 2,
                'body' => 'Reponse de test 2 num 1'],

            ['question_id' => 2,
                'body' => 'Reponse de test 2 num 2'],

            ['question_id' => 2,
                'body' => 'Reponse de test 2 num 3'],

            ['question_id' => 2,
                'body' => 'Reponse de test 2 num 4'],

            ['question_id' => 3,
                'body' => 'Reponse de test num 1'],

            ['question_id' => 3,
                'body' => 'Reponse de test num 2'],

            ['question_id' => 3,
                'body' => 'Reponse de test num 3'],

            ['question_id' => 3,
                'body' => 'Reponse de test num 4'],

            ['question_id' => 4,
                'body' => 'Reponse de test 2 num 1'],

            ['question_id' => 4,
                'body' => 'Reponse de test 2 num 2'],

            ['question_id' => 4,
                'body' => 'Reponse de test 2 num 3'],

            ['question_id' => 4,
                'body' => 'Reponse de test 2 num 4']
        ]);
    }
}
