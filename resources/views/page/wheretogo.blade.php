@extends('layout.main_layout')

@section('where')
       <div class="w-full h-fit min-h-screen  px-[3%] text-black pt-[100px] flex gap-3">
              <div class="flex flex-col gap-5 ">
                     <h2 class="text-lg font-bold history-btn hdr">Historical Landmarks</h2>
                     <h2 class="text-lg font-bold map-btn hdr">Beach and Island Hopping</h2>
                     <h2 class="text-lg font-bold facts-btn hdr">Parks and Camps</h2>
                     <h2 class="text-lg font-bold facts-btn hdr">Malls and Dine in</h2>
              </div>
              <div class="w-full h-full p-3 border-l-[2px] border-slate-0 min-h-screen">
                     {{-- historical landmarks --}}
                     <div class="history w-full h-full flex flex-wrap gap-4 px-10">
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/molo-church-in-iloilo-city-philippines.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Molo Church</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Saint Anne Parish Church</span></li>
                                                        <li><span class="font-bold">Address:</span> 132 San Pedro St, Molo, Iloilo City, 5000 Iloilo</li>
                                                        <li><span class="font-bold">Mass (except Monday)</span></li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/jaro.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Jaro Metropolitan Cathedral</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class=" font-bold">National Shrine of Our Lady of the Candles and colloquially</span></li>
                                                        <li><span class="font-bold">Address:</span> Jaro, Iloilo City, 5000 Iloilo</li>
                                                        <li><span class="font-bold">Mass: </span>Mon - Sunday</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                          {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/nellygardenmansion.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Nelly Garden Mansion</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Lopez Heritage House</span></li>
                                                        <li><span class="font-bold">Address: </span>Brgy E Lopez St, Jaro, Iloilo City, Iloilo</li>
                                                        <li><span class="font-bold">Open: </span>Mon - Fri</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/11molo-mansion-s-exterior.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Molo Mansion</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class=" font-bold">Yusay-Consing Mansion</span></li>
                                                        <li><span class="font-bold">Address:</span>Locsin St, Molo, Iloilo City, Iloilo</li>
                                                        <li><span class="font-bold">Open: </span>Mon - Fri</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/Miagao_Church.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Miagao Church</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class=" font-bold">Santo Tomas de Villanueva</span></li>
                                                        <li><span class="font-bold">Address:</span>Zulueta Ave, Miagao, 5023 Iloilo</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/museoiloilo.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Museo Iloilo</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class=" font-bold">Provincial Museum</span></li>
                                                        <li><span class="font-bold">Address:</span>Iloilo City Proper, Iloilo City, 5000 Iloilo</li>
                                                        <li><span class="font-bold">Mass (except Monday)</span></li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/casa-mariquit-2.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Casa Mariquit</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class=" font-bold">Heritage House</span></li>
                                                        <li><span class="font-bold">Address:</span> Santa Isabel Street in Jaro, Iloilo</li>
                                                        <li><span class="font-bold">Open: </span>Mon - Fri</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/11calle-real1.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Calle Real</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class=" font-bold">Historic Street</span></li>
                                                        <li><span class="font-bold">Address:</span>J.M. Basa Street Iloilo City Proper</li>
                                                        <li><span class="font-bold">Open: </span>Mon - Fri</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                     </div>
                     {{-- beach islands --}}
                     <div class="map w-full h-full flex flex-wrap gap-4 px-10">
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/beach_islands/gigantesreal.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Isla De Gigantes</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Island Hopping</span></li>
                                                        <li><span class="font-bold">Location:</span>Carles, Iloilo</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-cover w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/conceptionislands.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Concepcion Islands</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class=" font-bold">White sand Beach and Sandbars </span></li>
                                                        <li><span class="font-bold">Location:</span> Concepcion, Iloilo</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                          {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-left w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/villabeach.png') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Villa Beach</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Gray Beach</span></li>
                                                        <li><span class="font-bold">Location: </span>Villa de Arevalo, Southern Coast of Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-left w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/beach_islands/marbuena.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Maribuena Island</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Island Beach Resort</span></li>
                                                        <li><span class="font-bold">Location: </span>Ajuy, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/11isladegigantes.png') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Cabugao Gamay</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Sandbar</span></li>
                                                        <li><span class="font-bold">Location: </span>Carles, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/beach_islands/antoniabeach.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Antonio Beach</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">White sand Beach</span></li>
                                                        <li><span class="font-bold">Location: </span>Carles, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/beach_islands/gigantesSur.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Gigantes Sur</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Beach Unique Rock Formation</span></li>
                                                        <li><span class="font-bold">Location: </span>Carles, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-left w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/beach_islands/gigantesNorte.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Gigantes Norte</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Island Hopping</span></li>
                                                        <li><span class="font-bold">Location: </span>Carles, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-right w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/beach_islands/bulubadiangan-island-1.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Bulubadiangan Island</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Sand bars</span></li>
                                                        <li><span class="font-bold">Location: </span>Concepcion, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/beach_islands/agho.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Agho Island</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">White Sand And Coral Garden</span></li>
                                                        <li><span class="font-bold">Location: </span>Concepcion, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/sicogonisland.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Sicogon Island</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Tourist Attraction</span></li>
                                                        <li><span class="font-bold">Location: </span>Concepcion, Iloilo City</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                     </div>
                     {{-- parks camp --}}
                     <div class="facts w-full h-full flex flex-wrap gap-4 px-10">
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-left w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/parks_camps/Mtnapulak.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Mt. Napulak</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Mountain Trail</span></li>
                                                        <li><span class="font-bold">Location: </span>Igbaras, Iloilo</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/bucaricamp.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Bucari Pine Forrest</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Campsite</span></li>
                                                        <li><span class="font-bold">Location: </span>Bucari Leon, Iloilo</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/parks_camps/mtlingguhob.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Mt.Lingguhob</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Campsite and Trail</span></li>
                                                        <li><span class="font-bold">Location: </span>Tubungan, Iloilo</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>
                            <div class="card card-side bg-slate-100 shadow-xl w-[350px] min-h-[300px]">
                                   <figure class="h-full w-full max-w-[50%] ">
                                          <img class="object-center w-full h-full transition duration-300 ease-in-out hover:scale-110" src="{{ asset('assets/img/parks_camps/mtlingguhob.jpg') }}" alt="isladegigantes"/></figure>
                                   <div class="card-body p-2">
                                          <h2 class="text-base font-bold">Bucari Pine Forrest</h2>
                                                 <ul class="text-[12px]">
                                                        <li><span class="font-bold">Campsite</span></li>
                                                        <li><span class="font-bold">Location: </span>Bucari Leon, Iloilo</li>
                                                 </ul>
                                          <div class="card-actions justify-end">
                                                 {{-- <button class="btn btn-primary">Watch</button> --}}
                                          </div>
                                   </div>
                            </div>

                     </div>
                     
              </div>
       </div>
@endsection