<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>
  <div class="forumPage">
    <h1>FORUM</h1>
    <a href="{{ url('addStory') }}"><button type="button" name="button" class="addButton">Ik wil mijn verhaal delen</button></a>
    <div class="AllStories">
      @if (count($stories) > 0)
        @foreach($stories as $story)
          <div class="storyForum">
            <div class="commentAndTitle">
              <h4>{{$story->title}}</h4>
              <a href="{{ url('forum', [$story->id]) }}"><p class="commentCount">{{ $countComArray[$story->id] }} reacties</p></a>
            </div>
            <p class="storyBody">{{$story->story}}</p><br>
          </div>
        @endforeach
      @else
        <p>Er zijn geen getuigenissen</p>
      @endif
    </div>
  </div>
</body>
</html
