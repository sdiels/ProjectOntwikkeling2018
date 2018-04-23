@extends('layouts.app')

@section('content')
<div class="gamepage">
  <h1>SPEL</h1>
  <div class="gamepageWithoutTitle">
    <main>
      <div class="gameInformation">
        <h2>Informatie</h2>
      </div>
      <div class="photo12">
        <div class="photo1">
          <h2>foto 1</h2>
        </div>
        <div class="photo2">
          <h2>foto 2</h2>
        </div>
      </div>
      <div class="photo3 longphoto">
        <h2>foto 3 (lange foto)</h2>
      </div>
    </main>
    <aside>
      <div class="photo4 longphoto">
        <h2>foto 4 (lange foto)</h2>
      </div>
      <div class="playAndScore">
        <div class="playGame">
          <h2>Speel het spel</h2>
        </div>
        <div class="scores">
          <h2>Scores (optioneel)</h2>
        </div>
      </div>
      <div class="reactions">
        <h2>Recties op spel</h2>
      </div>
    </aside>
  </div>
</div>
@endsection
