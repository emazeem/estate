@extends('layouts.master')
@section('content')
    <div
            class="w-full absolute top-0 left-0 z-40 transition text-white px-4 | lg:px-12"
            x-bind:class="{ 'text-gray-600' : megaMenu != null, 'text-white delay-200' : megaMenu == null }"
    >
        <div
                class="w-full flex items-center justify-between relative transition border-b z-50 border-solid border-white border-opacity-10 py-5 lg:py-8"
                x-bind:class="{ 'border-black' : megaMenu != null, 'border-white' : megaMenu == null }"
        >
            <div
                    class="absolute top-0 left-0 z-0 w-full h-full" x-on:click="megaMenu = null, search = null"></div>
            <div
                    class="inline-flex items-center space-x-8">
                <a
                        href="index.html" aria-label="Home"
                        class="block w-12 h-12 relative ease-smooth-out duration-300 transform | hover:scale-90">
                    <div
                            class=""
                            x-bind:class="{ 'opacity-0' : megaMenu != null, 'opacity-100 delay-200' : megaMenu == null }"
                    >
                        <img
                                src="dist/images/logo-white.png" alt="" width="200" height="200"></div>
                    <div
                            class="opacity-0 transition ease-smooth-out duration-300 absolute top-0 left-0 w-full h-full"
                            x-bind:class="{ 'opacity-100' : megaMenu != null, 'opacity-0 delay-200' : megaMenu == null }"
                    >
                        <img
                                src="dist/images/logo-primary.png" alt="" width="200" height="200"></div>
                </a>
                <div
                        class="hidden | lg:inline-flex">
                    <div
                            class="">
                        <a
                                href="tel:+44 (0)161 416 6244"
                                class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                                x-bind:class="{ 'hover:text-primary' : megaMenu != null }"
                        >
<span
        class="text-base mt-0.5 inline-flex items-center justify-center w-12 h-12 | xl:hidden">
<i
        class="fal fa-phone"></i>
</span>
                            <span
                                    class="hidden | xl:inline-block">
+44 (0)161 416 6244
</span>
                        </a></div>
                    <div
                            class="xl:ml-5">
                        <a
                                href="https://wa.me/447795231689"
                                class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                                x-bind:class="{ 'hover:text-primary' : megaMenu != null }"
                        >
<span
        class="inline-flex items-center justify-center w-12 h-12 text-base mt-0.5 | xl:hidden">
<i
        class="fab fa-whatsapp"></i>
</span>
                            <span
                                    class="hidden | xl:inline-block">
Whatsapp
</span>
                        </a></div>
                </div>
            </div>
            <div
                    class="inline-flex flex-wrap items-center transition ease-smooth-out duration-300 transform"
                    x-bind:class="{ 'opacity-100 pointer-events-auto translate-y-0' : search == null, 'opacity-0 pointer-events-none translate-y-2' : search == true }"
            >
                <div
                        class="flex-wrap items-center space-x-5 mr-5 hidden | lg:inline-flex">
                    <div
                            class="relative"
                            x-bind:class="{ 'text-primary delay-200' : megaMenu == '57225' }"
                    >
                        <a
                                href="index.html"
                                class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                        >
                            Home
                        </a>
                        <div
                                class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                                x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '57225', 'opacity-0' : megaMenu != '57225' }"
                        ></div>
                    </div>
                    <div
                            class="relative"
                            x-bind:class="{ 'text-primary delay-200' : megaMenu == '61' }"
                    >
                        <a
                                href="#"
                                class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                                x-on:click="megaMenu = '61'"
                        >
                            Residential Developments
                        </a>
                        <div
                                class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                                x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '61', 'opacity-0' : megaMenu != '61' }"
                        ></div>
                    </div>
                    <div
                            class="relative"
                            x-bind:class="{ 'text-primary delay-200' : megaMenu == '64' }"
                    >
                        <a
                                href="#"
                                class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                                x-on:click="megaMenu = '64'"
                        >
                            Locations
                        </a>
                        <div
                                class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                                x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '64', 'opacity-0' : megaMenu != '64' }"
                        ></div>
                    </div>
                    <div
                            class="relative"
                            x-bind:class="{ 'text-primary delay-200' : megaMenu == '58522' }"
                    >
                        <a
                                href="#"
                                class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                                x-on:click="megaMenu = '58522'"
                        >
                            Knowledge Centre
                        </a>
                        <div
                                class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                                x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '58522', 'opacity-0' : megaMenu != '58522' }"
                        ></div>
                    </div>
                    <div
                            class="relative"
                            x-bind:class="{ 'text-primary delay-200' : megaMenu == '66' }"
                    >
                        <a
                                href="#"
                                class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                                x-on:click="megaMenu = '66'"
                        >
                            Services
                        </a>
                        <div
                                class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                                x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '66', 'opacity-0' : megaMenu != '66' }"
                        ></div>
                    </div>
                    <div
                            class="relative"
                            x-bind:class="{ 'text-primary delay-200' : megaMenu == '55775' }"
                    >
                        <a
                                href="{{route('contact.us')}}"
                                class="tracking-wide pb-0.5 font-bold text-xs uppercase underlined"
                        >
                            Contact Us
                        </a>
                        <div
                                class="w-full h-1 bg-primary absolute bottom-0 left-0 transform translate-y-12 opacity-0 transition ease-smooth-out duration-500"
                                x-bind:class="{ 'opacity-100 delay-200' : megaMenu == '55775', 'opacity-0' : megaMenu != '55775' }"
                        ></div>
                    </div>
                </div>
                <div
                        class="inline-flex | lg:hidden">
                    <div
                            class="">
                        <a
                                href="tel:+44 (0)161 416 6244"
                                class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                                x-bind:class="{ 'hover:text-primary' : megaMenu != null }"
                        >
