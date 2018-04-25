@extends('layouts.app')

@section('content')
  <div class="gameractionspage">
    <h1>REACTIES OP HET SPEL</h1>
    @if (session()->has('askSureDeleteGameComment'))
    <div class="deleteSure">
      <p>Bent u zeker dat u deze reactie wilt verwijderen?</p>
      <a href="{{ route('deleteGameCommentSure', [$comid]) }}"><button type="button" name="button" class="deleteButton">Ja</button></a>

      <a href="{{ route('GameComment') }}"><button type="button" name="button" class="addButton">Nee</button></a>
    </div>
    @endif

    @if (count($commentOnGame) >  0)
      @foreach ($commentOnGame as $comment)
      <div class="oneGameComment">
        <p>{{$comment->body}}</p>
        <a href="{{ route('deleteGameComment', $comment->id) }}"><button type="button" name="button" class="deleteButton">verwijderen</button></a>
      </div>
      @endforeach
    @else
      <p>Er zijn geen reacties</p>
    @endif
  </div>
@endsection
