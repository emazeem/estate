<?php
$svs=\App\Models\Service::all();
$locs=\App\Models\Location::all();
$devs=\App\Models\ResidentialDev::all();
$phone=\App\Models\Settings::where('slug','contact-us-phone-no')->first();
$featuredDev=\App\Models\ResidentialDev::orderBy('created_at','desc')->first();
?>
<div class="w-full absolute top-0 left-0 z-40 transition text-white px-4 | lg:px-12"
     x-bind:class="{ 'text-gray-600' : megaMenu != null, 'text-white delay-200' : megaMenu == null }">
    <div class="w-full flex items-center justify-between relative transition border-b z-50 border-solid border-white border-opacity-10 py-5 lg:py-8"
         x-bind:class="{ 'border-black' : megaMenu != null, 'border-white' : megaMenu == null }">
        <div class="absolute top-0 left-0 z-0 w-full h-full" x-on:click="megaMenu = null, search = null"></div>
        <div class="inline-flex items-center space-x-8">
            <a href="{{route('home')}}" aria-label="Home"
               class="block w-13 h-12 relative ease-smooth-out duration-300 transform | hover:scale-90">

                <div class="logo_img" x-bind:class="{ 'opacity-0' : megaMenu != null, 'opacity-100 delay-200' : megaMenu == null }">
                    <img class="logo-white" src="{{url('dist/images/logo-white.png')}}" alt="" width="200" height="200">
                    <img class="logo-color" style="display: none" src="{{url('dist/images/logo-primary.png')}}" alt="" width="200" height="200">

                </div>
                <div class="opacity-0 transition ease-smooth-out duration-300 absolute top-0 left-0 w-full h-full" x-bind:class="{ 'opacity-100' : megaMenu != null, 'opacity-0 delay-200' : megaMenu == null }">
                    <img src="{{url('dist/images/logo-primary.png')}}" alt="" width="200" height="200">
                </div>
            </a>
            <div class="hidden | lg:inline-flex">
                <div class="">
                    <a href="tel:+44 (0)161 416 6244"
                       class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                       x-bind:class="{ 'hover:text-primary' : megaMenu != null }">
                                <span
                                        class="text-base mt-0.5 inline-flex items-center justify-center w-12 h-12 | xl:hidden">
                                    <i class="fal fa-phone"></i>
                                </span>
                        <span class="hidden | xl:inline-block">
                                    {{$phone->value}}
                                </span>
                    </a></div>
                <div class="xl:ml-5">
                    <a href="https://wa.me/{{$phone->value}}"
                       class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                       x-bind:class="{ 'hover:text-primary' : megaMenu != null }">
                                <span
                                        class="inline-flex items-center justify-center w-12 h-12 text-base mt-0.5 | xl:hidden">
                                    <i class="fab fa-whatsapp"></i>
                                </span>
                        <span class="hidden | xl:inline-block">
                                    Whatsapp
                                </span>
                    </a></div>
            </div>
        </div>
        <div class="inline-flex flex-wrap items-center transition ease-smooth-out duration-300 transform"
             x-bind:class="{ 'opacity-100 pointer-events-auto translate-y-0' : search == null, 'opacity-0 pointer-events-none translate-y-2' : search == true }">
            <div class="flex-wrap items-center space-x-5 mr-5 hidden | lg:inline-flex">
                <div class="relative" x-bind:class="{ 'text-primary delay-200' : megaMenu == '57225' }">
                    <a href="{{route('home')}}" class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined">
                        Home
                    </a>
                    <div class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                         x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '57225', 'opacity-0' : megaMenu != '57225' }">
                    </div>
                </div>
                <div class="relative" x-bind:class="{ 'text-primary delay-200' : megaMenu == '61' }">
                    <a href="#" class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                       x-on:click="megaMenu = '61'">
                        Residential Developments
                    </a>
                    <div class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                         x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '61', 'opacity-0' : megaMenu != '61' }">
                    </div>
                </div>
                <div class="relative" x-bind:class="{ 'text-primary delay-200' : megaMenu == '64' }">
                    <a href="#" class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                       x-on:click="megaMenu = '64'">
                        Locations
                    </a>
                    <div class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                         x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '64', 'opacity-0' : megaMenu != '64' }">
                    </div>
                </div>
                <div class="relative" x-bind:class="{ 'text-primary delay-200' : megaMenu == '58522' }">
                    <a href="#" class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                       x-on:click="megaMenu = '58522'">
                        Knowledge Centre
                    </a>
                    <div class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                         x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '58522', 'opacity-0' : megaMenu != '58522' }">
                    </div>
                </div>
                <div class="relative" x-bind:class="{ 'text-primary delay-200' : megaMenu == '66' }">
                    <a href="#" class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                       x-on:click="megaMenu = '66'">
                        Services
                    </a>
                    <div class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                         x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '66', 'opacity-0' : megaMenu != '66' }">
                    </div>
                </div>
                <div class="relative" x-bind:class="{ 'text-primary delay-200' : megaMenu == '55775' }">
                    <a href="{{route('contact.us')}}"
                       class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined">
                        Contact Us
                    </a>
                    <div class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                         x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '55775', 'opacity-0' : megaMenu != '55775' }">
                    </div>
                </div>
            </div>
            <div class="inline-flex | lg:hidden">
                <div class="">
                    <a href="tel:+44 (0)161 416 6244"
                       class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                       x-bind:class="{ 'hover:text-primary' : megaMenu != null }">
                                <span
                                        class="text-base mt-0.5 inline-flex items-center justify-center w-12 h-12 | xl:hidden">
                                    <i class="fal fa-phone"></i>
                                </span>
                        <span class="hidden | xl:inline-block">
                                    +44 (0)161 416 6244
                                </span>
                    </a></div>
                <div class="xl:ml-5">
                    <a href="https://wa.me/447795231689"
                       class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                       x-bind:class="{ 'hover:text-primary' : megaMenu != null }">
                                <span
                                        class="inline-flex items-center justify-center w-12 h-12 text-base mt-0.5 | xl:hidden">
                                    <i class="fab fa-whatsapp"></i>
                                </span>
                        <span class="hidden | xl:inline-block">
                                    Whatsapp
                                </span>
                    </a></div>
            </div>
            <div class=" | lg:mr-2">
                <a href="#" aria-label="Menu"
                   class="w-12 h-12 inline-flex relative group items-center justify-center text-base | lg:text-lg"
                   x-on:click="megaMenu == 'burger' ? megaMenu = null : megaMenu = 'burger'">
                    <i class="fal fa-bars relative mt-1 z-10 transform transition ease-smooth-out duration-500"
                       x-bind:class="{ 'fa-times rotate-180 -mt-0.5' : megaMenu == 'burger', 'fa-bars mt-1' : megaMenu != 'burger' }"></i>
                </a></div>
            <div class="">
                <a href="#" aria-label="Search"
                   class="w-12 h-12 inline-flex relative group items-center justify-center text-base | lg:text-lg"
                   x-on:click.prevent="search ? search = null : search = true, $refs.searchInput.focus(), megaMenu = null, sideMenu = null, mobileMenu = null">
                    <i class="fal fa-search relative mt-1 z-10"></i>
                </a></div>
        </div>
        <div class="absolute top-0 right-0 h-full items-center transition ease-smooth-out duration-300 transform z-20 flex w-9/12 | lg:w-6/12 "
             x-cloak
             x-bind:class="{ 'opacity-100 pointer-events-auto translate-y-0' : search == true, 'opacity-0 pointer-events-none translate-y-2' : search == null }">
            <form action="https://alliance-investments.com/search" class="w-full relative">
                <input type="text" name="keywords" autocomplete="off"
                       placeholder="Keywords, properties, locations..."
                       class="w-full text-xs rounded-full px-3 py-2 placeholder-opacity-100 font-light  border border-solid bg-transparent appearance-none | focus:outline-none  | text-white border-white placeholder-white | lg:px-6 lg:text-sm"
                       value="" x-ref="searchInput">
                <button
                        class="absolute h-full pt-0 top-0 right-0 inline-flex items-center px-4 text-base text-white transition ease-smooth-out duration-500 | focus:outline-none | lg:text-lg"
                        aria-label="Search">
                    <i class="fal fa-search"></i>
                </button></form>
        </div>
    </div>
    <div x-bind:class="{ 'pointer-events-auto' : megaMenu == 'burger', ' pointer-events-none' : megaMenu != 'burger' }"
         x-cloak class="absolute top-0 left-0 w-full z-40 transition pointer-events-none pt-24 | lg:pt-28">
        <div class="absolute top-0  left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
             x-cloak
             x-bind:class="{ 'translate-y-0' : megaMenu == 'burger', '-translate-y-full' : megaMenu != 'burger' }">
        </div>
        <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap justify-between opaity-0 transition "
             x-cloak x-bind:class="{ 'opacity-100' : megaMenu == 'burger', 'opacity-0' : megaMenu != 'burger' }">
            <div class="flex flex-wrap w-full justify-between pt-8 pb-12 | lg:pt-16 lg:pb-16 lg:space-y-0">
                <div class="flex w-full flex-wrap justify-center mb-6 | lg:hidden">
                    <div class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                         x-bind:class="{ 'opacity-100 delay-100' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                        <a href="index.html"
                           class="inline-block underlined transform ease-smooth-out duration-500">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Home</div>
                        </a></div>
                    <div class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                         x-bind:class="{ 'opacity-100 delay-200' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                        <a href="#" class="inline-block underlined transform ease-smooth-out duration-500"
                           x-on:click="megaMenu = '61'">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Residential Developments<i class="far mt-0.5 text-sm ml-2 fa-angle-right"></i>
                            </div>
                        </a></div>
                    <div class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                         x-bind:class="{ 'opacity-100 delay-300' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                        <a href="#" class="inline-block underlined transform ease-smooth-out duration-500"
                           x-on:click="megaMenu = '64'">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Locations<i class="far mt-0.5 text-sm ml-2 fa-angle-right"></i></div>
                        </a></div>
                    <div class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                         x-bind:class="{ 'opacity-100 delay-400' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                        <a href="#" class="inline-block underlined transform ease-smooth-out duration-500"
                           x-on:click="megaMenu = '58522'">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Knowledge Centre<i class="far mt-0.5 text-sm ml-2 fa-angle-right"></i></div>
                        </a></div>
                    <div class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                         x-bind:class="{ 'opacity-100 delay-500' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                        <a href="#" class="inline-block underlined transform ease-smooth-out duration-500"
                           x-on:click="megaMenu = '66'">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Services<i class="far mt-0.5 text-sm ml-2 fa-angle-right"></i></div>
                        </a></div>
                    <div class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                         x-bind:class="{ 'opacity-100 delay-600' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                        <a href="contact.html"
                           class="inline-block underlined transform ease-smooth-out duration-500">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Contact Us</div>
                        </a></div>
                </div>
                <div class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                     x-bind:class="{ 'opacity-100 delay-700 lg:delay-100' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                    <a href="{{route('teams')}}"
                       class="inline-block underlined transform ease-smooth-out duration-500">
                        <div class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none ">
                            The Team</div>
                    </a></div>
                <div class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                     x-bind:class="{ 'opacity-100 delay-800 lg:delay-200' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                    <a href="{{route('contact.us')}}"
                       class="inline-block underlined transform ease-smooth-out duration-500">
                        <div
                                class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none ">
                            Work With Us</div>
                    </a></div>
                <div class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                     x-bind:class="{ 'opacity-100 delay-900 lg:delay-300' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                    <a href="{{route('testimonial')}}"
                       class="inline-block underlined transform ease-smooth-out duration-500">
                        <div class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none ">
                            Testimonials</div>
                    </a></div>
                <div class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                     x-bind:class="{ 'opacity-100 delay-1000 lg:delay-400' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }">
                    <a href="https://ail.sharefile.eu/Authentication/Login"
                       class="inline-block underlined transform ease-smooth-out duration-500">
                        <div
                                class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none ">
                            Partner Login</div>
                    </a></div>
            </div>
        </div>
    </div>
    <div x-bind:class="{ 'pointer-events-auto' : megaMenu == '61', 'pointer-events-none delay-200' : megaMenu != '61' }"
         class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28">
        <div class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
             x-cloak
             x-bind:class="{ 'translate-y-0' : megaMenu == '61', '-translate-y-full delay-300' : megaMenu != '61' }">
        </div>
        <div class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
             x-cloak x-bind:class="{ 'opacity-100' : megaMenu == '61', 'opacity-0' : megaMenu != '61' }">
            <div class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                 x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '61', 'opacity-0' : megaMenu != '61' }">
                <div class="max-w-sm mx-auto">
                    <div class="mb-6">
                        <div class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight ">
                            Featured Property</div>
                    </div>
                    <div class="">
                        <div class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                            <div class="relative">
                                <div class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                    {{$featuredDev->tag}}
                                </div>
                                <a href="{{url('residential/'.$featuredDev->id)}}"
                                   class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <source type="image/webp"
                                                    data-srcset="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}} 800w"
                                                    data-sizes="100vw">
                                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                 data-src="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}}"
                                                 data-srcset="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}} 800w"
                                                 data-sizes="100vw" alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                                 class="lazy-load js-lazy-load" width="800" height="600">
                                        </picture>
                                    </div>
                                </a>
                                <div class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                    <div class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70">
                                    </div>
                                    <div class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                        <div class="flex flex-wrap items-center text-white space-x-1">
                                            <i class="fal fa-bed"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$featuredDev->bedrooms}} bedrooms
                                                    </span></div>
                                        <div
                                                class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                            <i class="fal fa-house"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$featuredDev->apartments}} apartments
                                                    </span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                <div class="">
                                    <a href="{{url('residential/'.$featuredDev->id)}}" class=""><div class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight ">Oxygen</div>
                                    </a></div>
                                <div class="font-light text-gray-600 text-sm | lg:text-base">
                                    {{$featuredDev->location}}</div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                <div
                                        class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                    <div class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                        Prices From</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        PKR{{$featuredDev->prices}}</div>
                                </div>
                                <div class="flex-1 py-4 px-2">
                                    <div class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                        Apartments</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        {{$featuredDev->apartments}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                <div class="">
                    <div class="flex justify-center text-center mb-4 w-full | lg:hidden">
                        <a href="#" class="text-2xs tracking-wide uppercase font-bold text-primary"
                           x-on:click.prevent="megaMenu = 'burger'">
                            <i class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                            Back
                        </a></div>
                    @foreach($devs as $dev)
                    <div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-100' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }">
                        <a href="{{url('residential/'.$dev->id)}}" class="inline-block underlined">
                            <div class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                {{$dev->title}}</div>
                        </a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div x-bind:class="{ 'pointer-events-auto' : megaMenu == '64', 'pointer-events-none delay-200' : megaMenu != '64' }"
         class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28">
        <div class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
             x-cloak
             x-bind:class="{ 'translate-y-0' : megaMenu == '64', '-translate-y-full delay-300' : megaMenu != '64' }">
        </div>
        <div class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
             x-cloak x-bind:class="{ 'opacity-100' : megaMenu == '64', 'opacity-0' : megaMenu != '64' }">
            <div class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                 x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '64', 'opacity-0' : megaMenu != '64' }">
                <div class="max-w-sm mx-auto">
                    <div class="mb-6">
                        <div class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight ">
                            Featured Property</div>
                    </div>
                    <div class="">
                        <div class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                            <div class="relative">
                                <div class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                    {{$featuredDev->tag}}
                                </div>
                                <a href="{{url('residential/'.$featuredDev->id)}}"
                                   class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <source type="image/webp"
                                                    data-srcset="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}} 800w"
                                                    data-sizes="100vw">
                                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                 data-src="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}}"
                                                 data-srcset="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}} 800w"
                                                 data-sizes="100vw" alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                                 class="lazy-load js-lazy-load" width="800" height="600">
                                        </picture>
                                    </div>
                                </a>
                                <div class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                    <div class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70">
                                    </div>
                                    <div class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                        <div class="flex flex-wrap items-center text-white space-x-1">
                                            <i class="fal fa-bed"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$featuredDev->bedrooms}} bedrooms
                                                    </span></div>
                                        <div
                                                class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                            <i class="fal fa-house"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$featuredDev->apartments}} apartments
                                                    </span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                <div class="">
                                    <a href="{{url('residential/'.$featuredDev->id)}}" class=""><div class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight ">Oxygen</div>
                                    </a></div>
                                <div class="font-light text-gray-600 text-sm | lg:text-base">
                                    {{$featuredDev->location}}</div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                <div
                                        class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                    <div class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                        Prices From</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        PKR{{$featuredDev->prices}}</div>
                                </div>
                                <div class="flex-1 py-4 px-2">
                                    <div class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                        Apartments</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        {{$featuredDev->apartments}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                <div class="">
                    <div class="flex justify-center text-center mb-4 w-full | lg:hidden">
                        <a href="#" class="text-2xs tracking-wide uppercase font-bold text-primary"
                           x-on:click.prevent="megaMenu = 'burger'">
                            <i class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                            Back
                        </a></div>
                    @foreach($locs as $loc)
                    <div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-100' : megaMenu == '64', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '64' }">
                        <a href="{{url('location/'.$loc->id)}}" class="inline-block underlined">
                            <div class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                {{$loc->name}}</div>
                        </a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div x-bind:class="{ 'pointer-events-auto' : megaMenu == '58522', 'pointer-events-none delay-200' : megaMenu != '58522' }"
         class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28">
        <div class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
             x-cloak
             x-bind:class="{ 'translate-y-0' : megaMenu == '58522', '-translate-y-full delay-300' : megaMenu != '58522' }">
        </div>
        <div class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
             x-cloak x-bind:class="{ 'opacity-100' : megaMenu == '58522', 'opacity-0' : megaMenu != '58522' }">
            <div class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                 x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '58522', 'opacity-0' : megaMenu != '58522' }">
                <div class="max-w-sm mx-auto">
                    <div class="mb-6">
                        <div class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight ">
                            The Address</div>
                    </div>
                    <div class="">
                        <div
                                class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                            <div class="relative">
                                <div
                                        class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                    Best Place to Live winner</div>
                                <a href="exchange-preston.html"
                                   class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <source type="image/webp"
                                                    data-srcset="uploads/images/address.jpg"
                                                    data-sizes="100vw">
                                            <img src="uploads/images/address.jpg"
                                                 alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                                 class="lazy-load js-lazy-load" width="600" height="600">
                                        </picture>
                                    </div>
                                </a>
                                <div class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                    <div
                                            class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70">
                                    </div>
                                    <div class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                        <div class="flex flex-wrap items-center text-white space-x-1">
                                            <i class="fal fa-bed"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        1 &amp; 2 Bedrooms
                                                    </span></div>
                                        <div
                                                class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                            <i class="fal fa-house"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        36 apartments
                                                    </span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                <div class="">
                                    <a href="exchange-preston.html" class="">
                                        <div
                                                class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight ">
                                            The Address</div>
                                    </a></div>
                                <div class="font-light text-gray-600 text-sm | lg:text-base">
                                    Altrincham</div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                <div
                                        class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                    <div class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                        Prices From</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        PKR259,000</div>
                                </div>
                                <div class="flex-1 py-4 px-2">
                                    <div class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                        Apartments</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        36</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                <div class="">
                    <div class="flex justify-center text-center mb-4 w-full | lg:hidden">
                        <a href="#" class="text-2xs tracking-wide uppercase font-bold text-primary"
                           x-on:click.prevent="megaMenu = 'burger'">
                            <i class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                            Back
                        </a></div>
                    <div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-100' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }">
                        <a href="{{route('new')}}" class="inline-block underlined">
                            <div class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                News</div>
                        </a></div>
                    <div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-200' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }">
                        <a href="{{route('construct.updates')}}" class="inline-block underlined">
                            <div class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Construction updates</div>
                        </a></div>
                    <div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-300' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }">
                        <a href="{{route('all.guides')}}" class="inline-block underlined">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Guides & downloads</div>
                        </a></div>
                    {{--<div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-400' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }">
                        <a href="investment-tools.html" class="inline-block underlined">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                Investment tools</div>
                        </a></div>
                    --}}
                    <div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-500' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }">
                        <a href="{{route('faqs')}}" class="inline-block underlined">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                FAQs</div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div x-bind:class="{ 'pointer-events-auto' : megaMenu == '66', 'pointer-events-none delay-200' : megaMenu != '66' }"
         class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28">
        <div class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
             x-cloak
             x-bind:class="{ 'translate-y-0' : megaMenu == '66', '-translate-y-full delay-300' : megaMenu != '66' }">
        </div>
        <div class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
             x-cloak x-bind:class="{ 'opacity-100' : megaMenu == '66', 'opacity-0' : megaMenu != '66' }">
            <div class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                 x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '66', 'opacity-0' : megaMenu != '66' }">
                <div class="max-w-sm mx-auto">
                    <div class="mb-6">
                        <div class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight ">
                            Featured Property</div>
                    </div>
                    <div class="">
                        <div class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                            <div class="relative">
                                <div class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                    {{$featuredDev->tag}}
                                </div>
                                <a href="{{url('residential/'.$featuredDev->id)}}"
                                   class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <source type="image/webp"
                                                    data-srcset="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}} 800w"
                                                    data-sizes="100vw">
                                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                 data-src="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}}"
                                                 data-srcset="{{Storage::disk('local')->url('/residential/'.$featuredDev->image)}} 800w"
                                                 data-sizes="100vw" alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                                 class="lazy-load js-lazy-load" width="800" height="600">
                                        </picture>
                                    </div>
                                </a>
                                <div class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                    <div class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70">
                                    </div>
                                    <div class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                        <div class="flex flex-wrap items-center text-white space-x-1">
                                            <i class="fal fa-bed"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$featuredDev->bedrooms}} bedrooms
                                                    </span></div>
                                        <div
                                                class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                            <i class="fal fa-house"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$featuredDev->apartments}} apartments
                                                    </span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                <div class="">
                                    <a href="{{url('residential/'.$featuredDev->id)}}" class=""><div class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight ">Oxygen</div>
                                    </a></div>
                                <div class="font-light text-gray-600 text-sm | lg:text-base">
                                    {{$featuredDev->location}}</div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                <div
                                        class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                    <div class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                        Prices From</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        PKR{{$featuredDev->prices}}</div>
                                </div>
                                <div class="flex-1 py-4 px-2">
                                    <div class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                        Apartments</div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        {{$featuredDev->apartments}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                <div class="">
                    <div class="flex justify-center text-center mb-4 w-full | lg:hidden">
                        <a href="#" class="text-2xs tracking-wide uppercase font-bold text-primary"
                           x-on:click.prevent="megaMenu = 'burger'">
                            <i class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                            Back
                        </a></div>
                    @foreach($svs as $sv)
                    <div class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                         x-bind:class="{ 'translate-y-0 opacity-100 delay-800' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }">
                        <a href="{{url('services/'.$sv->id)}}" class="inline-block underlined">
                            <div
                                    class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none ">
                                {{$sv->name}}</div>
                        </a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>