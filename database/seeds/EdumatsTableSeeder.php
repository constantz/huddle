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
                'description' => 'HTML Les 1',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'description' => 'HTML Les 2',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'description' => 'CSS Les 1',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'description' => 'CSS Les 2',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'description' => 'JavaScript Les 1',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'description' => 'JavaScript Les 2',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'description' => 'PHP Les 1',
                ],

                ['created_at' => now(),
                'updated_at' => now(),
                'description' => 'PHP Les 2',
                ]
            ]);
    }
}
