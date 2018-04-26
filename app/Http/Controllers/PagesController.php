<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getuigenis;
use App\Comment;
use App\Gamecomment;
use DB;

class PagesController extends Controller
{
    public function index() {
      return view('home');
    }

    public function home() {
      return view('home');
    }
    public function info() {
      return view('info');
    }
    public function story1() {
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

      return view('story1', compact('stories', 'countComArray'));
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
}
