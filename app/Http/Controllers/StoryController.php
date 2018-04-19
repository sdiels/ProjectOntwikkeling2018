<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getuigenis;
use App\Comment;
use DB;

class StoryController extends Controller
{
  public function store(Request $request) {

      $title = $request->title;
      $storyBody = $request->story;


      if ($title != null && $storyBody != null) {
        $story = new Getuigenis;

        $story->title = $title;
        $story->story = $storyBody;

        $story->save();

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

  public function delete(Request $request, $id) {
    $request->session()->put('askSureDeleteStory', true);

    $story = Getuigenis::where('id', $id)->get();

    $comments = Comment::where('storyId', $id)->join('getuigenis', 'comments.storyId', '=', 'getuigenis.id')->select('getuigenis.*', 'comments.*')->orderby('comments.id', 'desc')->get();

    $id = $id;

    return view('showOne', compact('story', 'comments', 'id'));
  }

  public function deleteSure ($id) {

    $comments = Comment::where('storyId', $id)->delete();
    $story = Getuigenis::where('id', $id)->delete();

    return redirect()->action('PagesController@forum');
  }
}