<span
        class="text-base mt-0.5 inline-flex items-center justify-center w-12 h-12 | xl:hidden">
<i
        class="fal fa-phone"></i>
</span>
                            <span
                                    class="hidden | xl:inline-block">
+44 (0)161 416 6244
</span>
                        </a></div>
                    <div
                            class="xl:ml-5">
                        <a
                                href="https://wa.me/447795231689"
                                class="underlined tracking-wide pb-0.5 font-bold text-xs uppercase"
                                x-bind:class="{ 'hover:text-primary' : megaMenu != null }"
                        >
<span
        class="inline-flex items-center justify-center w-12 h-12 text-base mt-0.5 | xl:hidden">
<i
        class="fab fa-whatsapp"></i>
</span>
                            <span
                                    class="hidden | xl:inline-block">
Whatsapp
</span>
                        </a></div>
                </div>
                <div
                        class=" | lg:mr-2">
                    <a
                            href="#"
                            aria-label="Menu"
                            class="w-12 h-12 inline-flex relative group items-center justify-center text-base | lg:text-lg"
                            x-on:click="megaMenu == 'burger' ? megaMenu = null : megaMenu = 'burger'"
                    >
                        <i
                                class="fal fa-bars relative mt-1 z-10 transform transition ease-smooth-out duration-500"
                                x-bind:class="{ 'fa-times rotate-180 -mt-0.5' : megaMenu == 'burger', 'fa-bars mt-1' : megaMenu != 'burger' }"
                        ></i>
                    </a></div>
                <div
                        class="">
                    <a
                            href="#"
                            aria-label="Search"
                            class="w-12 h-12 inline-flex relative group items-center justify-center text-base | lg:text-lg"
                            x-on:click.prevent="search ? search = null : search = true, $refs.searchInput.focus(), megaMenu = null, sideMenu = null, mobileMenu = null"
                    >
                        <i
                                class="fal fa-search relative mt-1 z-10"></i>
                    </a></div>
            </div>
            <div
                    class="absolute top-0 right-0 h-full items-center transition ease-smooth-out duration-300 transform z-20 flex w-9/12 | lg:w-6/12 "
                    x-cloak
                    x-bind:class="{ 'opacity-100 pointer-events-auto translate-y-0' : search == true, 'opacity-0 pointer-events-none translate-y-2' : search == null }"
            >
                <form
                        action="https://alliance-investments.com/search" class="w-full relative">
                    <input
                            type="text"
                            name="keywords"
                            autocomplete="off"
                            placeholder="Keywords, properties, locations..."
                            class="w-full text-xs rounded-full px-3 py-2 placeholder-opacity-100 font-light  border border-solid bg-transparent appearance-none | focus:outline-none  | text-white border-white placeholder-white | lg:px-6 lg:text-sm"
                            value=""
                            x-ref="searchInput"
                    >
                    <button
                            class="absolute h-full pt-0 top-0 right-0 inline-flex items-center px-4 text-base text-white transition ease-smooth-out duration-500 | focus:outline-none | lg:text-lg"
                            aria-label="Search">
                        <i
                                class="fal fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <div
                x-bind:class="{ 'pointer-events-auto' : megaMenu == 'burger', ' pointer-events-none' : megaMenu != 'burger' }"
                x-cloak
                class="absolute top-0 left-0 w-full z-40 transition pointer-events-none pt-24 | lg:pt-28"
        >
            <div
                    class="absolute top-0  left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
                    x-cloak
                    x-bind:class="{ 'translate-y-0' : megaMenu == 'burger', '-translate-y-full' : megaMenu != 'burger' }"
            ></div>
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap justify-between opaity-0 transition "
                    x-cloak
                    x-bind:class="{ 'opacity-100' : megaMenu == 'burger', 'opacity-0' : megaMenu != 'burger' }"
            >
                <div
                        class="flex flex-wrap w-full justify-between pt-8 pb-12 | lg:pt-16 lg:pb-16 lg:space-y-0">
                    <div
                            class="flex w-full flex-wrap justify-center mb-6 | lg:hidden">
                        <div
                                class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                                x-bind:class="{ 'opacity-100 delay-100' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                        >
                            <a
                                    href="index.html"
                                    class="inline-block underlined transform ease-smooth-out duration-500"
                            >
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Home
                                </div>
                            </a></div>
                        <div
                                class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                                x-bind:class="{ 'opacity-100 delay-200' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                        >
                            <a
                                    href="#"
                                    class="inline-block underlined transform ease-smooth-out duration-500"
                                    x-on:click="megaMenu = '61'"
                            >
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Residential Developments<i
                                            class="far mt-0.5 text-sm ml-2 fa-angle-right"></i></div>
                            </a></div>
                        <div
                                class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                                x-bind:class="{ 'opacity-100 delay-300' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                        >
                            <a
                                    href="#"
                                    class="inline-block underlined transform ease-smooth-out duration-500"
                                    x-on:click="megaMenu = '64'"
                            >
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Locations<i
                                            class="far mt-0.5 text-sm ml-2 fa-angle-right"></i></div>
                            </a></div>
                        <div
                                class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                                x-bind:class="{ 'opacity-100 delay-400' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                        >
                            <a
                                    href="#"
                                    class="inline-block underlined transform ease-smooth-out duration-500"
                                    x-on:click="megaMenu = '58522'"
                            >
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Knowledge Centre<i
                                            class="far mt-0.5 text-sm ml-2 fa-angle-right"></i></div>
                            </a></div>
                        <div
                                class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                                x-bind:class="{ 'opacity-100 delay-500' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                        >
                            <a
                                    href="#"
                                    class="inline-block underlined transform ease-smooth-out duration-500"
                                    x-on:click="megaMenu = '66'"
                            >
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Services<i
                                            class="far mt-0.5 text-sm ml-2 fa-angle-right"></i></div>
                            </a></div>
                        <div
                                class="block relative transition duration-500 w-full text-center mb-4 | lg:text-left lg:w-auto"
                                x-bind:class="{ 'opacity-100 delay-600' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                        >
                            <a
                                    href="{{route('contact.us')}}"
                                    class="inline-block underlined transform ease-smooth-out duration-500"
                            >
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Contact Us
                                </div>
                            </a></div>
                    </div>
                    <div
                            class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                            x-bind:class="{ 'opacity-100 delay-700 lg:delay-100' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                    >
                        <a
                                href="index.html"
                                class="inline-block underlined transform ease-smooth-out duration-500">
                            <div
                                    class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none "
                            >
                                The Team
                            </div>
                        </a></div>
                    <div
                            class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                            x-bind:class="{ 'opacity-100 delay-800 lg:delay-200' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                    >
                        <a
                                href="work-with-us/index.html"
                                class="inline-block underlined transform ease-smooth-out duration-500">
                            <div
                                    class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none "
                            >
                                Work With Us
                            </div>
                        </a></div>
                    <div
                            class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                            x-bind:class="{ 'opacity-100 delay-900 lg:delay-300' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                    >
                        <a
                                href="testimonials/index.html"
                                class="inline-block underlined transform ease-smooth-out duration-500">
                            <div
                                    class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none "
                            >
                                Testimonials
                            </div>
                        </a></div>
                    <div
                            class="block relative transition duration-500 w-full text-center mb-2 | lg:mb-0 lg:text-left lg:w-auto"
                            x-bind:class="{ 'opacity-100 delay-1000 lg:delay-400' : megaMenu == 'burger', 'opacity-0 delay-200' : megaMenu != 'burger' }"
                    >
                        <a
                                href="https://ail.sharefile.eu/Authentication/Login"
                                class="inline-block underlined transform ease-smooth-out duration-500">
                            <div
                                    class="font-normal font-serif-primary text-base | lg:text-1-5xl text-primary-500 leading-none "
                            >
                                Partner Login
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
        <div
                x-bind:class="{ 'pointer-events-auto' : megaMenu == '61', 'pointer-events-none delay-200' : megaMenu != '61' }"
                class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28"
        >
            <div
                    class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
                    x-cloak
                    x-bind:class="{ 'translate-y-0' : megaMenu == '61', '-translate-y-full delay-300' : megaMenu != '61' }"
            ></div>
            <div
                    class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
                    x-cloak
                    x-bind:class="{ 'opacity-100' : megaMenu == '61', 'opacity-0' : megaMenu != '61' }"
            >
                <div
                        class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                        x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '61', 'opacity-0' : megaMenu != '61' }"
                >
                    <div
                            class="max-w-sm mx-auto">
                        <div
                                class="mb-6">
                            <div
                                    class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight "
                            >
                                Featured Property
                            </div>
                        </div>
                        <div
                                class="">
                            <div
                                    class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                                <div
                                        class="relative">
                                    <div
                                            class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                        Selling fast
                                    </div>
                                    <a
                                            href="oxygen/index.html"
                                            class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39042/AIL001_OXYGEN_V01_STORE_STREET_010720_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39042/AIL001_OXYGEN_V01_STORE_STREET_010720_85fe4262e6f7d664e679f74b4c4d6c35.webp 800w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39042/AIL001_OXYGEN_V01_STORE_STREET_010720_85fe4262e6f7d664e679f74b4c4d6c35.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39042/AIL001_OXYGEN_V01_STORE_STREET_010720_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39042/AIL001_OXYGEN_V01_STORE_STREET_010720_85fe4262e6f7d664e679f74b4c4d6c35.jpg 800w"
                                                        data-sizes="100vw"
                                                        alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                                        class="lazy-load js-lazy-load"
                                                        width="800" height="600">
                                            </picture>
                                        </div>
                                    </a>
                                    <div
                                            class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                        <div
                                                class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70"></div>
                                        <div
                                                class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                            <div
                                                    class="flex flex-wrap items-center text-white space-x-1">
                                                <i
                                                        class="fal fa-bed"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
