@extends('layout.main_layout')

@section('contactus')
<div class="w-[90%] mx-auto">
    <div class="dev w-full h-[20vh]">
        dev info
    </div>
    <div class="comment-sec w-full p-4 flex flex-col">
        <form action="{{ route('comment.store') }}" method="post" class="flex flex-col gap-4 p-4">
            @csrf
            <label for="commenter" class="blocks ">Name : <input type="text" name="commenter" id="commenter" class="px-2 w-full max-w-[500px] p-1"></label>
            <textarea name="comment" id="" rows="4" style="resize:none;" class="w-full p-2"></textarea>
            <label for="add_ratings"> Add Ratings :  <input type="checkbox" name="add_ratings" value="true" id="add_ratings"></label>
            <div class="wrapper">
                <input type="checkbox" name="rating" id="st1" value="1" />
                <label for="st1"></label>
                <input type="checkbox" name="rating" id="st2" value="2" />
                <label for="st2"></label>
                <input type="checkbox" name="rating" id="st3" value="3" />
                <label for="st3"></label>
                <input type="checkbox" name="rating" id="st4" value="4" />
                <label for="st4"></label>
                <input type="checkbox" name="rating" id="st5" value="5" />
                <label for="st5"></label>
              </div>
            <button type="submit" class="btn w-[150px]">Add Commment</button>
        </form>
    </div>
    <div class="comments flex flex-col gap-3 overflow-y-scroll h-[40vh] px-6">
        @foreach ($all_comments as $single_comment)
            <div class="comm rounded-lg min-w-[200px] h-fit flex flex-col gap-2">
                <span class="block text-right p-1">{{ $single_comment->name }}</span>
                <span class="block text-right p-1">{{ $single_comment->updated_at }}</span>
                <span class="block text-right  p-1">{{ $single_comment->comment }}</span>
            </div>
        @endforeach
    </div>
</div>
@endsection