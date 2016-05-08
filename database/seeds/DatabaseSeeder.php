<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TagsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventTagTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
