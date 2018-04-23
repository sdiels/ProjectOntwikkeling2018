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

        return redirect('/game')->with('allComments', $allComments);
      }
      else {
        return redirect()->route('game')->with('status', 'Vul het veld in als u een reactie wilt plaatsen');
      }
    }
}
