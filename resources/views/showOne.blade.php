@extends('layouts.app')

@section('content')
<div class="forumPage">
  <h1>FORUM</h1>
    <div class="oneStoryForum">
      @foreach ($story as $story)
        <h4>{{$story->title}}</h4>
        <div class="StoryBody">
          <p>{{$story->story}}</p>
          <div class="comments">
            @if (count($comments) > 0)
              @foreach ($comments as $comment)
                <p>{{$comment->body}}</p>
              @endforeach
            @else
              <p>Er zijn geen reacties op dit verhaal</p>
            @endif
              <form action="{{ url('storeComment', [$id])}}" method="post">
                <label for="body">Reactie</label>
                <textarea name="body" rows="2" cols="80"></textarea><br>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="submit" value="Reageren">
              </form>
          </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
