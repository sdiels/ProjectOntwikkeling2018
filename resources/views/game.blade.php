@extends('layouts.app')

@section('content')
<div class="gamepage">
  <h1>SPEL</h1>
  <div class="gamepageWithoutTitle">
    <main>
      <div class="gameInformation">
        <h2>Informatie</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
      </div>
      <div class="photo123">
        <div class="photo1 bigPhoto">
          <a href="{{ asset('images/gamepageFoto1.png') }}"><img src="{{ asset('images/gamepageFoto1.png') }}" alt=""></a>
        </div>
        <div class="photo23">
          <div class="photo2 smallPhoto">
            <a href="{{ asset('images/gamepageFoto2.png') }}"><img src="{{ asset('images/gamepageFoto2.png') }}" alt=""></a>
          </div>
          <div class="photo3 smallPhoto">
            <a href="{{ asset('images/gamepageFoto3.png') }}"><img src="{{ asset('images/gamepageFoto3.png') }}" alt=""></a>
          </div>
        </div>
      </div>
    </main>
    <aside>
      <div class="photo4 longphoto">
        <h2>Foto</h2>
      </div>
      <div class="playGame">
        <h2>Speel het spel</h2>
      </div>
      <div class="reactions">
        <h2>Reacties</h2>
        <div class="gameComments">
          @if (count($commentOnGame) >  0)
            @foreach ($commentOnGame as $comment)
            <div class="oneGameComment">
              <p>{{$comment->body}}</p>
            </div>
            @endforeach
            <div class="seeMoreReacties">
              <a href="{{ route('GameComment')}}">zie meer...</a>
            </div>
          @else
            <p>Er zijn geen reacties</p>
          @endif
        </div>
        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
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
    </aside>
  </div>
</div>
@endsection

@if (session('status'))
  <script type="text/javascript">

  </script>
@endif