1, 2 &amp; 3 bedrooms
</span></div>
                                            <div
                                                    class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                                <i
                                                        class="fal fa-house"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
369 apartments
</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                    <div
                                            class="">
                                        <a
                                                href="oxygen/index.html" class="">
                                            <div
                                                    class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight "
                                            >
                                                Oxygen
                                            </div>
                                        </a></div>
                                    <div
                                            class="font-light text-gray-600 text-sm | lg:text-base">
                                        Manchester
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                    <div
                                            class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                            Prices From
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            £285,000
                                        </div>
                                    </div>
                                    <div
                                            class="flex-1 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                            Apartments
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            369
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                        class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                    <div
                            class="">
                        <div
                                class="flex justify-center text-center mb-4 w-full | lg:hidden">
                            <a
                                    href="#"
                                    class="text-2xs tracking-wide uppercase font-bold text-primary"
                                    x-on:click.prevent="megaMenu = 'burger'"
                            >
                                <i
                                        class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                                Back
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-100' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="address-altrincham/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    The Address, Altrincham
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-200' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="exchange-preston/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    The Exchange, Preston
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-300' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="oxygen/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Oxygen, Manchester
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-400' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="uptown/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Uptown, Manchester
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-500' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="axis-tower/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    AXIS, Manchester
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-600' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="parkgate-birmingham/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Park Gate, Birmingham
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-700' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="manhattan/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Manhattan, Manchester
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-800' : megaMenu == '61', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '61' }"
                        >
                            <a
                                    href="{{route('residential.all')}}" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    All Developments
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div
                x-bind:class="{ 'pointer-events-auto' : megaMenu == '64', 'pointer-events-none delay-200' : megaMenu != '64' }"
                class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28"
        >
            <div
                    class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
                    x-cloak
                    x-bind:class="{ 'translate-y-0' : megaMenu == '64', '-translate-y-full delay-300' : megaMenu != '64' }"
            ></div>
            <div
                    class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
                    x-cloak
                    x-bind:class="{ 'opacity-100' : megaMenu == '64', 'opacity-0' : megaMenu != '64' }"
            >
                <div
                        class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                        x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '64', 'opacity-0' : megaMenu != '64' }"
                >
                    <div
                            class="max-w-sm mx-auto">
                        <div
                                class="mb-6">
                            <div
                                    class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight "
                            >
                                Featured Property
                            </div>
                        </div>
                        <div
                                class="">
                            <div
                                    class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                                <div
                                        class="relative">
                                    <div
                                            class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                        New launch
                                    </div>
                                    <a
                                            href="exchange-preston/index.html"
                                            class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37819/M0152_PoleStreet_Exterior-View01B_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37819/M0152_PoleStreet_Exterior-View01B_85fe4262e6f7d664e679f74b4c4d6c35.webp 800w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/900909d328bc7921582b85cceb7d2dbc/37819/M0152_PoleStreet_Exterior-View01B_85fe4262e6f7d664e679f74b4c4d6c35.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37819/M0152_PoleStreet_Exterior-View01B_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37819/M0152_PoleStreet_Exterior-View01B_85fe4262e6f7d664e679f74b4c4d6c35.jpg 800w"
                                                        data-sizes="100vw"
                                                        alt="M0152 Pole Street Exterior View01"
                                                        class="lazy-load js-lazy-load"
                                                        width="800" height="600">
                                            </picture>
                                        </div>
                                    </a>
                                    <div
                                            class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                        <div
                                                class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70"></div>
                                        <div
                                                class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                            <div
                                                    class="flex flex-wrap items-center text-white space-x-1">
                                                <i
                                                        class="fal fa-bed"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
