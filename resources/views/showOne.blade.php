<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>
  <div class="forumPage">
    <h1>FORUM</h1>
    <div class="deleteDiv">
      @if (session()->has('askSureDeleteStory'))
        <div class="deleteSure">
          <p>Bent u zeker dat u dit artikel wilt verwijderen?</p>
          <a href="{{ route('deleteStorySure', $id) }}"><button type="button" name="button" class="deleteButton">Ja</button></a>

          <a href="{{ route('forumShowOne', $id) }}"><button type="button" name="button" class="addButton">Nee</button></a>
        </div>
      @elseif (session()->has('askSureDeleteComment'))
      <div class="deleteSure">
        <p>Bent u zeker dat u deze reactie wilt verwijderen?</p>
        <a href="{{ route('deleteCommentSure', [$id, $comid]) }}"><button type="button" name="button" class="deleteButton">Ja</button></a>

        <a href="{{ route('forumShowOne', $id) }}"><button type="button" name="button" class="addButton">Nee</button></a>
      </div>
      @else
        <a href="{{ url('deleteStory', $id) }}"><button type="button" name="button" class="deleteButton">Verwijder deze getuigenis</button></a>
      @endif
    </div>
      <div class="oneStoryForum">
        @foreach ($story as $story)
          <h4>{{$story->title}}</h4>
          <div class="StoryBody">
            <p>{{$story->story}}</p>
            <div class="comments">
              @if (count($comments) >  0)
                @foreach ($comments as $comment)
                <div class="oneComment">
                  <p>{{$comment->body}}</p>
                  <a href="{{ route('deleteComment', [$id, $comment->id]) }}"><button type="button" name="button" class="deleteButton">verwijderen</button></a>
                </div>
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
</body>
</html
