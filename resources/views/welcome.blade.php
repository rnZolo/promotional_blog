@extends('layout.main_layout')

@section('welcome')
       <div class="w-full h-full mb-6 ">
         {{-- image slides --}}
         <div class="w-full h-[50vh] relative flex gap-6 dynamic-bg flex-start items-center bg-white">
         <div class="absolute flex flex-col justify-center tagline ">
                  <h1 class="z-30 font-bold uppercase grad-text flex flex-col gap-0">
                     <span class="text-3xl">It has to be</span>
                     <a href="#welcome" class="text-9xl">Iloilo</a>
                  </h1>
               </div>
               <swiper-container class="mySwiper mask-splash z-20 min-h-[500px] overflow-visible" loop="true" space-between="0" autoplay="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                  <swiper-slide class="">
                  <img class="  " src="{{ asset('assets/img/historical_landmarks/11molo.jpg') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " src="{{ asset('assets/img/festival/dinagyang2.png') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " src="{{ asset('assets/img/beach_islands/11isladegigantes.png') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " src="{{ asset('assets/img/nature_camps/11garin2.jpg') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " src="{{ asset('assets/img/historical_landmarks/11molo-mansion-s-exterior.jpg') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " src="{{ asset('assets/img/historical_landmarks/11miagao.png') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " src="{{ asset('assets/img/beach_islands/sicogonisland.jpg') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " class="object-cover" src="{{ asset('assets/img/nature_camps/11nasadjanfalls.jpg') }}" />
                  </swiper-slide>
                  <swiper-slide>
                  <img class="  " src="{{ asset('assets/img/historical_landmarks/11calle-real1.jpg') }}" />
                  </swiper-slide>
               </swiper-container>
         </div>

         <div class="px-[5%] text-white relative my-bg pt-[350px]">
         <div class="custom-shape-divider-top-1693638366" >
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
               <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
         </div>
            <h2 class="text-2xl font-bold grad-text" id='welcome'> Exploring Enchanting Iloilo: A Journey Through History and Nature</h2>
            <p class="text-center my-3">Welcome to the captivating province of Iloilo, nestled in the heart of the Philippines. This enchanting destination offers a perfect blend of rich history, vibrant culture, and breathtaking natural beauty. Join us on a virtual tour through the diverse attractions, mouthwatering cuisine, and warm hospitality that make Iloilo a must-visit for every traveler.</p>
            <hr class="my-12 h-0.5 border-t-0 bg-white opacity-100 dark:opacity-50 my-3" />
            <div class="flex gap-10 flex-wrap my-6">
            <div class="flex gap-5 mb-10 rounded-b-lg">
               {{-- accordion --}}
               <div class="flex flex-col w-[50%] gap-4">
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" checked="checked" /> 
                     <div class="collapse-title text-meduim font-bold uppercase grad-text">
                        Cultural Treasures
                  </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3">
                           Discover the province's deep-rooted history as you explore its historic sites and heritage spots. Wander through the cobblestone streets of Calle Real, the oldest street in the Philippines, lined with beautifully preserved colonial buildings. Immerse yourself in the past at Molo Mansion and Nelly's Garden, where Spanish architecture and antique collections tell stories of a bygone era.
                        </p> 
                     </div>
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" /> 
                     <div class="collapse-title text-meduim font-bold uppercase  grad-text">
                        Majestic Churches
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3">
                           Iloilo boasts impressive churches that are not only architectural marvels but also sacred landmarks. The Miag-ao Church, a UNESCO World Heritage Site, showcases stunning Baroque-Romanesque design, while the Jaro Cathedral is a testament to the province's strong Catholic heritage.
                        </p> 
                     </div>
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3"/> 
                     <div class="collapse-title text-meduim font-bold uppercase grad-text ">
                        Pristine Beaches and Islands
                     </div>
                     <div class="collapse-content"> 
                           <p class="text-sm text-black p-3">
                           Iloilo's coastline is dotted with idyllic islands and beaches that offer a retreat into paradise. Take a boat ride to Guimaras Island, famous for its sweet mangoes and serene beaches. Explore the untouched beauty of Islas de Gigantes, where crystal-clear waters and stunning rock formations await.        
                           </p>  
                     </div>        
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" /> 
                     <div class="collapse-title text-meduim font-bold uppercase grad-text ">
                        Vibrant Festivals
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3">
                           Experience the province's vibrant festivals that showcase Ilonggo culture and traditions. The Dinagyang Festival, a colorful celebration of Santo Niño, features street dancing, music, and vibrant costumes. Witness the passionate devotion of locals as they pay homage to their patron saints.
                        </p> 
                     </div>        
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" /> 
                     <div class="collapse-title text-meduim font-bold uppercase grad-text ">
                        Eco-Adventure Escapes
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3 ">
                        Nature enthusiasts will find plenty to explore in Iloilo's lush landscapes. Trek through the scenic trails of Bucari in Leon and marvel at the awe-inspiring beauty of waterfalls and mountain vistas. For a unique experience, visit the Garin Farm in San Joaquin, where faith and ecotourism intertwine seamlessly.
                        </p> 
                     </div>
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" /> 
                     <div class="collapse-title text-meduim font-bold uppercase grad-text ">
                        Warm Ilonggo Hospitality
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3  ">
                           One of the province's greatest treasures is the warmth and friendliness of its people. Experience the genuine hospitality of Ilonggos as you interact with locals, join community activities, and learn about their way of life.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="flex flex-col w-full">
                  {{-- video --}}
                  <div class="w-full h-full">
                     <iframe class="w-full h-full" src="https://www.youtube.com/embed/WimJ-kQ2ST8?si=bozabObU0ubsuDLW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                  </div>
                  <p class="m-6 text-center">Embark on an unforgettable journey as you explore Iloilo's historical landmarks, indulge in its culinary delights, bask in its natural wonders, and immerse yourself in its vibrant culture. Whether you're a history buff, a foodie, a beach lover, or an adventure seeker, Iloilo promises an experience that will leave you enchanted and longing for more.</p>
               </div>
            </div>
         
         </div> 
      </div>
       <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
@endsection