1, 2 &amp; 3 bedrooms
</span></div>
                                            <div
                                                    class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                                <i
                                                        class="fal fa-house"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
200 apartments
</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                    <div
                                            class="">
                                        <a
                                                href="exchange-preston/index.html" class="">
                                            <div
                                                    class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight "
                                            >
                                                The Exchange
                                            </div>
                                        </a></div>
                                    <div
                                            class="font-light text-gray-600 text-sm | lg:text-base">
                                        Preston
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                    <div
                                            class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                            Prices From
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            £126,500
                                        </div>
                                    </div>
                                    <div
                                            class="flex-1 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                            Apartments
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            200
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                        class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                    <div
                            class="">
                        <div
                                class="flex justify-center text-center mb-4 w-full | lg:hidden">
                            <a
                                    href="#"
                                    class="text-2xs tracking-wide uppercase font-bold text-primary"
                                    x-on:click.prevent="megaMenu = 'burger'"
                            >
                                <i
                                        class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                                Back
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-100' : megaMenu == '64', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '64' }"
                        >
                            <a
                                    href="manchester/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Manchester
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-200' : megaMenu == '64', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '64' }"
                        >
                            <a
                                    href="preston/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Preston
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-300' : megaMenu == '64', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '64' }"
                        >
                            <a
                                    href="birmingham/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Birmingham
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-400' : megaMenu == '64', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '64' }"
                        >
                            <a
                                    href="altrincham/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Altrincham
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div
                x-bind:class="{ 'pointer-events-auto' : megaMenu == '58522', 'pointer-events-none delay-200' : megaMenu != '58522' }"
                class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28"
        >
            <div
                    class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
                    x-cloak
                    x-bind:class="{ 'translate-y-0' : megaMenu == '58522', '-translate-y-full delay-300' : megaMenu != '58522' }"
            ></div>
            <div
                    class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
                    x-cloak
                    x-bind:class="{ 'opacity-100' : megaMenu == '58522', 'opacity-0' : megaMenu != '58522' }"
            >
                <div
                        class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                        x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '58522', 'opacity-0' : megaMenu != '58522' }"
                >
                    <div
                            class="max-w-sm mx-auto">
                        <div
                                class="mb-6">
                            <div
                                    class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight "
                            >
                                The Address
                            </div>
                        </div>
                        <div
                                class="">
                            <div
                                    class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                                <div
                                        class="relative">
                                    <div
                                            class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                        Best Place to Live winner
                                    </div>
                                    <a
                                            href="address-altrincham/index.html"
                                            class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/1a140c58d87d3ba560c3bf179d785906/37905/New-Hero-Building-Image_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/1a140c58d87d3ba560c3bf179d785906/37905/New-Hero-Building-Image_85fe4262e6f7d664e679f74b4c4d6c35.webp 800w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/1a140c58d87d3ba560c3bf179d785906/37905/New-Hero-Building-Image_85fe4262e6f7d664e679f74b4c4d6c35.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/1a140c58d87d3ba560c3bf179d785906/37905/New-Hero-Building-Image_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/1a140c58d87d3ba560c3bf179d785906/37905/New-Hero-Building-Image_85fe4262e6f7d664e679f74b4c4d6c35.jpg 800w"
                                                        data-sizes="100vw"
                                                        alt="Front CGI"
                                                        class="lazy-load js-lazy-load"
                                                        width="800" height="600">
                                            </picture>
                                        </div>
                                    </a>
                                    <div
                                            class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                        <div
                                                class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70"></div>
                                        <div
                                                class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                            <div
                                                    class="flex flex-wrap items-center text-white space-x-1">
                                                <i
                                                        class="fal fa-bed"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
