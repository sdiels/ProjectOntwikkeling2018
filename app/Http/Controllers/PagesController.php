<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getuigenis;
use App\Comment;
use App\Gamecomment;
use DB;
use Mail;

class PagesController extends Controller
{
    public function index(Request $request, Mail $mail) {
      /*********************************************
      //Getuigenissen
      *********************************************/
      $stories = Getuigenis::orderby('id', 'desc')->take(4)->get();

      if ($stories->count() > 0) {
        $storyHighestId = Getuigenis::orderby('id', 'desc')->select('getuigenis.id')->first();
        $number = $storyHighestId->id;

        $countComArray = array();
        for ($a=1; $a <= $number ; $a++) {
          if (Getuigenis::where('id', $a)->exists()) {
            $c = Comment::where('comments.storyId', $a)->get();
            $count = count($c);

            $countComArray[$a] = $count;
          }
        }
      }
      /*********************************************
      //GameComments
      *********************************************/
      $commentOnGame = Gamecomment::orderby('id', 'desc')->take(3)->get();
      /*********************************************
      /*********************************************
      //Sessions
      *********************************************/

      $request->session()->forget('scrollToInfo');

      if ($request->session()->has('scrollInfo')) {
        $request->session()->forget('scrollInfo');
        $request->session()->put('scrollToInfo', true);
      }

      $request->session()->forget('scrollToForum');

      if ($request->session()->has('scrollForum')) {
        $request->session()->forget('scrollForum');
        $request->session()->put('scrollToForum', true);
      }

      $request->session()->forget('scrollToGamePage');

      if ($request->session()->has('scrollGamePage')) {
        $request->session()->forget('scrollGamePage');
        $request->session()->put('scrollToGamePage', true);
      }

      $request->session()->forget('reactieFieldWarning');

      if ($request->session()->has('reactieFieldEmpty')) {
        $request->session()->forget('reactieFieldEmpty');
        $request->session()->put('reactieFieldWarning', 'Vul een reactie in als u iets wilt reageren');
      }

      $request->session()->forget('checkIfSubmitted');

      $randomStory = rand(1, 2);

      if ($randomStory == 1) {
        return view('story1', compact('stories', 'countComArray', 'commentOnGame', 'randomStory'));
      }
      else if ($randomStory == 2) {
        return view('story2', compact('stories', 'countComArray', 'commentOnGame', 'randomStory'));
      }
    }

    public function homeToForum(Request $request) {
      $request->session()->put('scrollForum', true);

      return redirect()->action('PagesController@index');
    }
    public function homeToGame(Request $request) {
      $request->session()->put('scrollGamePage', true);

      return redirect()->action('PagesController@index');
    }
    public function skip(Request $request) {
      $request->session()->put('scrollInfo', true);

      return redirect()->action('PagesController@index');
    }
    public function info() {
      return view('info');
    }

    public function contact() {
      return view('contact');
    }

    public function forum() {
      $stories = Getuigenis::orderby('id', 'desc')->get();

      if ($stories->count() > 0) {
        $storyHighestId = Getuigenis::orderby('id', 'desc')->select('getuigenis.id')->first();
        $number = $storyHighestId->id;

        $countComArray = array();
        for ($a=1; $a <= $number ; $a++) {
          if (Getuigenis::where('id', $a)->exists()) {
            $c = Comment::where('comments.storyId', $a)->get();
            $count = count($c);

            $countComArray[$a] = $count;
          }
        }
      }

      return view('forum', compact('stories', 'countComArray'));
    }

    public function game() {
      $commentOnGame = Gamecomment::orderby('id', 'desc')->take(3)->get();

      return view('game', compact('commentOnGame'));
    }

    public function gamecomments(Request $request) {
      $commentOnGame = Gamecomment::orderby('id', 'desc')->get();

      $request->session()->forget('askSureDeleteGameComment');

      return view('gamereactions', compact('commentOnGame'));
    }

    public function addStory() {

      return view('addStory');
    }

    public function show (Request $request, $id){

        $story = Getuigenis::where('id', $id)->get();

        $comments = Comment::where('storyId', $id)->join('getuigenis', 'comments.storyId', '=', 'getuigenis.id')->select('getuigenis.*', 'comments.*')->orderby('comments.id', 'desc')->get();

        $id=$id;

        $request->session()->forget('askSureDeleteStory');
        $request->session()->forget('askSureDeleteComment');

        return view('showOne', compact('story', 'comments', 'id'));
    }
    public function playGame() {
      return view('playGame');
    }
}
