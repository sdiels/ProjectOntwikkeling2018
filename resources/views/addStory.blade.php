<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/forumstyle.css') }}" rel="stylesheet">
</head>
<body>
  <div class="addForumPage">
    <h1>GETUIGENIS TOEVOEGEN</h1>
    <a href="{{ route('forum') }}"><p>Terug naar forum</p></a>
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ url('storeStory') }}" method="post">
        <label for="title">Titel: </label>
        <input type="text" name="title" maxlength="30" value="{{ Session::get('storyTitle') }}" placeholder="Voeg hier de titel in"><br>
        <p class="smallTextInput">Max. 30 karakters</p>

        <p class="storyField">
          <label for="story">Verhaal</label>
          <textarea name="story" rows="8" cols="80" placeholder="Vertel hier uw verhaal">{{ Session::get('storyBody') }}</textarea> <br>
        </p>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="submit" value="Verhaal toevoegen">
      </form>
  </div>
</body>
</html>
