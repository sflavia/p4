@extends('layouts.master')

@section('content')

    <h1>Create An Event</h1>

    <form method='POST' action='/create'>
     {{ csrf_field() }}
    <div class='form-group'>



      <label for='title'>Title</label>
      <input type='text' id='title' name='title' value='{{ old('title') }}'><br><br>

        <label for='description'>Description</label><br>
        <textarea name="description" id="description" rows="4" cols="50"{{ old('description') }}></textarea><br><br>


        <label for='date'>Date</label>
        <input type='text' id='date' name='date' value='{{ old('date') }}'><br><br>

        <label for='time'>Time</label>
        <input type='time' id='time' name='time' value='{{ old('time') }}'><br><br>

        <label for='tags'>Tags</label>
        <input type='text' id='tags' name='tags' value='{{ old('tags') }}'><br>
        (alphanumeric tags, separated by spaces)<br><br>

           </div>

           <button type='submit'>Create</button>

           </form>


@stop
