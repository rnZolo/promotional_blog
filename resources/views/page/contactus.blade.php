@extends('layout.main_layout')

@section('contactus')
<div class="w-[90%]  mx-auto text-black relative">
    <div class="z-20 dev w-full h-[30vh] flex flex-col p-5 justify-end items-end">
        <!-- <img src="" alt=" my pic" width="200px" height="200px" class="z-20">
        <div class="z-20 flex flex-start gap-3 w-[200px]">
            <a href="#"><i class="bi bi-github text-[25px] text-blue-900"></i></a>
            <a href="#"><i class="bi bi-facebook text-[25px] text-blue-900"></i></a>
            <a href="#"><i class="bi bi-envelope-at-fill text-[25px] text-blue-900"></i></a>
            <a href="#"><i class="bi bi-linkedin text-[25px] text-blue-900"></i></a>
        </div> -->
    </div>

    <div class=" comment-sec w-full p-4 flex flex-col justify-center items-center">
        <form action="{{ route('comment.store') }}" method="post" class="z-20 my-bgs rounded-box w-full flex flex-col gap-4 p-4 max-w-[60%]">
            <h1 class="font-bold text-2xl grad-text w-full text-center uppercase">Page Review</h1>
            @csrf
            <label for="commenter" class="blocks font-bold">Email : <input type="text" name="email" id="commenter" class="rounded-lg ring-1 ring-slate-300 px-2 w-full max-w-[300px] p-1 bg-white text-black"></label>
            @error('email')
            <span class="text-red-600 -translate-y-3">{{$message}}</span>
            @enderror
            <textarea name="comment" id="" rows="4" style="resize:none;" class="w-full bg-white p-2 rounded-lg ring-1 ring-slate-300 "></textarea>
            @error('comment')
            <span class="text-red-600 -translate-y-3">{{$message}}</span>
            @enderror
            <div class="flex gap-5 font-bold">
                <label for="add_ratings" class="w-fit"> Add Ratings :  <input class="bg-white w-5" type="checkbox" name="add_rating" id="add_rating"></label>
                <div class="rating hidden">
                    <input type="radio" name="rating" value="1" class="mask mask-star-2 bg-orange-400" />
                    <input type="radio" name="rating" value="2" class="mask mask-star-2 bg-orange-400"  />
                    <input type="radio" name="rating" value="3" class="mask mask-star-2 bg-orange-400" />
                    <input type="radio" name="rating" value="4" class="mask mask-star-2 bg-orange-400" />
                    <input type="radio" name="rating" value="5" class="mask mask-star-2 bg-orange-400" checked/>
                </div>
                <button type="submit" class="btn bg-blue-900 hover:bg-blue-700 text-white border-0 w-[150px] self-end ml-auto">
                    <i class="bi bi-chat-left-text-fill"></i> Review
                </button>
            </div>
        </form>
    </div>

    <hr class="my-1 h-0.5 border-t-0 bg-slate-700 opacity-100 dark:opacity-50" />
    <div class="comments flex flex-col gap-3 overflow-y-scroll h-[40vh] p-3 rounded-box text-black bg-white mt-4">
        @if(session()->has('comment_messages'))
            <span class="p-2 w-full h- text-center my-bgs bg-green-300">
                {{ session()->get('comment_messages')}}
            </span>
        @endif
        @foreach ($all_comments as $single_comment)
            <div class="comm rounded-lg min-w-[200px] h-fit flex flex-col gap-0 ring-1 ring-slate-300 p-2 relative">
                <div class="w-full flex flex-end gap-2 absolute right-6">
                    <button type="button" class="confirm-del ml-auto w-[10px] bi bi-trash-fill text-red-700 block" value="{{ $single_comment->id }}"></button>
                </div>
                <h1 class="block text-left p-1 font-bold ">{{ $single_comment->email }}
                    @if(!$single_comment->rating == 0)
                    <span class=" ml-3 -translate-y-2">
                        @for($x = 1; $x <= 5; $x++)
                            @if ($x <= $single_comment->rating)
                                <input type="radio" name="rating" value="{{ $x }}" class="mask mask-star-2 bg-orange-400" checked disabled/>
                            @endif
                        @endfor
                    </span>
                    @endif
                </h1>
                <span class="block text-left p-1 text-[10px] -translate-y-2">{{ $single_comment->updated_at }}</span>
                <p class="block text-left  p-1" >
                    {{ $single_comment->comment }}
                    {{-- <!-- <form action="{{ route('comment.update', $id = $single_comment->id) }}" method="post"> --}}
                        {{-- @csrf
                        @method('patch') --}}
                        {{-- <button type="" class="update-save"><i class="bi bi-pencil-fill"></i>Update</button>
                    </form> --> --}}
                </p>
            </div>
        @endforeach
    </div>
    {{-- modal --}}
    <div class="z-30 absolute w-full max-w-[500px] h-fit p-3 modal-del hidden my-bgs rounded-box">
        <form action="{{ route('comment.destroy') }}" method="post" class="w-full h-full flex flex-col gap-4">
            <h1 class="text-bold tex-center text-2xl w-full ">Confirm Delete</h1>
            @csrf
            @method('delete')
            <input type="hidden" name="id" value="" id="sure-del">
            <div class="flex gap-7 justify-center">
                <button type="submit" class="btn bg-red-900 hover:bg-red-800 border-o sure-del"><i class="bi bi-trash-fill text-white"> Confirm</i></button>
                <span class="btn cancel-del">Cancel</span>
            </div>
        </form>
    </div>
    
</div>
@endsection