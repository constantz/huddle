<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(
        [
            ['created_at' => now(),
            'updated_at' => now(),
            'name' => 'HTML',
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'name' => 'CSS',
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'name' => 'JavaScript',
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'name' => 'PHP',
            ]
        ]);
    }
}
