<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getuigenis 1</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

    <link rel="stylesheet" href="scrollmagic/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="scrollmagic/css/examples.css" type="text/css">

    <script type="text/javascript" src="scrollmagic/js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="scrollmagic/js/lib/highlight.pack.js"></script>
    <script type="text/javascript" src="scrollmagic/js/lib/modernizr.custom.min.js"></script>
    <script type="text/javascript" src="scrollmagic/js/examples.js"></script>

    <script type="text/javascript" src="scrollmagic/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
</head>
<style>
    @font-face {
        font-family: antwerpen;
        src: url(AntwerpenRegular.otf);
    }

    body {
        width: 100%;
        margin: 0;
        background-color: white;
    }
    p {
        font-family: antwerpen;
        font-size: 3em;
        position: absolute;
    }

    #bg1 {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    #tram {
        position: absolute;
        width: 50%;
        top: 41%;
        left: 55%;
    }

    #text1 {
        left: 60%;
        top: 120%;
        opacity: 0;
    }


    #fdiv1 {
        position: absolute;
        height: 650px;
        width: 50%;
        border: red solid 2px;
        overflow: hidden;
        opacity: 0;

        left: 0;
        top: 170%
    }

    #buildings1,
    #buildings2 {
        width: 85%;
        position: absolute;
        top: 30px;
        animation-timing-function: linear;
        animation-duration: 10s;
        animation-iteration-count: infinite;
        animation-fill-mode: both;
    }

    #buildings1 {
        animation-name: buildings1-move;
    }

    #buildings2 {
        animation-name: buildings2-move;
    }

    @keyframes buildings1-move {
        0% {
            transform: translatex(-95%);
        }
        50% {
            transform: translatex(0);
        }
        100% {
            transform: translatex(85%);
        }
    }

    @keyframes buildings2-move {
        0% {
            transform: translatex(0);
        }
        50% {
            transform: translatex(85%);
        }
        51% {
            transform: translatex(-95%);
        }
        100% {
            transform: translatex(0);
        }
    }

    #frame1 {
        width: 120%;
        position: absolute;
    }

    #text2 {
        left: 65%;
        top: 190%;
        opacity: 0;
    }


    #fdiv2 {
        position: absolute;
        height: 650px;
        width: 50%;
        overflow: hidden;
        opacity: 0;

        left: 55%;
        top: 270%
    }
    #frame2 {
        width: 120%;
        position: absolute;

        right: 1%
    }
    #man {
        width: 120%;
        position: absolute;

        right: 50%
    }
    #text3 {
        left: 0%;
        top: 290%;
        width: 50%;
        opacity: 0;
    }

    #face {
        position: absolute;
        width: 100%;
        opacity: 0;
        top: 250%
    }

    #drop1,
    #drop2,
    #drop3{
        width: 2%;
        position: absolute;
        top: 70%;
        animation-timing-function: linear;

        animation-iteration-count: infinite;
        animation-fill-mode: both;
    }

    #drop1 {
        animation-name: drop1-move;
        left: 50%;
        animation-duration: 4s;
    }
    #drop2 {
        animation-name: drop2-move;
        left: 35%;
        animation-duration: 3s;
    }
    #drop3 {
        animation-name: drop3-move;
        left: 60%;
        animation-duration: 5s;
    }

    @keyframes drop2-move {
        0% {
            transform: translatey(0);
            opacity: 0;
        }
        20% {
            opacity: 1;
        }
        80% {
            opacity: 1;
        }
        100% {
            transform: translatey(170px);
            opacity: 0;
        }
    }@keyframes drop1-move {
        0% {
            opacity: 0.5;
            transform: translateY(210px);
        }
        29%{
            opacity: 0;
            transform: translateY(300px);
        }
        30% {
            transform: translatey(0);
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            opacity: 0.5;
            transform: translateY(210px);
        }
    }@keyframes drop3-move {
        0% {
            transform: translatey(80px);
            opacity: 1;
        }
        40% {
            opacity: 1;
        }
        59% {
            opacity: 0;
            transform: translateY(150px);
        }
        60% {
            transform: translatey(0);
            opacity: 0;
        }
        80% {
            opacity: 1;
        }
        100% {
            transform: translatey(80px);
            opacity: 1;
        }
    }

    #text4 {
        left: 12%;
        top: 360%;
        opacity: 0;
        color: white;
    }
    #text5 {
        left: 30%;
        top: 470%;
        opacity: 1;
        color: white;
    }

    #text5 {
        left: 30%;
        top: 470%;
        opacity: 1;
        color: white;
    }
    #text6 {
        opacity: 0;
    }
    #text7 {
        opacity: 0;
        left: 15%;
    }

</style>

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
    <div id="trigger9"></div>

    <div class="spacer s2"></div>
    <div id="trigger10"></div>
    <p id="text6">Info</p>

    <div class="spacer s3"></div>
    <div id="trigger11"></div>
    <p id="text7">Lees verhalen/getuigenissen</p>
    <div class="forum">
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
                triggerElement: "#trigger9",
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
                triggerElement: "#trigger10",
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
                triggerElement: "#trigger11",
                duration: 200
            })
            .setTween("#text7", {
                opacity: 1,
                left: "25%"
            }) // the tween durtion can be omitted and defaults to 1
            .addIndicators({
                name: "text7 (opacity: 1)"
            }) // add indicators (requires plugin)
            .addTo(controller);


    </script>
</body>

</html>
