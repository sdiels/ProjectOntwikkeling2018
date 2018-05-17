<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getuigenis;
use App\Comment;
use DB;
use Illuminate\Support\Facades\Mail;

class StoryController extends Controller
{
  public function store(Request $request, Mail $mail) {

      $title = $request->title;
      $storyBody = $request->story;


      if ($title != null && $storyBody != null) {
        // $story = new Getuigenis;
        //
        //$story->title = $title;
        //$story->story = $storyBody;
        //
        // $story->save();
        //

        Mail::send('emails.mailTemplate', ['title' => $title, 'body' => $storyBody], function ($message){
          $message->to('robin.sel@hotmail.com', 'Getuigenis controler')->subject('Getuigenis controle');
        });

        $stories = Getuigenis::all();

        $request->session()->forget('storyTitle');
        $request->session()->forget('storyBody');

        return redirect('/forum')->with('stories', $stories);
      }
      else {
        $request->session()->put('storyTitle', $title);
        $request->session()->put('storyBody', $storyBody);

        return redirect()->route('addStory')->with('status', 'Vul elk veld in aub');

      }

  }

  public function storeComment(Request $request, $id) {
      $comment = new Comment;

      $comment->body = $request->body;
      $comment->storyId = $id;

      $comment->save();

      $story = Getuigenis::where('id', $id)->get();
      $comments = Comment::all();

      $id=$id;

      return redirect()->action('PagesController@show', ['id' => $id]);
  }
}
