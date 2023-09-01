@extends('layout.main_layout')

@section('welcome')
       <div class="w-full h-full mb-6 ">
         {{-- image slides --}}
         <div class="w-full h-[89vh] relative">
            <swiper-container class="mySwiper"
               thumbs-swiper=".mySwiper2" space-between="0" navigation="false" autoplay="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
               <swiper-slide>
               <img src="{{ asset('assets/img/11molo.jpg') }}" />
               </swiper-slide>
               <swiper-slide>
               {{-- <img src="{{ asset('assets/img/bantigue.png') }}" /> --}}
               <img src="{{ asset('assets/img/dinagyang2.png') }}" />
               </swiper-slide>
               <swiper-slide>
               <img src="{{ asset('assets/img/11isladegigantes.png') }}" />
               </swiper-slide>
               <swiper-slide>
               <img src="{{ asset('assets/img/11garin2.jpg') }}" />
               </swiper-slide>
               <swiper-slide>
               <img src="{{ asset('assets/img/11molo-mansion-s-exterior.jpg') }}" />
               </swiper-slide>
               <swiper-slide>
               <img src="{{ asset('assets/img/11miagao.png') }}" />
               </swiper-slide>
               <swiper-slide>
               <img src="{{ asset('assets/img/sicogonisland.jpg') }}" />
               </swiper-slide>
               <swiper-slide>
               <img class="object-cover" src="{{ asset('assets/img/11nasadjanfalls.jpg') }}" />
               </swiper-slide>
               <swiper-slide>
               <img src="{{ asset('assets/img/11calle-real1.jpg') }}" />
               </swiper-slide>
            </swiper-container>
            <div class="absolute z-10 custom-shape-divider-bottom-1693540907">
               <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                   <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill"></path>
               </svg>
           </div>
         </div>

         <div class=" px-[5%]  text-white ">
            <h1 class="text-[3vw] font-bold uppercase grad-text">“ It has to be Iloilo ”</h1>
            <hr class="my-12 h-0.5 border-t-0 bg-white opacity-100 dark:opacity-50 my-3" />
            <h2 class="text-lg font-bold"> Exploring Enchanting Iloilo: A Journey Through History and Nature</h2>
            <p class="text-center my-3">Welcome to the captivating province of Iloilo, nestled in the heart of the Philippines. This enchanting destination offers a perfect blend of rich history, vibrant culture, and breathtaking natural beauty. Join us on a virtual tour through the diverse attractions, mouthwatering cuisine, and warm hospitality that make Iloilo a must-visit for every traveler.</p>
            <div class="flex gap-10 flex-wrap my-10">
            <div class="flex gap-5 mb-10 rounded-b-lg">
               {{-- accordion --}}
               <div class="flex flex-col w-[50%] gap-4">
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" checked="checked" /> 
                     <div class="collapse-title text-meduim font-base uppercase hdr">
                        Cultural Treasures
                  </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3  text-white">
                           Discover the province's deep-rooted history as you explore its historic sites and heritage spots. Wander through the cobblestone streets of Calle Real, the oldest street in the Philippines, lined with beautifully preserved colonial buildings. Immerse yourself in the past at Molo Mansion and Nelly's Garden, where Spanish architecture and antique collections tell stories of a bygone era.
                        </p> 
                     </div>
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" /> 
                     <div class="collapse-title text-meduim font-base uppercase hdr">
                        Majestic Churches
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3  text-white">
                           Iloilo boasts impressive churches that are not only architectural marvels but also sacred landmarks. The Miag-ao Church, a UNESCO World Heritage Site, showcases stunning Baroque-Romanesque design, while the Jaro Cathedral is a testament to the province's strong Catholic heritage.
                        </p> 
                     </div>
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" checked="checked" /> 
                     <div class="collapse-title text-meduim font-base uppercase hdr">
                        Pristine Beaches and Islands
                     </div>
                     <div class="collapse-content"> 
                           <p class="text-sm text-black p-3 text-white">
                           Iloilo's coastline is dotted with idyllic islands and beaches that offer a retreat into paradise. Take a boat ride to Guimaras Island, famous for its sweet mangoes and serene beaches. Explore the untouched beauty of Islas de Gigantes, where crystal-clear waters and stunning rock formations await.        
                           </p>  
                     </div>        
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" /> 
                     <div class="collapse-title text-meduim font-base uppercase hdr">
                        Vibrant Festivals
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3  text-white">
                           Experience the province's vibrant festivals that showcase Ilonggo culture and traditions. The Dinagyang Festival, a colorful celebration of Santo Niño, features street dancing, music, and vibrant costumes. Witness the passionate devotion of locals as they pay homage to their patron saints.
                        </p> 
                     </div>        
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" /> 
                     <div class="collapse-title text-meduim font-base uppercase hdr">
                        Eco-Adventure Escapes
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3  text-white">
                        Nature enthusiasts will find plenty to explore in Iloilo's lush landscapes. Trek through the scenic trails of Bucari in Leon and marvel at the awe-inspiring beauty of waterfalls and mountain vistas. For a unique experience, visit the Garin Farm in San Joaquin, where faith and ecotourism intertwine seamlessly.
                        </p> 
                     </div>
                  </div>
                  <div class="collapse collapse-plus my-bgs">
                     <input type="radio" name="my-accordion-3" checked="checked" /> 
                     <div class="collapse-title text-meduim font-base uppercase hdr">
                        Warm Ilonggo Hospitality
                     </div>
                     <div class="collapse-content"> 
                        <p class="text-sm text-black p-3  text-white">
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
         {{-- {{  end flex }} --}}








      </div>
       <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
@endsection