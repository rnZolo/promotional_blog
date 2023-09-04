<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentsController extends Controller
{

    public function index()
    {
        $all_comments = Comments::orderBy('updated_at', 'desc')->limit(10)->get();
        return view('page.contactus', compact('all_comments'));
    }

    public function store(Request $request)
    { 
        $validatedData = $request->validate([
            'email' => 'required|email',
            'comment' => 'required|min:5',
        ]);

       
        
        $new = new Comments();
        $new->email = $request->input('email');
        $new->comment =  $request->input('comment');
        $new->updated_comment = $request->input('update_status', '0');  
      
        if(!request()->add_rating == null){
            $new->rating =  $request->input('rating');
        }

        if($new->save()){
            return back()->with('comment_messages', 'New Review');
        }
    }


    // public function update(Request $request, Comments $comments)
    // {
    //     //
    // }

    public function destroy(Request $request)
    {  
        $rid = $request->id;
            Comments::findOrFail($rid);
                Comments::where('id', $rid)->delete();
                    return back()->with('comment_messages', 'Review Deleted');
        
    }

}
