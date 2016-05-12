<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

        public function getevents() {
        $events = [];
        $events = \App\Event::all();
      }



        public function tags(){
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('\App\Tag')->withTimestamps();
          }

          public function user() {

             return $this->belongsTo('\App\User');
           }
}
