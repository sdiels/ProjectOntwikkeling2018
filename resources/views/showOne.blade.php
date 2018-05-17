<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link rel="stylesheet" href="/css/forumstyle.css">
</head>
<body>
  <div class="forumPage">
    <h1>FORUM</h1>
    <a href="{{ route('forum')}}" class="backToForum"><p>Terug naar forum</p></a>
      @foreach ($story as $story)
      <div class="oneStoryForum">
        <div class="tittleAndBody">
          <h4>{{$story->title}}</h4>
          <div class="StoryBody">
            <p>{{$story->story}}</p>
          </div>
        </div>
        <div class="comments">
          @if (count($comments) >  0)
            @foreach ($comments as $comment)
            <div class="oneComment">
              <p>{{$comment->body}}</p>
            </div>
            @endforeach
          @else
            <p>Er zijn geen reacties op dit verhaal</p>
          @endif
          <form class="addReactionForm" action="{{ url('storeComment', [$id])}}" method="post">
          <p class="storyField">
            <label for="body">Reactie</label>
            <textarea name="body" rows="2" cols="80"></textarea><br>
          </p>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" value="Reageren">
          </form>
        </div>
      </div>
    @endforeach
  </div>
</body>
</html
