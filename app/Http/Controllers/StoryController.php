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
        $story = new Getuigenis;

        $story->title = $title;
        $story->story = $storyBody;
        $story->validated = 0;

         $story->save();


        $stories = Getuigenis::all();

        $request->session()->forget('storyTitle');
        $request->session()->forget('storyBody');

        $request->session()->flash('StoryAdded', 'Uw verhaal wordt gevalideerd. Indien het verhaal goed is zal deze later hier verschijnen');

        return redirect('/forum')->with('stories', $stories);
      }
      else {
        $request->session()->put('storyTitle', $title);
        $request->session()->put('storyBody', $storyBody);

        return redirect()->route('addStory')->with('status', 'Vul elk veld in aub');

      }

  }

  public function storeComment(Request $request, $id) {

      $commentBody = $request->body;

      if ($commentBody != null) {
        $comment = new Comment;

        $comment->body = $commentBody;
        $comment->storyId = $id;

        $comment->save();
      }
      else {
        $request->session()->put('reactieFieldEmpty', true);
      }

      $story = Getuigenis::where('id', $id)->get();
      $comments = Comment::all();

      $id=$id;

      return redirect()->action('PagesController@show', ['id' => $id]);
  }

  public function deleteStory (Request $request, $id) {
    $request->session()->put('deleteStorySure', $id);
    $request->session()->forget('validateStory');

    return redirect()->action('PagesController@forum');
  }

  public function deleteStoryDel (Request $request, $id) {
    $storyDel = Getuigenis::where('id', $id)->delete();
    $request->session()->forget('deleteStorySure', $id);

    return redirect()->action('PagesController@forum');
  }

  public function dontDelete (Request $request) {
    $request->session()->forget('deleteStorySure');

    return redirect()->action('PagesController@forum');
  }

  public function validateStory (Request $request, $id) {
    $request->session()->put('validateStory', $id);
    $request->session()->forget('deleteStorySure', $id);

    return redirect()->action('PagesController@forum');
  }

  public function validateCheck (Request $request, $id) {
    Getuigenis::where('id', $id)
          ->update(['validated' => 1]);

    $request->session()->forget('validateStory');

    return redirect()->action('PagesController@forum');
  }

  public function dontValidate (Request $request) {
    $request->session()->forget('validateStory');

    return redirect()->action('PagesController@forum');
  }
}
