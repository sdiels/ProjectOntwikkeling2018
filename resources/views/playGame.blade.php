<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | projectwerken 2018 - Een leven in 7 dagen</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">

    <link rel="stylesheet" href="/css/forumstyle.css">

    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Builds.json", {onProgress: UnityProgress});
    </script>
    <style media="screen">
      body {
        background-color: black;
      }
    </style>
  </head>
  <body>
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