1 &amp; 2 Bedrooms
</span></div>
                                            <div
                                                    class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                                <i
                                                        class="fal fa-house"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
36 apartments
</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                    <div
                                            class="">
                                        <a
                                                href="address-altrincham/index.html" class="">
                                            <div
                                                    class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight "
                                            >
                                                The Address
                                            </div>
                                        </a></div>
                                    <div
                                            class="font-light text-gray-600 text-sm | lg:text-base">
                                        Altrincham
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                    <div
                                            class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                            Prices From
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            £259,000
                                        </div>
                                    </div>
                                    <div
                                            class="flex-1 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                            Apartments
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            36
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                        class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                    <div
                            class="">
                        <div
                                class="flex justify-center text-center mb-4 w-full | lg:hidden">
                            <a
                                    href="#"
                                    class="text-2xs tracking-wide uppercase font-bold text-primary"
                                    x-on:click.prevent="megaMenu = 'burger'"
                            >
                                <i
                                        class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                                Back
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-100' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }"
                        >
                            <a
                                    href="news/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    News
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-200' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }"
                        >
                            <a
                                    href="construction-updates/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Construction updates
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-300' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }"
                        >
                            <a
                                    href="guides/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Guides & downloads
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-400' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }"
                        >
                            <a
                                    href="investment-tools/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Investment tools
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-500' : megaMenu == '58522', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '58522' }"
                        >
                            <a
                                    href="faqs/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    FAQs
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div
                x-bind:class="{ 'pointer-events-auto' : megaMenu == '66', 'pointer-events-none delay-200' : megaMenu != '66' }"
                class="absolute top-0 left-0 w-full z-40 transition pt-32 pb-8 pointer-events-none | lg:pb-0 | lg:pt-28"
        >
            <div
                    class="absolute top-0 left-0 w-full h-full transform transition ease-smooth-out duration-700 z-0 bg-white -translate-y-full"
                    x-cloak
                    x-bind:class="{ 'translate-y-0' : megaMenu == '66', '-translate-y-full delay-300' : megaMenu != '66' }"
            ></div>
            <div
                    class="mx-auto w-full max-w-5xl flex flex-wrap justify-between opacity-0 transition z-40 relative"
                    x-cloak
                    x-bind:class="{ 'opacity-100' : megaMenu == '66', 'opacity-0' : megaMenu != '66' }"
            >
                <div
                        class="w-6/12 px-3 | sm:px-4 py-8 pb-16 border-r border-solid border-black border-opacity-10 opacity-0 transition ease-smooth-out duration-500 hidden | lg:block"
                        x-bind:class="{ 'opacity-100 delay-400' : megaMenu == '66', 'opacity-0' : megaMenu != '66' }"
                >
                    <div
                            class="max-w-sm mx-auto">
                        <div
                                class="mb-6">
                            <div
                                    class="font-bold font-serif-primary text-2xl text-primary-500 leading-tight "
                            >
                                Featured Property
                            </div>
                        </div>
                        <div
                                class="">
                            <div
                                    class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                                <div
                                        class="relative">
                                    <div
                                            class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                        Complete
                                    </div>
                                    <a
                                            href="axis-tower/index.html"
                                            class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/1098/2019-10-03-Axis-Long-shot-view_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/1098/2019-10-03-Axis-Long-shot-view_85fe4262e6f7d664e679f74b4c4d6c35.webp 800w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/b3c04de17f6a44befd74b25bfa739c31/1098/2019-10-03-Axis-Long-shot-view_85fe4262e6f7d664e679f74b4c4d6c35.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/1098/2019-10-03-Axis-Long-shot-view_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/1098/2019-10-03-Axis-Long-shot-view_85fe4262e6f7d664e679f74b4c4d6c35.jpg 800w"
                                                        data-sizes="100vw"
                                                        alt="2019 10 03 Axis Long shot view"
                                                        class="lazy-load js-lazy-load"
                                                        width="800" height="600">
                                            </picture>
                                        </div>
                                    </a>
                                    <div
                                            class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                        <div
                                                class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70"></div>
                                        <div
                                                class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                            <div
                                                    class="flex flex-wrap items-center text-white space-x-1">
                                                <i
                                                        class="fal fa-bed"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
