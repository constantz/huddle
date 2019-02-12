<?php

use Illuminate\Database\Seeder;

class Users_GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_groups')->insert(
        [
            ['created_at' => now(),
            'updated_at' => now(),
            'group_id' => 1,
            'user_id' => 1,
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'group_id' => 1,
            'user_id' => 2,
            ]
        ]);
    }
}
