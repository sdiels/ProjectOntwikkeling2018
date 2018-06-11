<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/forumstyle.css') }}" rel="stylesheet">
</head>
<body>
  <div class="gameractionspage">
    <h1>REACTIES OP HET SPEL</h1>
    <a href="{{ route('indexToGame') }}" class="backbtn">Terug naar homepage</a>
    @if (count($commentOnGame) >  0)
    <div class="allGameComments">
      @foreach ($commentOnGame as $comment)
      <div class="oneGameComment">
        <p>{{$comment->body}}</p>
      </div>
      @endforeach
    </div>
    @else
      <p>Er zijn geen reacties</p>
    @endif
  </div>
</body>
</html>
