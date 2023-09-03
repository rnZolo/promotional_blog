@extends('layout.main_layout')

@section('where')
       <div class="w-full h-fit min-h-screen  px-[3%] text-black pt-[100px] flex flex-wrap gap-3">
              <div class="z-20 w-full h-fit flex flex-wrap gap-10">
{{-- historical landmarks --}}
                     <div class="flex w-full h-[330px] relative items-center">
                            <div class="h-full max-w-[200px] grid flex-grow h-32 card my-bgs bg-blue-800 rounded-box place-items-center px-4 ">
                                <h1 class="grad-text text-xl text-left p-4 uppercase">Historical Landmarks</h1>   
                            </div> 
                            <div class="divider lg:divider-horizontal"></div> 
                            <div class="my-bgs w-full rounded-box m-0 h-full overflow-hidden">
                                   <div class="swiperW mySwiper h-full w-full m-0 p-5" >
                                          <div class="swiper-wrapper">
                                                 @foreach($historicals as $historical => $place)
                                                 <div class="swiper-slide my-bgs overflow-hidden   rounded-box">
                                                        <div class="card card-side w-full min-h-[300px]">
                                                               <figure class="h-full w-full max-w-[50%] ">
                                                                      <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" 
                                                                      src= "{{ asset('assets/img/'.$place['image_path']) }}" alt="{{ $place['title']}}"/>
                                                               </figure>
                                                               <div class="card-body p-2 text-left h-full w-full">
                                                                      <h2 class="text-base font-bold ">{{ $place['title'] }}</h2>
                                                                             <ul class="text-[12px]">
                                                                                    <li><span class="font-bold">{{ $place['caption'] }}</span></li>
                                                                                    <li><span class="font-bold">Address: </span>{{ $place['location'] }}</li>
                                                                                    <li><span class="font-bold">{{ $place['open_schedule'] }}</span></li>
                                                                             </ul>
                                                                      <div class="card-actions justify-end">
                                                                             {{-- <button class="btn btn-primary">heart</button> --}}
                                                                      </div>
                                                               </div> 
                                                        </div>
                                                 </div>
                                                 @endforeach
                                          </div>
                                          <div class="swiper-pagination translate-y-2"></div>
                                   </div>
                            </div>
                     </div>
{{-- island beaches --}}
                     <div class="flex w-full h-[330px] relative items-center">
                            <div class="h-full  max-w-[200px] grid flex-grow h-32 card my-bgs bg-blue-800 rounded-box place-items-center px-4 ">
                                <h1 class="grad-text text-xl text-left p-4 uppercase">Beach and Island Hopping</h1>   
                            </div> 
                            <div class="divider lg:divider-horizontal"></div> 
                            <div class="my-bgs w-full rounded-box m-0 h-full overflow-hidden">
                                   <div class="swiperW mySwiper h-full w-full m-0 p-5" >
                                          <div class="swiper-wrapper">
                                                 @foreach($islands as $islands => $place)
                                                 <div class="swiper-slide my-bgs overflow-hidden   rounded-box">
                                                        <div class="card card-side w-full min-h-[300px]">
                                                               <figure class="h-full w-full max-w-[50%] ">
                                                                      <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" 
                                                                      src= "{{ asset('assets/img/'.$place['image_path']) }}" alt="{{ $place['title']}}"/>
                                                               </figure>
                                                               <div class="card-body p-2 text-left h-full w-full">
                                                                      <h2 class="text-base font-bold ">{{ $place['title'] }}</h2>
                                                                             <ul class="text-[12px]">
                                                                                    <li><span class="font-bold">{{ $place['caption'] }}</span></li>
                                                                                    <li><span class="font-bold">Address: </span>{{ $place['location'] }}</li>
                                                                                    <li><span class="font-bold">{{ $place['open_schedule'] }}</span></li>
                                                                             </ul>
                                                                      <div class="card-actions justify-end">
                                                                             {{-- <button class="btn btn-primary">heart</button> --}}
                                                                      </div>
                                                               </div> 
                                                        </div>
                                                 </div>
                                                 @endforeach
                                          </div>
                                          <div class="swiper-pagination translate-y-2"></div>
                                   </div>
                            </div>
                            
                     </div>
{{-- nature camp --}}
                     <div class="flex w-full h-[330px] relative items-center">
                            <div class="h-full  max-w-[200px] grid flex-grow h-32 card my-bgs bg-blue-800 rounded-box place-items-center px-4 ">
                                <h1 class="grad-text text-xl text-left p-4 uppercase">Nature and Camping</h1>   
                            </div> 
                            <div class="divider lg:divider-horizontal"></div> 
                            <div class="my-bgs w-full rounded-box m-0 h-full overflow-hidden">
                                   <div class="swiperW mySwiper h-full w-full m-0 p-5" >
                                          <div class="swiper-wrapper">
                                                 @foreach($nature as $each_nature => $place)
                                                 <div class="swiper-slide my-bgs overflow-hidden   rounded-box">
                                                        <div class="card card-side w-full min-h-[300px]">
                                                               <figure class="h-full w-full max-w-[50%] ">
                                                                      <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" 
                                                                      src= "{{ asset('assets/img/'.$place['image_path']) }}" alt="{{ $place['title']}}"/>
                                                               </figure>
                                                               <div class="card-body p-2 text-left h-full w-full">
                                                                      <h2 class="text-base font-bold ">{{ $place['title'] }}</h2>
                                                                             <ul class="text-[12px]">
                                                                                    <li><span class="font-bold">{{ $place['caption'] }}</span></li>
                                                                                    <li><span class="font-bold">Address: </span>{{ $place['location'] }}</li>
                                                                                    <li><span class="font-bold">{{ $place['open_schedule'] }}</span></li>
                                                                             </ul>
                                                                      <div class="card-actions justify-end">
                                                                             {{-- <button class="btn btn-primary">heart</button> --}}
                                                                      </div>
                                                               </div> 
                                                        </div>
                                                 </div>
                                                 @endforeach
                                          </div>
                                          <div class="swiper-pagination translate-y-2"></div>
                                   </div>
                            </div>
                     </div>
{{-- local dine in--}}
                     <div class="flex w-full h-[330px] relative items-center">
                            <div class="h-full  max-w-[200px] grid flex-grow h-32 card my-bgs bg-blue-800 rounded-box place-items-center px-4 ">
                                <h1 class="grad-text text-xl text-left p-4 uppercase">Local Restaurants</h1>   
                            </div> 
                            <div class="divider lg:divider-horizontal"></div> 
                            <div class="my-bgs w-full rounded-box m-0 h-full overflow-hidden">
                                   <div class="swiperW mySwiper h-full w-full m-0 p-5" >
                                          <div class="swiper-wrapper">
                                                 @foreach($dine_ins as $dine_in => $place)
                                                 <div class="swiper-slide my-bgs overflow-hidden   rounded-box">
                                                        <div class="card card-side w-full min-h-[300px]">
                                                               <figure class="h-full w-full max-w-[50%] ">
                                                                      <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" 
                                                                      src= "{{ asset('assets/img/'.$place['image_path']) }}" alt="{{ $place['title']}}"/>
                                                               </figure>
                                                               <div class="card-body p-2 text-left h-full w-full">
                                                                      <h2 class="text-base font-bold ">{{ $place['title'] }}</h2>
                                                                             <ul class="text-[12px]">
                                                                                    <li><span class="font-bold">{{ $place['caption'] }}</span></li>
                                                                                    <li><span class="font-bold">Address: </span>{{ $place['location'] }}</li>
                                                                                    <li><span class="font-bold">{{ $place['open_schedule'] }}</span></li>
                                                                             </ul>
                                                                      <div class="card-actions justify-end">
                                                                             {{-- <button class="btn btn-primary">heart</button> --}}
                                                                      </div>
                                                               </div> 
                                                        </div>
                                                 </div>
                                                 @endforeach
                                          </div>
                                          <div class="swiper-pagination translate-y-2"></div>
                                   </div>
                            </div>
                     </div>
              </div> {{--end--}}
       </div>
@endsection