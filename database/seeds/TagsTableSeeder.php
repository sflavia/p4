<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        $data = ['outdoor','community','members','vendors','community leaders','indoor','speakers'];

        foreach($data as $tagName) {
            $tag = new \App\Tag();
            $tag->event_category = $tagName;
            $tag->save();
        }
    }
}
