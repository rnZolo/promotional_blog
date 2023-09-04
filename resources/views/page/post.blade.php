@extends('layout.main_layout')

@section('content')
        <div class="w-[90%]  mx-auto text-black relative z-30 p-[10%]">
            <div class="modal-create-post z-30">
                <form action="" method="post" class="z-20 my-bgs rounded-box w-full flex flex-col gap-4 p-4 max-w-[60%] z-30" enctype="multipart/form-data">
                    <h1 class="font-bold text-2xl grad-text w-full text-center uppercase"></h1>
                    @csrf
                    <label for="caption" class="blocks font-bold">Caption : <input type="text" name="caption" id="caption" class="rounded-lg ring-1 ring-slate-300 px-2 w-full max-w-[300px] p-1 bg-white text-black"></label>
                    @error('caption')
                    <span class="text-red-600 -translate-y-3">{{$message}}</span>
                    @enderror
                        <label for="tags">
                            <div class="tags-input">
                                <ul id="tags"></ul>
                                <input type="text" id="input-tag" 
                                    placeholder="Enter tag name not working yet" />
                            </div>
                            <span class="btn w-fit h-fit add-tag">Add</span>
                        </label>
                    <textarea name="description" id="" rows="4" style="resize:none;" class="w-full bg-white p-2 rounded-lg ring-1 ring-slate-300 "></textarea>
                    @error('description')
                        <span class="text-red-600 -translate-y-3">{{$message}}</span>
                    @enderror
                    <label for="images">Upload image: s<input type="file" name="images[]" id="images" multiple></label>
                        {{-- <button type="submit" class="btn bg-blue-900 hover:bg-blue-700 text-white border-0 w-[150px] self-end ml-auto">
                            <i class="bi bi-chat-left-text-fill"></i> Posts
                        </button> --}}
                    </div>
                </form>
            </div>
            <div class="my-post w-full min-h-screen">
                list of recent post
            </div>
        </div>

@endsection