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
    <script type="text/javascript" src="scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/story1.css">
</head>
<body>
  <script>
      var controller = new ScrollMagic.Controller();

  </script>


    <div id="app">
      <header></header>
      <div class="skipStory">
        <a href="{{ roue('skipStory') }}"><p>Sla het verhaal over</p></a>
      </div>
        <div class="storyView">
          @yield('content')
        </div>
        <div class="OtherContent">
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
          <p id="texts1">Lees verhalen/getuigenissen</p>

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
                    <p class="storyBody">{{$story->story}}</p><br>
                  </div>
                </a>
              @endforeach
          <div id="triggers6"></div>
          <div class="zieMeer">
            <a href="{{ route('forum')}}"><p>Zie meer &rarr;</p></a>
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
              <div class="gamePlay">
              </div>
              <div class="gameReactions">
                <h2>Reacties</h2>
                <div id="ReactionsScroll"></div>
                <div class="gameComments">
                  @if (count($commentOnGame) >  0)
                    @foreach ($commentOnGame as $comment)
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
                  <textarea name="body" rows="2" cols="80"></textarea><br>
                </p>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" name="submit" value="Reageren">
                </form>
              </div>
            </div>
          </div>

          <div class="spacer s4"></div>
        </div>
        @if(session()->has('scrollToInfo'))
            <script>
              function bottom() {
                document.getElementById( 'ReactionsScroll' ).scrollIntoView();
              };
              bottom();
            </script>
          @endif
        @if(session()->has('scrollToForum'))
            <script>
              function bottom() {
                document.getElementById( 'ForumScroll' ).scrollIntoView();
              };
              bottom();
            </script>
          @endif
        @if(session()->has('scrollToGame'))
            <script>
              function bottom() {
                document.getElementById( 'ReactionsScroll' ).scrollIntoView();
              };
              bottom();
            </script>
          @endif
    </div>

    <script type="text/javascript" src="js/story1Script.js"></script>
    <script type="text/javascript" src="js/layoutScript.js"></script>
</body>
</html>
