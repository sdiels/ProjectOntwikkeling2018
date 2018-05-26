<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link rel="stylesheet" href="/css/forumstyle.css">
</head>
<body>
  <div class="forumPage">
    <div class="h1AndButton">
      <h1>FORUM</h1>
      <div class="adminLogin">
      @if(session()->has('adminLoggedIn'))
        <a href="{{ url('adminLogout') }}"><button type="button" name="button">Uitloggen</button></a>
      @else
        <button onclick="adminLogin()" id="adminLoginBttn" class="" type="button" name="button">Administrator login</button>
        <div class="adminForm" id="adminForm">
          <form action="{{ url('adminLogin') }}" method="post">
              <input type="text" name="name" placeholder="Naam"><br>
              <input type="text" name="password" placeholder="wachtwoord"><br>

              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" name="submit" value="Inloggen">
            </form>
        </div>
      @endif
      </div>
    </div>
    <a href="{{ route('indexToForum') }}"><p>Terug naar homepage</p></a>
    <div class="addStoryButton">
      <a href="{{ route('addStory') }}"><button type="button" name="button" class="addButton righterButton">Ik wil mijn verhaal delen</button></a>
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

  <script type="text/javascript">
    function adminLogin () {
      var adminForm = document.getElementById('adminForm');
      var button = document.getElementById('adminLoginBttn');

      if (adminForm.classList.contains('showForm')) {
        adminForm.classList.add('hiddenForm');
        adminForm.classList.remove('showForm');
        button.classList.add('isRight');
        button.classList.remove('isLeft');
      }
      else {
        adminForm.classList.remove('hiddenForm');
        adminForm.classList.add('showForm');
        button.classList.remove('isRight');
        button.classList.add('isLeft');
      }
    }
  </script>
</body>
</html>
