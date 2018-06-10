<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>seksuele intimidatie bij scholieren</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--fontawesome stylesheet link, to use their icons use <i> tag -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/brands.css" integrity="sha384-VGCZwiSnlHXYDojsRqeMn3IVvdzTx5JEuHgqZ3bYLCLUBV8rvihHApoA1Aso2TZA" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/fontawesome.css" integrity="sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV" crossorigin="anonymous">

    <!-- Styles en scripts -->
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

    <!-- <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script> -->

    <link rel="stylesheet" href="/css/style.css">
    @yield('styles')
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>
    <script>
        var controller = new ScrollMagic.Controller();

    </script>

    <div id="app">
        <header></header>
        <div class="wrapper">

            <div class="storyView">
                <div onclick="automaticScrollFast()" class="skipStory">
                    <p>Sla het verhaal over</p>
                </div>
                <div class="scrollStory">
                    <button id="scrollStoryButton" onclick="automaticScroll()"> Scroll automatisch door het verhaal</button>
                </div>

                @yield('content')
            </div>
            <div class="OtherContent">
              <div class="mobileIntro">
                <div class="mobileIntroLogo">
                    <img id="alogoIntro" src="{{asset('images/story1/a-logo.svg')}}" alt="a logo">
                </div>
                <div class="mobileIntroText">
                  <h1>Seksuele intimidatie bij scholieren</h1>
                  <p>Bezoek deze site op uw browser voor de volle belevenis</p>
                </div>
              </div>
                <div class="ContentDiv">
                    <div id="triggeri1"></div>

                    <div id="stats">
                        <div id="stats1" class="clearfix">
                            <div id="bar1">
                                <div id="percentage1">
                                </div>
                            </div>
                            <div id="statsinfo">
                                <p>3% van alle jongens onder de 25 jaar en</p>
                            </div>
                        </div>
                        <div id="stats2" class="clearfix">
                            <div id="bar2">
                                <div id="percentage2">
                                </div>
                            </div>
                            <div id="statsinfo">
                                <p>15% van alle meisjes onder de 25 jaar</p>
                            </div>
                            <div id="statsinfoafter">
                                <p>zijn het slachtoffer geweest van seksueel overschrijdend gedrag.</p>
                            </div>
                        </div>
                    </div>

                    <div id="ForumScroll"></div>
                    <p id="texts1">Lees verhalen/ getuigenissen</p>

                    <div class="forumInStory">
                        @if (count($stories) > 0)
                        <?php $a = 0; ?>
                            @foreach($stories as $story)
                            <?php $a++; ?>
                                <div id="triggers{{$a}}"></div>
                                <a href="{{ url('forum', [$story->id]) }}" class="storyNumber{{$a}}">
                                    <div class="storyForum">
                                        <div class="commentAndTitle">
                                            <h4>{{$story->title}}</h4>
                                            <p class="commentCount">{{ $countComArray[$story->id] }} reacties</p>
                                        </div>
                                        <p class="storyBody">{{$story->story}}</p>
                                        <br>
                                    </div>
                                </a>
                                @endforeach
                                <div id="triggers6"></div>
                                <div class="zieMeer">
                                    <a href="{{ route('forum')}}">
                                        <p>Zie meer &rarr;</p>
                                    </a>
                                </div>

                                @else
                                <p>Er zijn geen getuigenissen</p>
                                @endif
                    </div>
                    <p id="textg1">Speel het spel</p>
                    <div class="gamepageWithoutTitle">
                        <div class="gameInfoAndPhotos">
                            <div class="GameInfo">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
                            </div>
                            <div class="GamePhotos">
                                <div class="bigPhoto">
                                    <img src="{{asset('images/gamePage/gamepageFoto1.png')}}" alt="">
                                </div>
                                <div class="smallPhotos">
                                    <img src="{{asset('images/gamePage/gamepageFoto2.png')}}" alt="">
                                    <img src="{{asset('images/gamePage/gamepageFoto3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="gamereactionsAndPlayGame">
                            <a href="{{ route('playGame')}}" class="gamePlayA">
                                <div class="gamePlay">
                                    <h2>Speel het spel</h2>
                                </div>
                            </a>
                            <div class="gameReactions">
                                <h2>Reacties</h2>
                                <div id="ReactionsScroll"></div>
                                <div class="gameComments">
                                    @if (count($commentOnGame) > 0) @foreach ($commentOnGame as $comment)
                                    <div class="oneGameComment">
                                        <p>{{$comment->body}}</p>
                                    </div>
                                    @endforeach
                                    <div class="seeMoreReacties">
                                        <a href="{{ route('GameComment')}}">Zie meer &rarr;</a>
                                    </div>
                                    @else
                                    <p>Er zijn geen reacties</p>
                                    @endif
                                </div>
                                @if(session()->has('reactieFieldWarning'))
                                <div class="alert alert-danger">
                                    {{ Session::get('reactieFieldWarning')}}
                                </div>
                                @endif
                                <form id="form" action="{{ route('storeGameComment')}}" method="post">
                                    <p class="storyField">
                                        <label for="body">Reactie</label>
                                        <textarea name="body" rows="2" cols="80"></textarea>
                                        <br>
                                    </p>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" name="submit" value="Reageren">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ContactDiv">
                        <p id="textc1">Wat kan ik doen...</p>
                        <button class="collapsible contact">
                            <h1>als slachtoffer van seksuele intimidatie?</h1>
                        </button>
                        <div class="content">
                            <p> Maak de dader duidelijk dat je dit niet wil, zeg expliciet wat je storend vindt. Dit is natuurlijk niet altijd even makkelijk voor iedereen. Het is belangrijk om erover te praten met iemand die je kan vertrouwen. (een vriend(in), een collega, je moeder, je vader, broer of zus,…) Je kan ook steeds contact opnemen met tele-onthaal, hier kan je anoniem je verhaal kwijt.Je kan ook contact opnemen met het CAW, hier staan ze ook klaar om je te helpen. Gebeurd dit op je werk? In dat geval kan je ook naar de preventieadviseur gaan om erover te praten. Je kan ook een klacht indienen bij de preventieadviseur of vertrouwenspersoon op je werk.
                                <br/>
                                <br/> Hoe wordt seksuele intimidatie op het werk bestraft?
                                <br/>
                                <br/> De arbeidsrechtbank kan een gevangenisstraf opleggen van 8 dagen tot 1 maand en een geldboete tot 500 euro. Wordt de zaak doorverwezen naar de correctionele rechtbank dan kan de strafrechter een zwaardere straf opleggen. De bestraffing is dan gebaseerd op de wetgeving over 'aanranding van de eerbaarheid' of 'verkrachting'.
                            </p>

                            <div class="buttons">
                                <a class="call" href="tel:106">
                                    <div>tel : 106 tele-onthaal</div>
                                </a>
                                <a class="call" href="https://www.tele-onthaal.be">
                                    <div>website tele-onthaal</div>
                                </a>
                                <a class="call" href="https://www.caw.be/">
                                    <div>website CAW</div>
                                </a>
                            </div>
                        </div>
                        <button class="collapsible contact">
                            <h1>als ik zit met vragen of wil even praten over seksuele intimidatie?</h1>
                        </button>
                        <div class="content">
                            <p>Je zit met vragen rond seksuele intimidatie, er zijn heel wat aanspreekpunten die je verder kunnen helpen.</br>
                                </br>Tele-onthaal: hier kan je telefonsich contact mee opnemen of via hun website kan je anoniem chatten </br>
                                </br>
                                Sensoa: hier kan je terecht met alle soorten vragen rond seksualiteit ook vragen rond seksuele intimidatie </br>
                                </br>je kan ook terecht bij het JAC (het jongeradviescentrum) met al je vragen
                                <p>
                                    <div class="buttons">
                                        <a class="call" href="https://www.sensoa.be">
                                            <div>Sensoa</div>
                                        </a>
                                        <a class="call" href="https://www.tele-onthaal.be">
                                            <div>website tele-onthaal</div>
                                        </a>
                                        <a class="call" href="https://www.jac.be">
                                            <div>JAC</div>
                                        </a>
                                    </div>

                        </div>
                        <button class="collapsible contact">
                            <h1>als dader van seksuele intimidatie</h1>
                        </button>
                        <div class="content">
                            <p>Bij het CAW kan je altijd terecht met al je vragen. Tele-onthaal staat ook voor jou steeds klaar</p>
                            <div class="buttons">
                                <a class="call" href="tel:106">
                                    <div>tel : 106 tele-onthaal</div>
                                </a>
                                <a class="call" href="https://www.tele-onthaal.be">
                                    <div>website tele-onthaal</div>
                                </a>
                                <a class="call" href="https://www.caw.be/">
                                    <div>website CAW</div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <footer>
                    <div class="socialLinks">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-facebook-messenger"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>

                    <small>&copy; Copyright 2018, Emovate</small>
                </footer>
        </div>


        @if(session()->has('scrollToForum'))
        <script>
            function bottom() {
                document.getElementById('ForumScroll').scrollIntoView();
            };
            bottom();

        </script>
        @endif @if(session()->has('scrollToGamePage'))
        <script>
            function bottom() {
                document.getElementById('textg1').scrollIntoView();
            };
            bottom();

        </script>
        @endif
    </div>

    <script type="text/javascript">
        if (screen.width > 100) {
            var head = document.getElementsByTagName('head')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'js/layoutScript.js';
            head.appendChild(script);
        }

    </script>

    @yield('scripts')


</body>

</html>
