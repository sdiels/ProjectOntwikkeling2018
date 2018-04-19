<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getuigenis;
use App\Comment;
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
      return view('infoPage');
    }

    public function forum() {
      $stories = Getuigenis::orderby('id', 'desc')->get();

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

      return view('forum', compact('stories', 'countComArray'));
    }

    public function game() {
      return view('game');
    }

    public function addStory() {

      return view('addStory');
    }

    public function show (Request $request, $id){

        $story = Getuigenis::where('id', $id)->get();

        $comments = Comment::where('storyId', $id)->join('getuigenis', 'comments.storyId', '=', 'getuigenis.id')->select('getuigenis.*', 'comments.*')->orderby('comments.id', 'desc')->get();

        $id=$id;

        $request->session()->forget('askSureDeleteStory');

        return view('showOne', compact('story', 'comments', 'id'));
    }
}