1 &amp; 2 Bedrooms
</span></div>
                                            <div
                                                    class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                                <i
                                                        class="fal fa-house"></i>
                                                <span
                                                        class="text-2xs uppercase font-bold tracking-wide">
170 apartments
</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                    <div
                                            class="">
                                        <a
                                                href="axis-tower/index.html" class="">
                                            <div
                                                    class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight "
                                            >
                                                AXIS
                                            </div>
                                        </a></div>
                                    <div
                                            class="font-light text-gray-600 text-sm | lg:text-base">
                                        Manchester
                                    </div>
                                </div>
                                <div
                                        class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                    <div
                                            class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                            Prices From
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            £299,860
                                        </div>
                                    </div>
                                    <div
                                            class="flex-1 py-4 px-2">
                                        <div
                                                class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                            Apartments
                                        </div>
                                        <div
                                                class="text-primary-500 font-semibold text-sm | lg:text-base">
                                            170
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                        class="px-3 | sm:px-4 flex items-center justify-center w-full text-center | lg:text-left lg:w-6/12">
                    <div
                            class="">
                        <div
                                class="flex justify-center text-center mb-4 w-full | lg:hidden">
                            <a
                                    href="#"
                                    class="text-2xs tracking-wide uppercase font-bold text-primary"
                                    x-on:click.prevent="megaMenu = 'burger'"
                            >
                                <i
                                        class="far mt-0.5 text-sm mr-1 fa-angle-left"></i>
                                Back
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-100' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="reservation-process/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Reservation & exchange
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-200' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="build-process/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    The build
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-300' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="completion-and-aftercare/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Completion & aftercare
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-400' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="solicitors/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Solicitors
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-500' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="mortgages/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Mortgages
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-600' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="forex/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Forex & money services
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-700' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="property-management/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Property management
                                </div>
                            </a></div>
                        <div
                                class="lg:-translate-y-2 opacity-0 transform block relative w-full transition ease-smooth-out duration-1000 mb-3 | lg:mb-5"
                                x-bind:class="{ 'translate-y-0 opacity-100 delay-800' : megaMenu == '66', 'lg:-translate-y-2 delay-200 opacity-0' : megaMenu != '66' }"
                        >
                            <a
                                    href="furniture-packs/index.html" class="inline-block underlined">
                                <div
                                        class="font-normal font-serif-primary text-lg | lg:text-1-5xl text-primary-500 leading-none "
                                >
                                    Furniture packs
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="transition ease-smooth-out delay-100 duration-1000 "
            x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }"
            x-on:click="megaMenu = null, search = null">
        <div class="">
            <div class="w-full relative h-screen-fix-50 overflow-hidden bg-primary-700 flex items-end pb-20 | lg:h-screen-fix-70">
                <div class="w-full h-full absolute top-0 left-0 z-10">
                    <picture>
                        <source
                                type="image/webp"
                                srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/18240/Manchester-3_7119d0a83f49e10c8249e9824302359e.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/18240/Manchester-3_c4e709ce898a8f0a5008bd8fa82b6536.webp 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/18240/Manchester-3_7abbbb2796f27c91ef535646dc2c5299.webp 1200w"
                                sizes="100vw"
                        >
                        <img
                                src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/18240/Manchester-3_7abbbb2796f27c91ef535646dc2c5299.webp"
                                srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/18240/Manchester-3_7119d0a83f49e10c8249e9824302359e.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/18240/Manchester-3_c4e709ce898a8f0a5008bd8fa82b6536.jpg 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/18240/Manchester-3_7abbbb2796f27c91ef535646dc2c5299.jpg 1200w"
                                sizes="100vw"
                                alt="Manchester 3"
                                class=" w-full h-full object-cover object-center"
                                width="1200" height="675">
                    </picture>
                    <div
                            class="w-full h-80 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-50"></div>
                </div>
            </div>
            <div class="w-full  py-12 | lg:py-20 bg-gray-100 border-0" id="">
                <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                    <div class="px-3 | sm:px-4 w-full mb-10 text-center | lg:text-left lg:w-5/12 lg:mb-0">
                        <div class="max-w-md mx-auto | lg:mx-0"><h1 class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight ">
                                Experts in the design, construction & sale of property</h1>
                        </div>
                    </div>
                    <div
                            class="px-3 | sm:px-4 flex flex-wrap items-center justify-center space-x-4 w-full | lg:w-6/12">
                        <div class="w-full text-center mb-4"><a href="{{route('contact.us')}}"
                                    class="
