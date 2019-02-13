<?php

use Illuminate\Database\Seeder;

class TimetableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timetable')->insert(
        [
            ['created_at' => now(),
            'updated_at' => now(),
            'date' => '2019-02-12',
            'start_time' => '09:00:00',
            'end_time' => '12:30:00',
            'subject_id' => 1,
            'group_id' => 1,
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'date' => '2019-02-13',
            'start_time' => '13:00:00',
            'end_time' => '16:00:00',
            'subject_id' => 1,
            'group_id' => 1,   
            ]
        ]);
    }
}
