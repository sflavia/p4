<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
  public function run()
  {
      DB::table('events')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Street Cleaning',
          'description' => 'Roc participates in the yearly street cleaning event as part of Boston Shine',
          'date' => 20160525,
          'time' => '080000',
  	      'organizer' => 'Suzette Lavia',
   	]);

      DB::table('events')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'weekly meetings',
          'description' => 'Roc meets every thursday to help forster community engagements',
          'date' => 20160625,
          'time' => '180000',
  	      'organizer' => 'Sally Gates',

      ]);

      DB::table('events')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Block Party',
          'description' => 'Every summer ROC holds a community festival, bringing vendors and artist from within the Community',
          'date' => 20160925,
          'time' => '120000',
  	      'organizer' => 'Chris Davis',
      ]);
  }
}
