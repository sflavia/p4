<?php

use Illuminate\Database\Seeder;

class EventTagTableSeeder extends Seeder
{
    public function run()
  {

    # First, create an array of all the books we want to associate tags with
    # The *key* will be the book title, and the *value* will be an array of tags.
    $events =[
        'Street Cleaning' => ['members','outdoor','community','community leaders'],
        'Weekly Meetings' => ['members','community leaders','indoor','speakers'],
        'Block Party' => ['vendors','community leaders','members','outdoor','speakers']
    ];

    # Now loop through the above array, creating a new pivot for each book to tag
    foreach($events as $title => $tags) {

        # First get the book
        $event = \App\Event::where('title','like',$title)->first();

        # Now loop through each tag for this book, adding the pivot
        foreach($tags as $tagEvent_Category) {
            $tag = \App\Tag::where('event_category','LIKE',$tagEvent_Category)->first();

            # Connect this tag to this book
            $event->tags()->save($tag);
        }

    }
  }
}
