<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
  public function run()
  {
      $user_id = \App\User::where('name','=','Jill')->pluck('id')->first();
      DB::table('events')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Street Cleaning',
          'description' => 'Roc participates in the yearly street cleaning event as part of Boston Shine',
          'date' => 20160525,
          'time' => '080000',
  	      'user_id' => $user_id,
   	]);
    $user_id = \App\User::where('name','=','Jill')->pluck('id')->first();
      DB::table('events')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'weekly meetings',
          'description' => 'Roc meets every thursday to help forster community engagements',
          'date' => 20160625,
          'time' => '180000',
  	      'user_id' => $user_id,

      ]);
      $user_id = \App\User::where('name','=','Jill')->pluck('id')->first();
      DB::table('events')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Block Party',
          'description' => 'Every summer ROC holds a community festival, bringing vendors and artist from within the Community',
          'date' => 20160925,
          'time' => '120000',
  	      'user_id' => $user_id,
      ]);
  }
}
