<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(Users_GroupsTableSeeder::class);
        $this->call(Users_SubjectsTableSeeder::class);
        $this->call(TimetableTableSeeder::class);
        $this->call(Sent_MessagesTableSeeder::class); 
        $this->call(EdumatsTableSeeder::class);
    }
}
