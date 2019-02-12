<?php

use Illuminate\Database\Seeder;

class Sent_MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sent_messages')->insert(
        [
            ['created_at' => now(),
            'updated_at' => now(),
            'sender_id' => 1,
            'recipient_id' => 2,
            'message_id' => 1,
            'read' => 1,
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'sender_id' => 2,
            'recipient_id' => 1,
            'message_id' => 2,
            'read' => 0,
            ]
        ]);
    }
}
