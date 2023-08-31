@extends('layout.main_layout')

@section('about')
       <div class="w-full h-fit min-h-screen  px-[3%] text-black pt-[100px] flex gap-3">
              <div class="w-[15%] h-full p-3 ">
                     <h1 class="text-xl uppercase font-bold" >Iloilo</h1>
                     <hr class="my-12 h-0.5 border-t-0 bg-slate-700 opacity-100 dark:opacity-50 my-3" />
                     <div class="w- flex flex-col ">
                            <p class="text-sm p-1 px-3"><span class="font-bold">Zip code: </span>5000</p>
                            <p class="text-sm p-1 px-3"><span class="font-bold">Area Code: </span>33</p>
                            <p class="text-sm p-1 px-3"><span class="font-bold block">Land Area: </span><span class=" block ">78.34 square kilometers</span></p>
                            <p class="text-sm p-1 px-3"><span class="font-bold block">Population: </span><span class=" block ">461,841 (EP, CY 2016)</span></p>
                            <div class="join join-vertical w-full">
                                   <hr class="my-1 h-0.5 border-t-0 bg-slate-300 opacity-100 dark:opacity-50 my-3" />
                                   <details class="collapse collapse-arrow ">
                                     <summary class="collapse-title text-sm font-medium">
                                          <p class="text-sm"><span class="font-bold">More...</span></p>
                                     </summary>
                                     <div class="collapse-content flex flex-col gap-1"> 
                                          <p class="text-sm"><span class="font-bold">Population Density: <br></span> 5,836 persons per square kilometer</p>  
                                          <p class="text-sm"><span class="font-bold">Number of Households: <br></span> 90,681 (2010 Census)</p>     
                                          <p class="text-sm"><span class="font-bold">Population Growth: <br></span> 1.02% (PSA: 2015 Census)</p>     
                                          <p class="text-sm"><span class="font-bold">Coastline Area: <br></span> 21.3 kilometers</p>     
                                          <p class="text-sm"><span class="font-bold">Lingua franca: <br></span> Filipino, Hiligaynon, Kinaray-a, English</p> 
                                          <p class="text-sm"><span class="font-bold">Economic activity: <br></span> 21.3 kilometers</p>     
                                          <p class="text-sm"><span class="font-bold">Coastline Area: <br></span> 21.3 kilometers</p>     
                                     </div>
                                   </details>
                                   <hr class="my-1 h-0.5 border-t-0 bg-slate-300 opacity-100 dark:opacity-50 my-3" />
                                   <details class="collapse collapse-arrow ">
                                          <summary class="collapse-title text-sm font-medium">
                                         <p class="text-sm"><span class="font-bold">Festivals</span></p>
                                          </summary>
                                          <div class="collapse-content flex flex-col gap-1"> 
                                               <p class="text-sm"><span class="font-bold">Binanog Festival<br></span>(Second Sunday of January) – Lambunao</p>  
                                               <p class="text-sm"><span class="font-bold">Leganes Saad Festival<br></span>(Last week of January) – Leganes</p>     
                                               <p class="text-sm"><span class="font-bold">Dinagyang Festival<br></span>(Last Sunday of January) – Iloilo City</p>     
                                               <p class="text-sm"><span class="font-bold">Jimanban Festival<br></span>(Last week of January) – New Lucena</p>     
                                               <p class="text-sm"><span class="font-bold">Hirinugyaw-Suguidanonay Festival<br></span>(Last week of January to first week of February) – Calinog</p> 
                                               <p class="text-sm"><span class="font-bold">Kasadyahan Festival<br></span>(Fourth Saturday of January) – Iloilo City</p>     
                                               <p class="text-sm"><span class="font-bold">Candelaria Fiesta<br></span>(February 2) – Jaro</p>    
                                               <p class="text-sm"><span class="font-bold">Paraw Regatta Festival<br></span>(February) – Villa de Arevalo</p>      
                                          </div>
                                   </details>
                                   <hr class="my-1 h-0.5 border-t-0 bg-slate-300 opacity-100 dark:opacity-50 my-3" />
                                   <details class="collapse collapse-arrow join-item">
                                   <summary class="collapse-title text-sm  font-medium">
                                          <p class="text-sm"><span class="font-bold">Municipalities</span></p>
                                   </summary>
                                   <div class="collapse-content flex flex-col gap-1"> 
                                          <p class="text-sm"><span class="font-bold">Ajuy</span> 5012</p>  
                                          <p class="text-sm"><span class="font-bold">Alimodian</span> 5028</p>     
                                          <p class="text-sm"><span class="font-bold">Anilao</span> 5009</p>     
                                          <p class="text-sm"><span class="font-bold">Badiangan</span> 5033</p>     
                                          <p class="text-sm"><span class="font-bold">Balasan</span> 5018</p>        
                                          <p class="text-sm"><span class="font-bold">Banate</span> 5010</p>   
                                          <p class="text-sm"><span class="font-bold">Barotac Nuevo</span> 5007</p>   
                                          <p class="text-sm"><span class="font-bold">Barotac Viejo</span> 5011</p>   
                                          <p class="text-sm"><span class="font-bold">Batad</span> 5016</p>   
                                          <p class="text-sm"><span class="font-bold">Bingawan</span> 5041</p>   
                                          <p class="text-sm"><span class="font-bold">Cabatuan</span> 5031</p>   
                                          <p class="text-sm"><span class="font-bold">Calinog</span> 5040</p>   
                                          <p class="text-sm"><span class="font-bold">Carles</span> 5013</p> 
                                          <p class="text-sm"><span class="font-bold">Concepcion</span> 5019</p>   
                                          <p class="text-sm"><span class="font-bold">Dingle</span> 5035</p>   
                                          <p class="text-sm"><span class="font-bold">Dueñas</span> 5038</p> 
                                          <p class="text-sm"><span class="font-bold">Dumangas</span> 5006</p>   
                                          <p class="text-sm"><span class="font-bold">Estancia</span> 5017</p>   
                                          <p class="text-sm"><span class="font-bold">Guimbal</span> 5022</p> 
                                          <p class="text-sm"><span class="font-bold">Igbaras</span> 5029</p>   
                                          <p class="text-sm"><span class="font-bold">Iloilo City</span> 5000</p>   
                                          <p class="text-sm"><span class="font-bold">Janiuay</span> 5034</p> 
                                          <p class="text-sm"><span class="font-bold">Lambunao</span> 5003</p>   
                                          <p class="text-sm"><span class="font-bold">Lemery</span> 5043</p> 
                                          <p class="text-sm"><span class="font-bold">Leon</span> 5026</p>
                                          <p class="text-sm"><span class="font-bold">Maasin</span> 5030</p>   
                                          <p class="text-sm"><span class="font-bold">Miagao</span> 5023</p> 
                                          <p class="text-sm"><span class="font-bold">Mina</span> 5032</p>
                                          <p class="text-sm"><span class="font-bold">New Lucena</span> 5005</p>
                                          <p class="text-sm"><span class="font-bold">Oton</span> 5020</p>   
                                          <p class="text-sm"><span class="font-bold">Paasi</span> 5037</p> 
                                          <p class="text-sm"><span class="font-bold">Pavia</span> 5001</p>
                                          <p class="text-sm"><span class="font-bold">Pototan</span> 5008</p>
                                          <p class="text-sm"><span class="font-bold">San Dionisio</span> 5015</p>   
                                          <p class="text-sm"><span class="font-bold">San Enrique</span> 5036</p> 
                                          <p class="text-sm"><span class="font-bold">San Joaquin</span> 5024</p>
                                          <p class="text-sm"><span class="font-bold">San Miguel</span> 5025</p>
                                          <p class="text-sm"><span class="font-bold">San Rafael</span> 5039</p>   
                                          <p class="text-sm"><span class="font-bold">Santa Barbara</span> 5002</p> 
                                          <p class="text-sm"><span class="font-bold">Sara</span> 5014</p>
                                          <p class="text-sm"><span class="font-bold">Tigbauan</span> 5021</p> 
                                          <p class="text-sm"><span class="font-bold">Tubungan</span> 5027</p>
                                          <p class="text-sm"><span class="font-bold">Zarraga</span> 5004</p>-
                                          </div>
                                   </details>
                            </div>
                     </div>
              </div>
              <div class="w-full h-full p-3 border-l-[2px] border-slate-400">
                     <div class="flex flex-start gap-5">
                            <h2 class="text-lg font-bold ">History</h2>
                            <h2 class="text-lg font-bold ">Map</h2>
                            <h2 class="text-lg font-bold ">Facts</h2>
                     </div>
                     <hr class="my-12 h-0.5 border-t-0 bg-slate-700 opacity-100 dark:opacity-50 my-3" />
                     <p class="p-2 indent-10">
                            In the Pre-Spanish period, Filipino settlements were established near water bodies like rivers. The Iloilo region had bamboo and grass huts along the coasts and rivers, utilizing the surrounding natural resources for clothing, shelter, and tools. Public buildings and places of worship were lacking.
                     </p>
                     <p class="p-2 indent-10">
                            During the Spanish Period, the dispersed barangay settlements evolved into towns and provinces. Parish churches, along with town halls and plazas, became central to town layouts. The government seat shifted to different locations due to threats, eventually settling near the Iloilo River. A road network radiated from a fort and remains in use today.     
                     </p>
                     <p class="p-2 indent-10">
                            In the American Period, economic development in Iloilo was driven by road networks. British influence contributed to the sugar industry, and infrastructure projects linked warehouses to towns. Working-class districts were introduced, and architectural styles evolved. Iloilo became a chartered city in 1937, integrating American architectural elements.       
                     </p>
                     <p class="p-2 indent-10">
                            After World War II, economic decline occurred due to factors like the sugar industry's decline. Recovery efforts focused on urban planning. Iloilo City joined the National Planning Commission's strategies. Modernization brought growth through fish ports, a seaport, and commerce, establishing Iloilo City as the Regional Center of Western Visayas.
                     </p>
                     <p class="p-2 indent-10 mb-10">
                            In 1977, a Comprehensive Urban Development Plan was approved but struggled with rapid urbanization. By 1993, a new plan was prepared to address urban challenges, but its implementation awaited approval from the Housing and Land Use Regulatory Board (HLURB).
                     </p>
                     {{-- map --}}
                     <div class="flex justify-center gap-6">
                            <div class="w-[40%]">
                                   <img src="{{ asset('assets/img/Iloilo_First_Legislative_District_0.png') }}" alt="iloilo" srcset="" class="h-[400px]">
                            </div>
                            <div class="w-[40%]">
                                   <iframe class="h-[400px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88699.52880569769!2d122.51314347178354!3d10.734298207910358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee56fe538d781%3A0xe8250cd6bc30a488!2sIloilo%20City%2C%20Iloilo!5e0!3m2!1sen!2sph!4v1693472656413!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                     </div>
                     {{-- facts --}}
                     <div class="flex flex-col gap-3">
                            <div class="collapse collapse-arrow join-item">
                                   <input type="radio" name="my-accordion-4" checked="checked" /> 
                                   <div class="collapse-title text-sm font-medium">
                                          facts
                                   </div>
                                   <div class="collapse-content">  
                                          info   
                                   </div>
                                 </div>
                     </div>
              </div>
       </div>
@endsection