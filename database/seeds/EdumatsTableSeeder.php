<?php

use Illuminate\Database\Seeder;

class EdumatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edumats')->insert(
            [           
                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 1,
                'name' => 'HTML Les 1',
                'content'=> 'HTML is een programeer taal',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 1,
                'name' => 'HTML Les 2',
                'content'=> 'Dit is HTML les 2',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 2,
                'name' => 'CSS Les 1',
                'content'=> 'CSS is een programeer taal',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 2,
                'name' => 'CSS Les 2',
                'content'=> 'Dit is CSS les 2',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 3,
                'name' => 'JavaScript Les 1',
                'content'=> 'JavaScript is een programeer taal',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 3,
                'name' => 'JavaScript',
                'content'=> 'Dit is JavaScript les 2',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 4,
                'name' => 'PHP Les 1',
                'content'=> 'PHP is een programeer taal',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'subject_id' => 4,
                'name' => 'PHP Les 2',
                'content'=> 'Dit is PHP les 2',
                ]
            ]);
    }
}
