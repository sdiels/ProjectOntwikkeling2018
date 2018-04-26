<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getuigenis 1</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

    <link rel="stylesheet" href="scrollmagic/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="scrollmagic/css/examples.css" type="text/css">

    <link rel="stylesheet" href="/css/story1.css">

    <script type="text/javascript" src="scrollmagic/js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="scrollmagic/js/lib/highlight.pack.js"></script>
    <script type="text/javascript" src="scrollmagic/js/lib/modernizr.custom.min.js"></script>
    <script type="text/javascript" src="scrollmagic/js/examples.js"></script>

    <script type="text/javascript" src="scrollmagic/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
</head>
<body>

    <script>
        var controller = new ScrollMagic.Controller();

    </script>
    <div class="spacer s5"></div>
    <div id="trigger1"></div>

    <img id="bg1" src="{{ asset('images/story1/stad.jpg') }}" alt="stad achtergrond">
    <img id="tram" src="{{ asset('images/story1/tram.png') }}" alt="tram">
    <p id="text1">Ik was onderweg met de tram naar school</p>

    <div class="spacer s3"></div>
    <div id="trigger2"></div>
    <div class="spacer s6"></div>
    <div id="trigger3"></div>
    <div class="spacer s3"></div>
    <div id="trigger4"></div>

    <div id="fdiv1">
        <img id="buildings2" src="{{ asset('images/story1/buildings.png') }}" alt="buildings 2">
        <img id="buildings1" src="{{ asset('images/story1/buildings.png') }}" alt="buildings 1">
        <img id="frame1" src="{{ asset('images/story1/frame1.png') }}" alt="frame 1">
    </div>
    <p id="text2">Rustig op een enkel zitje naast het raam</p>

    <div class="spacer s6"></div>
    <div id="trigger5"></div>
    <div class="spacer s3"></div>
    <div id="trigger6"></div>

    <div id="fdiv2">
        <img id="man" src="{{ asset('images/story1/man.png') }}" alt="man">
        <img id="frame2" src="{{ asset('images/story1/frame2.png') }}" alt="frame 2">
    </div>
    <p id="text3">Opeens kwam er een man met zijn geslachtsdeel tegen mij aan staan</p>

    <div class="spacer s6"></div>
    <div id="trigger7"></div>
    <div class="spacer s3"></div>
    <div id="trigger8"></div>

    <div id="face">
        <img src="{{ asset('images/story1/face.jpg') }}" alt="face">
        <img id="drop1" src="{{ asset('images/story1/drop.png') }}" alt="drop1">
        <img id="drop2" src="{{ asset('images/story1/drop.png') }}" alt="drop2">
        <img id="drop3" src="{{ asset('images/story1/drop.png') }}" alt="drop3">
    </div>
    <p id="text4">Ik wist niet wat er gebeurde, het leek alsof ik niet kon bewegen</p>
    <p id="text5">Die vijf minuten leken uren te duren</p>

    <div class="spacer s5"></div>
    <div id="triggers1"></div>

    <div class="spacer s2"></div>
    <div id="triggers2"></div>
    <p id="text6">Info</p>

    <div class="spacer s3"></div>
    <div id="triggers3"></div>
    <p id="text7">Lees verhalen/getuigenissen</p>

    <div class="spacer s2"></div>
    <div class="forumInStory">

    <div id="triggers4"></div>
      @if (count($stories) > 0)
        @foreach($stories as $story)
          <a href="#">
            <div class="storyForum">
              <div class="commentAndTitle">
                <h4>{{$story->title}}</h4>
                <p class="commentCount">{{ $countComArray[$story->id] }} reacties</p>
              </div>
              <p class="storyBody">{{$story->story}}</p><br>
            </div>
          </a>
        @endforeach
    <div class="zieMeer">
      <a href="#"><p>Zie meer &rarr;</p></a>
    </div>

    @else
      <p>Er zijn geen getuigenissen</p>
    @endif
    </div>

    <div class="spacer s10"></div>

    <script>
        var bg1 = new ScrollMagic.Scene({
                triggerElement: "#trigger1",
                duration: 500
            })
            .setTween("#bg1", {
                opacity: 0
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "bg1 (duration: 500)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var tram = new ScrollMagic.Scene({
                triggerElement: "#trigger1",
                duration: 500
            })
            .setTween("#tram", {
                left: "10%",
                top: "75%",
                scale: 1.3
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "tram (duration: 500)"
            }) // add indicators (requires plugin)
            .addTo(controller);

        var text1 = new ScrollMagic.Scene({
                triggerElement: "#trigger2",
                duration: 200
            })
            .setTween("#text1", {
                opacity: 1
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "text1 (duration: 100)"
            }) // add indicators (requires plugin)
            .addTo(controller);



        var frame1 = new ScrollMagic.Scene({
                triggerElement: "#trigger3",
                duration: 500
            })
            .setTween("#fdiv1", {
                left: "5%",
                opacity: 1
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "frame 1 (duration: 500)"
            }) // add indicators (requires plugin)
            .addTo(controller);

        var text2 = new ScrollMagic.Scene({
                triggerElement: "#trigger4",
                duration: 200
            })
            .setTween("#text2", {
                left:"60%",
                opacity: 1
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "text2 (duration: 100)"
            }) // add indicators (requires plugin)
            .addTo(controller);


        var frame2 = new ScrollMagic.Scene({
                triggerElement: "#trigger5",
                duration: 500
            })
            .setTween("#fdiv2", {
                left: "50%",
                opacity: 1
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "frame 2 (duration: 500)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var man = new ScrollMagic.Scene({
                triggerElement: "#trigger5",
                duration: 600
            })
            .setTween("#man", {
                right: "1%"
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "man (duration: 200)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var text3 = new ScrollMagic.Scene({
                triggerElement: "#trigger6",
                duration: 200
            })
            .setTween("#text3", {
                left:"5%",
                opacity: 1
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "text3 (duration: 100)"
            }) // add indicators (requires plugin)
            .addTo(controller);

        var face = new ScrollMagic.Scene({
                triggerElement: "#trigger7",
                duration: 300
            })
            .setTween("#face", {
                opacity: 1
            })// the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "face (duration: 300)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var text4 = new ScrollMagic.Scene({
                triggerElement: "#trigger8",
                duration: 200
            })
            .setTween("#text4", {
                top: "365%",
                opacity: 1
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "text4 (duration: 200)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var body = new ScrollMagic.Scene({
                triggerElement: "#trigger8",
                duration: 100
            })
            .setTween("body", {
                backgroundColor: "black"
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "body (duration: 100)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var body = new ScrollMagic.Scene({
                triggerElement: "#triggers1",
                duration: 100
            })
            .setTween("body", {
                backgroundColor: "white"
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "body (duration: 100)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var text6 = new ScrollMagic.Scene({
                triggerElement: "#triggers2",
                duration: 200
            })
            .setTween("#text6", {
                opacity: 1
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "text6 (opacity: 1)"
            }) // add indicators (requires plugin)
            .addTo(controller);
        var text7 = new ScrollMagic.Scene({
                triggerElement: "#triggers3",
                duration: 200
            })
            .setTween("#text7", {
                opacity: 1,
                left: "25%"
            }) // the tween durtion can be omitted and defaults to 1
            .addTo(controller);
        var forum = new ScrollMagic.Scene({
                triggerElement: "#triggers4",
                duration: 200
            })
            .setTween(".forumInStory", {
                opacity: 1,
                left: "0%"
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "div 1 forum (opacity: 1)"
            }) // add indicators (requires plugin)
            .addTo(controller);


    </script>
</body>

</html>
