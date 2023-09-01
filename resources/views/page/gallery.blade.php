@extends('layout.main_layout')

@section('gallery')
       <div class="w-full h-fit min-h-screen px-[3%] text-black pt-[100px] flex flex-col gap-3">
              <div class="flex justify-center gap-10 uppercase">
                     <h2 class="text-lg font-bold history-btn hdr">Products</h2>
                     <h2 class="text-lg font-bold map-btn hdr">Delicacies</h2>
                     <h2 class="text-lg font-bold facts-btn hdr">Festivals</h2>
              </div>
              <hr class="my-12 h-0.5 border-t-0 bg-slate-700 opacity-100 dark:opacity-50 my-3" />
              <div class="flex gap-4 flex-wrap px-[10%]">
                      {{-- producs --}}
                     <div class="history w-full h-full">
                            <div class="img-gal flex gap-5 ">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11sicogonisland2.jpg') }}" alt="">
                                   <img src="{{ asset('assets/img/sicogonisland.jpg') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                            </div>
                     </div>
                      {{-- Delicacies --}}
                     <div class="map w-full h-full">
                            <div class="img-gal flex gap-5 ">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                            </div>
                     </div>
                     {{-- Festivals --}}
                     <div class="facts w-full h-full flex flex-col gap-5">
                            <div class="img-gal flex gap-5 ">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                                   <img src="{{ asset('assets/img/11miagao.png') }}" alt="">
                            </div>
                     </div>
                     {{-- <div class="gall-info w-[30%] h-full">
                            some info
                     </div> --}}
              </div>

       </div>
@endsection