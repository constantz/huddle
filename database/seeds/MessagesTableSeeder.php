<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert(
        [
            ['created_at' => now(),
            'updated_at' => now(),
            'message' => 'Fans van FC Twente die volgende week dinsdag de derby tussen Heracles 2 en FC Twente 2 in Almelo willen bijwonen, zijn aangewezen op een buscombi (à 10 euro). Autoriteiten zien het duel als risicowedstrijd en vervroegden ook de aftrap van 18.30 naar 14.00 uur.',
            ],

            ['created_at' => now(),
            'updated_at' => now(),
            'message' => 'Natuurlijk kun je op Valentijnsdag romantisch gaan dineren bij een sfeervol restaurant in de stad, maar Hush AVIA Lonnekermeer denkt daar anders over. Donderdagavond is het restaurant van het tankstation aan de A1 een liefdesnestje voor negen winnende koppels van een Facebook-actie.',
            ]
        ]);
    }
}