transition
inline-block
relative
font-bold
py-3.5
px-6
rounded-full
group
relative
flex-shrink-0
transition
group
ease-smooth-out
duration-700
transform
focus:outline-none
focus:shadow-outline
text-2-5xs
uppercase
tracking-wide
transform
hover:-translate-y-1
lg:text-2xs
lg:py-4
lg:px-10
bg-primary-500 text-white "
                            >
<span
        class="relative z-20"
>
Request more information
</span>
                                <div
                                        class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                    <div
                                            class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                </div>
                                <div
                                        class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full"></div>
                            </a></div>
                        <div
                                class="w-full flex justify-center">
                            <div
                                    class="flex flex-wrap items-center space-x-2">
                                <div
                                        class="flex flex-wrap">
                                    <div
                                            class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white ">
                                        <picture>
                                            <source
                                                    type="image/webp"
                                                    data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                                    data-sizes="100vw"
                                            >
                                            <img
                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                    data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp"
                                                    data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                                    data-sizes="100vw"
                                                    alt="Mallam Grant"
                                                    class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                                    width="70" height="70">
                                        </picture>
                                    </div>
                                    <div
                                            class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white -ml-4">
                                        <picture>
                                            <source
                                                    type="image/webp"
                                                    data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                                    data-sizes="100vw"
                                            >
                                            <img
                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                    data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.webp"
                                                    data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                                    data-sizes="100vw"
                                                    alt="Ginny Wai 2"
                                                    class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                                    width="70" height="70">
                                        </picture>
                                    </div>
                                </div>
                                <div
                                        class="font-light text-gray-600 text-xs w-56">
                                    Fill out our form, and one of our property experts will get in touch.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($teamcats as $teamcat)
            <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
                <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                    <div class="w-full mx-auto max-w-lg mb-5 text-center | lg:mb-10">
                        <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                            {{$teamcat->category}}
                        </h2>
                    </div>
                    <div class="w-full flex flex-wrap -mb-10 | lg:-mb-20">
                        @foreach($teams as $team)
                            @if($team->category==$teamcat->category)
                        <div class="px-3 | sm:px-4 mb-10 w-full | sm:w-6/12 | lg:mb-20 lg:w-4/12 | xl:w-3/12">
                            <div class="w-full transform transition ease-smooth-out duration-500 | hover:-translate-y-2">
                                <a href="{{url('team/detail/'.$team->id)}}" class="relative block bg-primary-600">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 133.25%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <source type="image/webp"
                                                    data-srcset="{{Storage::disk('local')->url('/Team/'.$team->image)}} 600w"
                                                    data-sizes="100vw">
                                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27600%27%20height%3D%27800%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                    data-src="{{Storage::disk('local')->url('/Team/'.$team->image)}}"
                                                    data-srcset="{{Storage::disk('local')->url('/Team/'.$team->image)}} 600w"
                                                    data-sizes="100vw"
                                                    alt="{{$team->name}}"
                                                    class="lazy-load js-lazy-load"
                                                    width="600" height="800">
                                        </picture>
                                    </div>
                                </a>
                                <div class="mt-6 text-center">
                                    <div class="">
                                        <a href="#" class="block w-full">
                                            <div class="font-bold font-serif-primary text-lg | sm:text-xl | xl:text-2xl text-primary-500 leading-tight ">
                                                {{$team->name}}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="font-light text-gray-600 text-sm | lg:text-base">
                                        {{$team->designation}}

                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div
                class="w-full relative py-0 bg-primary-600 border-0"
                id=""
        >
            <div
                    class="w-full h-full absolute top-0 left-0 z-10 opacity-10">
                <picture>
                    <source
                            type="image/webp"
                            data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_616b2c32fb7bb9679ad560fc61635847.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_5ae402c9837860cd6e4f65e304b3a5fa.webp 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.webp 1200w"
                            data-sizes="100vw"
                    >
                    <img
                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%271200%27%20height%3D%27798%27%20style%3D%27background%3Atransparent%27%2F%3E"
                            data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.webp"
                            data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_616b2c32fb7bb9679ad560fc61635847.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_5ae402c9837860cd6e4f65e304b3a5fa.jpg 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.jpg 1200w"
                            data-sizes="100vw"
                            alt="2019 10 25 contact us resized"
                            class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                            width="1200" height="798">
                </picture>
            </div>
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 relative z-20 py-20">
                <div
                        class="w-full px-3 | sm:px-4">
                    <div
                            class="flex flex-wrap justify-center mb-5">
                        <div
                                class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
                            <picture>
                                <source
                                        type="image/webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                        data-sizes="100vw"
                                >
                                <img
                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                        data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                        data-sizes="100vw"
                                        alt="Mallam Grant"
                                        class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                        width="70" height="70">
                            </picture>
                        </div>
                        <div
                                class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
                            <picture>
                                <source
                                        type="image/webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                        data-sizes="100vw"
                                >
                                <img
                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                        data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                        data-sizes="100vw"
                                        alt="Ginny Wai 2"
                                        class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                        width="70" height="70">
                            </picture>
                        </div>
                        <div
                                class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
                            <picture>
                                <source
                                        type="image/webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                        data-sizes="100vw"
                                >
                                <img
                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                        data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                        data-sizes="100vw"
                                        alt="Conor Armstrong"
                                        class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                        width="70" height="70">
                            </picture>
                        </div>
                    </div>
                    <div
                            class="max-w-lg mx-auto text-center w-full | lg:max-w-2xl">
                        <div
                                class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-white leading-tight "
                        >
                            Want to know more? Get in touch with our property experts today
                        </div>
                    </div>
                    <div
                            class="w-full flex flex-wrap justify-center space-x-4 mt-10">
                        <div
                                class=""><a
                                    href="{{route('contact.us')}}"
                                    class="
