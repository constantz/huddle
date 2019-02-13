<?php

use Illuminate\Database\Seeder;

class Users_SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users_subjects')->insert(
        [
            ['created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
            'subject_id' => 1,
            'passed' => 1,
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
            'subject_id' => 2,
            'passed' => 0,
            ]
        ]);
    }
}
