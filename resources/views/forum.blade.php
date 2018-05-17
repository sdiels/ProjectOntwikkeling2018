<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link rel="stylesheet" href="/css/forumstyle.css">
</head>
<body>
  <div class="forumPage">
    <h1>FORUM</h1>
    <a href="{{ route('indexToForum') }}"><p>Terug naar homepage</p></a>
    <div class="addStoryButton">
      <a href="{{ route('addStory') }}"><button type="button" name="button" class="addButton">Ik wil mijn verhaal delen</button></a>
    </div>
    <div class="AllStories">
      @if (count($stories) > 0)
        @foreach($stories as $story)
          <div class="storyForum">
            <a href="{{ url('forum', [$story->id]) }}">
            <div class="commentAndTitle">
              <h4>{{$story->title}}</h4>
              <p class="commentCount">{{ $countComArray[$story->id] }} reacties</p>
            </div>
            <p class="storyBody">{{$story->story}}</p><br>
            </a>
          </div>
        @endforeach
      @else
        <p>Er zijn geen getuigenissen</p>
      @endif
    </div>
  </div>
</body>
</html>