transition
inline-block
relative
font-bold
py-3.5
px-6
rounded-full
group
relative
flex-shrink-0
transition
group
ease-smooth-out
duration-700
transform
focus:outline-none
focus:shadow-outline
text-2-5xs
uppercase
tracking-wide
transform
hover:-translate-y-1
lg:text-2xs
lg:py-4
lg:px-10
bg-primary-600 text-white"
                            >
<span
        class="relative z-20"
>
Get in touch
</span>
                                <div
                                        class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                    <div
                                            class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                </div>
                                <div
                                        class="absolute top-0 left-0 z-0 border border-solid border-primary-600 w-full h-full rounded-full"></div>
                            </a></div>
                        <div
                                class=""><a
                                    href="index.html"
                                    class="
transition
inline-block
relative
font-bold
py-3.5
px-6
rounded-full
group
relative
flex-shrink-0
transition
group
ease-smooth-out
duration-700
transform
focus:outline-none
focus:shadow-outline
text-2-5xs
uppercase
tracking-wide
transform
hover:-translate-y-1
lg:text-2xs
lg:py-4
lg:px-10
text-white | hover:text-primary | focus:outline-none focus:shadow-outline relative"
                            >
<span
        class="relative z-20"
>
Our team
</span>
                                <div
                                        class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                    <div
                                            class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-white transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                </div>
                                <div
                                        class="absolute top-0 left-0 z-0 border border-solid border-white w-full h-full rounded-full"></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

