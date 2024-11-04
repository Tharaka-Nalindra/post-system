<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    function index()
    {
        $post=Post::all();
        return view('Home.index',compact('post'));
    }
    function upload(Request $request)
    {
        $data = new Post;
        $data->username = Auth::user()->name;
        $data->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('post', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();


    }
    function view_post()
    {
            $name = Auth::user()->name;

            $post= Post::where('username', '=',$name)->get();
            return view('post_page.post_page',compact('post'));
    }

    function delete_post($id){
        $data=post::find($id);
        $data->delete();
        return redirect()->back();
    }

    function update_post($id){
        $data=post::find($id);
        return view('update.updatepost',compact('data'));
    }

    function confirm_update(Request $request ,$id){
        $post=post::find($id);

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('post', $imagename);

            $post->image = $imagename;
        }

        $post->save();
        return redirect()->back();
    }


}
