<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller {

  public function getShow($id = null) {
        $event = \App\Event::find($id);
        if(is_null($event)) {
            \Session::flash('message','Event not found');
            return redirect('/');}

            return view('show',[
           'event' => $event
         ]);
        }


        Public function getIndex() {
           $events = \App\Event::all();
           return view('events')->with('events', $events);
         }





         public function getCreate() {
         		return view('/create');
         	}
         public function postCreate(Request $request) {
         		// Validate request


         		// Add new entry to Event table
         		$event = new \App\Event();
         		$event->title = $request->title;
         		$event->description = $request->description;
            $event->date = $request->date;
            $event->time = $request->time;
         		$event->user_id = \Auth::id();
         		$event->save();
         		// Add new tags to Tag table


        		return redirect('/events');






         	}


}



?>
