<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Een leven in 5 dagen</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forumstyle.css') }}" rel="stylesheet">

    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Build3.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body id="blackPage">
    <a href="{{ route('indexToGame') }}"><button class="lowerButton">Terug naar homepage</button></a>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 950px; height: 650px"></div>
      <div class="footer">
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title"></div>
      </div>
    </div>
  </body>
</html>
