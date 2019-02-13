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
            ['name' => 'Gandalph',
            'preposition'=> 'the',
            'lastname'=> 'Orc',
            'street' => 'Valley of Honor',
            'postalcode' => '111 ORC',
            'city' => 'Ogrimmar',
            'phonenumber' => 061234567,
            'email' => 'randalph@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 1,
            ],

            ['name' => 'Anke',
            'preposition'=> 'the',
            'lastname'=> 'Catlady',
            'street' => 'Kitty road',
            'postalcode' => '111 CAT',
            'city' => 'Kittentoys',
            'phonenumber' => 061234567,
            'email' => 'anke@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 0,
            ],

            ['name' => 'Simone',
            'preposition'=> 'is',
            'lastname'=> 'Lief',
            'street' => 'Zekerwetenlaan 1',
            'postalcode' => '1234AZ',
            'city' => 'Motown',
            'phonenumber' => 061234567,
            'email' => 'simone@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 1,
            ],

            ['name' => 'Constant',
            'preposition'=> 'van der',
            'lastname'=> 'Variabelen',
            'street' => 'Twisseltsomsweg 54',
            'postalcode' => '123bv',
            'city' => 'Ogrimmar',
            'phonenumber' => 061234567,
            'email' => 'constant@gmail.com',
            'email_verified_at' => now(),
            'password' => '123456',
            'created_at' => now(),
            'updated_at' => now(),
            'isAdmin' => 0,
            ],
            
        ]);
    }
}
