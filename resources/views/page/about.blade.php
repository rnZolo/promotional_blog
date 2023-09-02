@extends('layout.main_layout')

@section('about')
       <div class="z-20 w-full h-fit min-h-screen px-[3%] text-black pt-[100px] flex gap-3 relative">
{{-- sidebar --}}
              <div class="min-h-full min-w-[250px] p-3 my-bgs border-slate-400  rounded-lg">
                     <h1 class="text-xl uppercase font-bold p-1 " >Iloilo</h1>
                     <hr class="my-1 h-0.5 border-t-0 bg-slate-700 opacity-100 dark:opacity-50" />
                     <div class="flex flex-col w-[210px] ">
                            @foreach($sideInfo1 as $title => $body)
                                   <p class="text-sm p-1 px-3"><span class="font-bold capitalize">{{ $title }}: </span>{{ $body }}</p>
                            @endforeach
                            <div class="join join-vertical w-ful flex flex-col gap-2">
                                   <hr class="my-1 h-0.5 border-t-0 bg-slate-300 opacity-100 dark:opacity-50 my-3" />
                                   <details class="collapse collapse-arrow ring-slate-500 ring-1 my-1">
                                          <summary class="collapse-title text-sm font-medium">
                                                 <p class="text-sm"><span class="font-bold">More ...</span></p>
                                          </summary>
                                          <div class="collapse-content flex flex-col gap-1 "> 
                                                 @foreach($sideInfo2 as $title => $body)
                                                        <p class="text-sm"><span class="font-bold capitalize">{{ $title }}: <br></span>{{ $body }}</p>  
                                                 @endforeach
                                          </div>
                                   </details>
                                   <details class="collapse collapse-arrow ring-slate-500 ring-1 ">
                                          <summary class="collapse-title text-sm font-medium">
                                                 <p class="text-sm"><span class="font-bold">Festivals</span></p>
                                          </summary>
                                          <div class="collapse-content flex flex-col gap-1"> 
                                                 @foreach($sideFestivals as $title => $body)
                                                        <p class="text-sm"><span class="font-bold">{{ $title }}<br></span>{{ $body }}</p>  
                                                 @endforeach
                                          </div>
                                   </details>
                                   <details class="collapse collapse-arrow ring-slate-500 ring-1 my-1">
                                          <summary class="collapse-title text-sm  font-medium">
                                                 <p class="text-sm"><span class="font-bold">Municipalities</span></p>
                                          </summary>
                                          <div class="collapse-content flex flex-col gap-1"> 
                                                 @foreach($sideZipCodes as $title => $body)
                                                        <p class="text-sm"><span class="font-bold">{{ $title }}</span> - {{ $body }}</p>  
                                                 @endforeach
                                          </div>
                                   </details>
                            </div>
                     </div>
              </div>
{{-- history map faqs --}}
              <div class="w-full h-full min-h-[90vh] p-3 bg-white my-bgs border-slate-400  rounded-lg">
                     <div class="flex flex-start gap-5">
                            <h2 class="active-nav text-lg font-bold history-btn p-2">History</h2>
                            <h2 class="text-lg font-bold map-btn p-2">Map</h2>
                            <h2 class="text-lg font-bold facts-btn p-2">Faqs</h2>
                     </div>
                     <hr class="mb-3 h-0.5 border-t-0 bg-slate-700 opacity-100 dark:opacity-50  " />
                     <div class="history w-full h-full px-12">
                            <h1 class="text-3xl grad-text ">TimeLine</h1>
                            <ul class="steps steps-vertical">
                                   @foreach($eventsTimeline as $title => $body)
                                          <li data-content="" class="step text-base flex p-0">
                                                 {{ $body }} 
                                          </li>                                   
                                   @endforeach
                            </ul>
                     </div>
                     <div class="map w-full h-full px-12">
{{-- map --}}
                            <div class="w-full flex flex-col justify-center gap-6">
                            <h1 class="text-3xl grad-text">Maps</h1>
                                   <div class="flex gap-6">
                                          <div class="w-fit flex flex-col gap-4 h-fit p-3 district-div">
                                                 <button class="btn hover:bg-blue-900 my-bgs district w-[230px]" value="1">District 1</button>
                                                 <button class="btn hover:bg-blue-900 my-bgs district w-[230px]" value="2">District 2</button>
                                                 <button class="btn hover:bg-blue-900 my-bgs district w-[230px]" value="3">District 3</button>
                                                 <button class="btn hover:bg-blue-900 my-bgs district w-[230px]" value="4">District 4</button>
                                                 <button class="btn hover:bg-blue-900 my-bgs district w-[230px]" value="5">District 5</button>
                                          </div>
                                          <div class="flex flex-col gap-2">
                                                 <ul class="under-district w-[150px] h-full border-2 p-3">
                                                 </ul>
                                          </div>
                                          <div class="w-full">
                                                 <img src="{{ asset('assets/img/districts/District_1.png') }}" alt="iloilo" id="districtimg" class="min-h-[300px]">
                                          </div>
                                   </div>
                                   <div class="w-full p-10">
                                          <iframe class="w-full h-[400px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125441.89780437473!2d122.46596845615959!3d10.729909310891514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee56fe538d781%3A0xe8250cd6bc30a488!2sIloilo%20City%2C%20Iloilo!5e0!3m2!1sen!2sph!4v1693658966016!5m2!1sen!2sph" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                   </div>
                            </div>
                     </div>
                     {{-- faqs --}}
                     <div class="facts w-full h-full flex flex-col gap-5 px-12">
                            <h1 class="text-3xl grad-text ">Frequently Ask Questions</h1>
                            <div class="w-full flex flex-wrap gap-3">
                                   @foreach($faqs as $title => $body)
                                          <details class="max-w-[49%] h-fit collapse collapse-plus my-bgs text-base">
                                                 <summary class="collapse-title font-medium ">
                                                        {{ $title }}
                                                 </summary>
                                                 <div class="collapse-content "> 
                                                 <p>
                                                        {{ $body }}
                                                 </p>
                                                 </div>
                                          </details>                                         
                                   @endforeach
                            </div> 
                     </div>        
              </div>
       </div>
@endsection