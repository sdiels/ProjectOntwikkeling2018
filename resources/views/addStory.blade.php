@extends('layouts.app')

@section('content')
<div>
  <h1>GETUIGENIS TOEVOEGEN</h1>
  <form action="{{ url('storeStory') }}" method="post">
      <label for="title">Titel: </label>
      <input type="text" name="title"><br>

      <p class="storyField">
        <label for="story">Verhaal</label>
        <textarea name="story" rows="8" cols="80"></textarea> <br>
      </p>

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" name="submit" value="Verhaal toevoegen">
    </form>
</div>
@endsection
