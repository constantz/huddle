<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            ['name' => 'Randalph',
            'email' => 'randalph@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 1,
            ],

            ['name' => 'Anke',
            'email' => 'anke@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 1,
            ],

            ['name' => 'Simone',
            'email' => 'simone@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 1,
            ],

            ['name' => 'Constant',
            'email' => 'constant@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 1,
            ],
            
        ]);
    }
}
