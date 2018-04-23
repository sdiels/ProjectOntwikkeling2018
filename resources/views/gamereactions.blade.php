@extends('layouts.app')

@section('content')
  <div class="gameractionspage">
    <h1>REACTIES OP HET SPEL</h1>
    @if (count($commentOnGame) >  0)
      @foreach ($commentOnGame as $comment)
      <div class="oneGameComment">
        <p>{{$comment->body}}</p>
      </div>
      @endforeach
    @else
      <p>Er zijn geen reacties</p>
    @endif
  </div>
@endsection
