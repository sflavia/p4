
@extends('layouts.master')

@section('content')



@foreach($events as $event)
<section class='event'>
  <h2 class='truncate'>{{ $event->title}}</h2
  <h3 class='truncate'>{{ $event->description}}</h2

@endforeach

click on the link to create your event
<br><br><br>
<a href="/create">create your event<a> <br><br>

  <a href="/index">logout<a>
@stop
