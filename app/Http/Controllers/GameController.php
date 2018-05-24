<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamecomment;
use DB;


class GameController extends Controller
{
  public function store (Request $request) {
    $commentbody = $request->body;

    if ($commentbody != null) {
      $gameComment = new Gamecomment;
      $gameComment->body = $commentbody;
      $gameComment->save();

      $allComments = Gamecomment::all();
    }
    else {
      $request->session()->put('reactieFieldEmpty', true);

    }
    $request->session()->put('scrollGamePage', true);

    return redirect()->action('PagesController@index');
  }
}
