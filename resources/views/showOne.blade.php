<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/forumstyle.css') }}" rel="stylesheet">
</head>
<body>
  <div class="forumPage">
    <h1>FORUM</h1>
    <a href="{{ route('forum')}}" class="backToForum">Terug naar forum</a>
      @foreach ($story as $story)
      <div class="oneStoryForum">
        <div class="titleAndBody">
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
          @if(session()->has('reactieFieldWarning'))
          <div class="alert alert-danger">
              {{ Session::get('reactieFieldWarning')}}
          </div>
          @endif
          <form class="addReactionForm" action="{{ url('storeComment', [$id])}}" method="post">
          <p class="storyField">
            <label for="body">Reactie</label>
            <textarea name="body" rows="2" cols="80"></textarea><br>
          </p>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="commentbtn" type="submit" name="submit" value="Reageren">
          </form>
        </div>
      </div>
    @endforeach
  </div>
</body>
</html
