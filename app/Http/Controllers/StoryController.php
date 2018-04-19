<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getuigenis;
use App\Comment;
use DB;

class StoryController extends Controller
{
  public function store(Request $request) {

      $story = new Getuigenis;

      $story->title = $request->title;
      $story->story = $request->story;

      $story->save();

      $stories = Getuigenis::all();

      return redirect('/forum')->with('stories', $stories);
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
