<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
              <input type="password" name="password" placeholder="wachtwoord"><br>

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

    @if(session()->has('deleteStorySure'))
    <div class="hide">
      {{ $sureId = Session::get('deleteStorySure') }}
    </div>
    <div class="AreYouSure">
      <p>Bent u zeker dat u dit verhaal wilt verwijderen</p>
      <a href="{{ url('deleteStoryDel', [$sureId]) }}"><button type="button" name="button">Ja</button></a>
      <a href="{{ route('dontDelete') }}"><button type="button" name="button">Nee</button></a>
    </div>
    @endif

    @if(session()->has('validateStory'))
    <div class="hide">
      {{ $sureId = Session::get('validateStory') }}
    </div>
    <div class="AreYouSure">
      <p>Bent u zeker dat u dit verhaal wilt valideren</p>
      <a href="{{ url('validateCheck', [$sureId]) }}"><button type="button" name="button">Ja</button></a>
      <a href="{{ route('dontValidate') }}"><button type="button" name="button">Nee</button></a>
    </div>
    @endif

    @if(session()->has('StoryAdded'))
      <p class="alert-success">{{ Session::get('StoryAdded') }}</p>
    @endif

    @if(session()->has('adminLoggedIn'))
    <div class="AllStories AllStoriesNV">
      @if (count($storiesNonvalidated) > 0)
        @foreach($storiesNonvalidated as $storyNV)
          <div class="storyForum NVStory">
            <div class="commentAndTitle">
              <h4>{{$storyNV->title}}</h4>
            </div>
            <p class="storyBody">{{$storyNV->story}}</p><br>
            <a href="{{ url('validate', [$storyNV->id]) }}"><button type="button" name="button">Goedkeuren</button></a>
            <a href="{{ url('deleteStory', [$storyNV->id]) }}"><button type="button" name="button">Niet goedkeuren</button></a>
          </div>
        @endforeach
      @else
        <p>Er zijn geen ongevalideerde getuigenissen</p>
      @endif
    </div>
    @else
    <div class="AllStories">
      @if (count($stories) > 0)
        @foreach($stories as $story)
          <div class="storyForum storyForumV">
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
    @endif
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
