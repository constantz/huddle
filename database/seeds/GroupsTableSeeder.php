<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert(
        [
            ['created_at' => now(),
            'updated_at' => now(),
            'name' => 'CodeGorilla Webdevelopment',
            'city' => 'Enschede',
            'number_of_participants' => 30,
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'name' => 'CodeGorilla Webdevelopment',
            'city' => 'Breda',
            'number_of_participants' => 8,
            ]
        ]);
    }
}
