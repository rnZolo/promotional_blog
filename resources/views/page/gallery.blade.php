@extends('layout.main_layout')

@section('gallery')
       <div class="z-20 w-full h-full min-h-screen px-[3%] text-black pt-[100px] flex flex-col gap-3">
              <div class="z-20 flex justify-center gap-10 uppercase">
                     <h2 class="text-lg font-bold item1-btn nbtn hdr grad-text">Products</h2>
                     <h2 class="text-lg font-bold item2-btn nbtn hdr">Delicacies</h2>
                     <h2 class="text-lg font-bold item3-btn nbtn hdr">Festivals</h2>
              </div>
              <hr class="z-20 my-12 h-0.5 border-t-0 bg-white opacity-100 dark:opacity-50 my-3" />
              <div class=" z-20 flex gap-4 flex-wrap px-[5%]">
                      {{-- Products --}}
                     <div class="item1 w-full h-full flex gap-3">
                            <div class="img-gal h-fit flex gap-5 flex flex-wrap items-center">
                                   @foreach($products as $product => $contents)
                                          <figure>
                                                 <img src="{{ asset('assets/img/'.$contents['image_path']) }}" 
                                                 alt="{{$contents['title']}}" class="my-bgs">
                                                 <h1 class="hidden hidden-title">{{$contents['title']}}</h1>
                                                 <p class="hidden hidden-title">{{$contents['body']}}</p>
                                          </figure>
                                   @endforeach
                            </div>
                            <div class="pic-div hidden p-3 relative my-bgs rounded-box" style="">
                                   <span class="absolute top-3 right-3 hide-pic-div"><i class="bi bi-x-square-fill text-xl text-blue-900"></i></span>
                                   <figure class="w-full h-full flex flex-col flex-start">
                                          <img src="" alt="" class="on-display w-full h-full ">
                                          <div class="p-3">
                                                 <h1 class="img-title font-bold text-xl block text-black"></h1>
                                                 <p class="img-content text-sm p-2 w-full h-fit text-black indent-5"></p>
                                          </div>
                                   </figure>
                            </div>
                     </div>
                      {{-- Delicacies --}}
                     <div style="display:none;"  class="item2 w-full h-full flex gap-3">
                            <div class="img-gal h-fit flex gap-5 flex flex-wrap items-center">
                                   @foreach($delicacies as $delicacy => $contents)
                                          <figure>
                                                 <img src="{{ asset('assets/img/'.$contents['image_path']) }}" 
                                                 alt="{{$contents['title']}}" class="my-bgs">
                                                 <h1 class="hidden hidden-title">{{$contents['title']}}</h1>
                                                 <p class="hidden hidden-title">{{$contents['body']}}</p>
                                          </figure>
                                   @endforeach
                            </div>
                            <div class="pic-div hidden p-3 relative my-bgs rounded-box" style="">
                                   <span class="absolute top-3 right-3 hide-pic-div"><i class="bi bi-x-square-fill text-xl text-blue-900"></i></span>
                                   <figure class="w-full h-full flex flex-col flex-start">
                                          <img src="" alt="" class="on-display w-full h-full ">
                                          <div class="p-3">
                                                 <h1 class="img-title font-bold text-xl block text-black"></h1>
                                                 <p class="img-content text-sm p-2 w-full h-fit text-black indent-5"></p>
                                          </div>
                                   </figure>
                            </div>
                     </div>
                     {{-- Festivals --}}
                     <div style="display:none;" class="item3 w-full h-full flex gap-3">
                            <div class="img-gal h-fit flex gap-5 flex flex-wrap items-center">
                                   @foreach($festivals as $festival => $contents)
                                          <figure>
                                                 <img src="{{ asset('assets/img/'.$contents['image_path']) }}" 
                                                 alt="{{$contents['title']}}" class="my-bgs">
                                                 <h1 class="hidden hidden-title">{{$contents['title']}}</h1>
                                                 <p class="hidden hidden-title">{{$contents['body']}}</p>
                                          </figure>
                                   @endforeach
                            </div>
                            <div class="pic-div hidden p-3 relative my-bgs rounded-box" style="">
                                   <span class="absolute top-3 right-3 hide-pic-div"><i class="bi bi-x-square-fill text-xl text-blue-900"></i></span>
                                   <figure class="w-full h-full flex flex-col flex-start">
                                          <img src="" alt="" class="on-display w-full h-full ">
                                          <div class="p-3">
                                                 <h1 class="img-title font-bold text-xl block text-black"></h1>
                                                 <p class="img-content text-sm p-2 w-full h-fit text-black indent-5"></p>
                                          </div>
                                   </figure>
                            </div>
                     </div>
                     {{-- <div class="gall-info w-[30%] h-full">
                            some info
                     </div> --}}
              </div>

       </div>
@endsection