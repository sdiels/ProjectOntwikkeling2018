@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="/css/story2.css">
@endsection

@section('content')
<div class="spacer s5"></div>
<div id="trigger1"></div>
<img id="bg1" src="{{asset('images/story2/bg1.jpg')}}" alt="achtergrond 1">
<img id="alogo" src="{{asset('images/story2/a-logo.svg')}}" alt="a logo">
<img id="serveerster" src="{{asset('images/story2/serveerster.png')}}" alt="serveerster">
<p id="text1">Ik werkte als serveerster op privéfeestjes van rijke mensen</p>

<div class="spacer s3"></div>
<div id="trigger2"></div>

<div class="spacer s10"></div>
<div id="trigger3"></div>
<div class="spacer s3"></div>
<div id="trigger4"></div>

<div id="fdiv1">
    <img id="mannen" src="{{asset('images/story2/mannen.png')}}" alt="mannen">
    <img id="frame1" src="{{asset('images/story2/frame1.png')}}" alt="frame 1">
</div>
<p id="text2">Ik krijg er best vaak vulgaire opmerkingen</p>

<div class="spacer s6"></div>
<div id="trigger5"></div>
<div class="spacer s3"></div>
<div id="trigger6"></div>

<div id="fdiv2">
    <img id="man" src="{{asset('images/story2/man.png')}}" alt="man">
    <img id="frame2" src="{{asset('images/story2/frame2.png')}}" alt="frame 2">
</div>
<p id="text3">Een keer kwam een wat oudere man tegen me praten</p>

<div class="spacer s6"></div>
<div id="trigger7"></div>
<div class="spacer s3"></div>
<div id="triggertext4"></div>
<div id="trigger8"></div>

<img id="bigMan" src="{{asset('images/story2/bigMan.jpg')}}" alt="grote man">
<p id="text4">Uit het niets vroeg hij me of ik goed kon pijpen</p>
<p id="text5">Ik liep snel weg zonder te antwoorden</p>

<div class="spacer s6"></div>
<div id="trigger9"></div>
<div class="spacer s6"></div>
<div id="trigger10"></div>
<div class="spacer s3"></div>
<div id="trigger11"></div>

<div id="fdiv3">
    <div id="whitebg"></div>
    <img id="man3" src="{{asset('images/story2/man3.png')}}" alt="man">
    <img id="frame3" src="{{asset('images/story2/frame3.png')}}" alt="frame 3">
</div>
<p id="text6">Erna ging hij zelfs bij mijn baas klagen over mijn gedrag</p>

<div class="spacer s6"></div>
<div id="trigger12"></div>
<div class="spacer s3"></div>
<div id="trigger13"></div>

<div id="fdiv4">
    <img id="bg4" src="{{asset('images/story2/bg4.jpg')}}" alt="bg 4">
    <img id="frame4" src="{{asset('images/story2/frame4.png')}}" alt="frame 4">
</div>
<p id="text7">Ik heb diezelfde avond nog ontslag genomen</p>
<div id="whiteScreenEnd"></div>

<div id="trigger15"></div>
<div id="trigger16"></div>
<p id="text8">Lien is niet de enige die het slachtoffer werd van soortgelijke gebeurtenissen</p>

@endsection

@section('scripts')
<script type="text/javascript" src="js/story2Script.js"></script>
@endsection
