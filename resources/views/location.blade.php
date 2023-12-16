@extends('layouts.master')
@section('content')
    <div class="w-full relative h-screen-fix-50 overflow-hidden bg-primary-700 flex items-end pb-20 | lg:h-screen-fix-70">
        <div class="w-full h-full absolute top-0 left-0 z-10">
            <picture>
                <source type="image/webp"
                        srcset="{{Storage::disk('local')->url('locations/'.$loc->image)}} 1200w"
                        sizes="100vw">
                <img
                        src="{{Storage::disk('local')->url('locations/'.$loc->image)}}"
                        srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37814/Preston-Square_7119d0a83f49e10c8249e9824302359e.jpg 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37814/Preston-Square_c4e709ce898a8f0a5008bd8fa82b6536.jpg 800w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37814/Preston-Square_7abbbb2796f27c91ef535646dc2c5299.jpg 1200w"
                        sizes="100vw"
                        alt="Preston Square"
                        class=" w-full h-full object-cover object-center"
                        width="1200" height="675">
            </picture>
            <div class="w-full h-80 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-50"></div>
        </div>
    </div>
    <div class="w-full  py-12 | lg:py-20 bg-gray-100 border-0" id="">
        <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
            <div class="px-3 | sm:px-4 w-full mb-10 text-center | lg:text-left lg:w-5/12 lg:mb-0">
                <div class="max-w-md mx-auto | lg:mx-0"><h1 class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight ">
                        Why invest in Preston?</h1></div>
                <div
                        class="w-full mt-2 max-w-lg mx-auto | lg:mx-0"><p
                            class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                        {{$loc->detail}}
                    </p></div>
            </div>
            <div class="px-3 | sm:px-4 flex flex-wrap items-center justify-center space-x-4 w-full | lg:w-6/12">
                <div class="w-full text-center mb-4"><a href="preston-investment-guide/index.html" class="transition inline-block relative font-bold py-3.5 px-6 rounded-full group relative flex-shrink-0 transition group ease-smooth-out duration-700 transform focus:outline-none focus:shadow-outline text-2-5xs uppercase tracking-wide transform hover:-translate-y-1 lg:text-2xs lg:py-4 lg:px-10 bg-primary-500 text-white "><span class="relative z-20">
                    Download our guide to Preston
                    </span>
                        <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                            <div class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                        </div>
                        <div class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full"></div>
                    </a>
                </div>
                <div class="w-full flex justify-center">
                    <div class="flex flex-wrap items-center space-x-2">
                        <div class="flex flex-wrap">
                            <div class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white ">
                                <picture>
                                    <source type="image/webp"
                                            data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                            data-sizes="100vw"
                                    >
                                    <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                            data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp"
                                            data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                            data-sizes="100vw"
                                            alt="Mallam Grant"
                                            class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                            width="70" height="70">
                                </picture>
                            </div>
                            <div class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white -ml-4">
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
                        <div class="font-light text-gray-600 text-xs w-56">
                            Fill out our form, and one of our property experts will get in touch.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full relative bg-white" x-data="{ active: null, scrollActive: null }"
            x-on:scroll.window="
            if ( document.getElementById('section-54867').getBoundingClientRect().top <= 20 ) {active = '54867',scrollActive = '54867'}
if ( document.getElementById('section-54873').getBoundingClientRect().top <= 20 ) {
active = '54873',
scrollActive = '54873'
}
if ( document.getElementById('section-54876').getBoundingClientRect().top <= 20 ) {
active = '54876',
scrollActive = '54876'
}
if ( document.getElementById('section-40662').getBoundingClientRect().top <= 20 ) {
active = '40662',
scrollActive = '40662'
}
if ( document.getElementById('section-40667').getBoundingClientRect().top <= 20 ) {
active = '40667',
scrollActive = '40667'
}
if ( document.getElementById('section-54877').getBoundingClientRect().top <= 20 ) {
active = '54877',
scrollActive = '54877'
}
"
    >
        <div class="sticky top-0 left-0 bg-gray-100 shadow-xl z-20 transform -translate-y-1 hidden | xl:flex">
            <div class="w-auto px-12 flex items-center flex-shrink-0 bg-gray-100">
                <img src="dist/images/logo-primary.png" alt="" class="w-12 h-auto"></div>
            <a href="#" class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                    x-on:click.prevent="active = '54867', document.getElementById('section-54867').scrollIntoView({ behavior: 'smooth' })"
                    x-bind:class="{ 'bg-primary-600 text-white' : scrollActive == '54867', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '54867' }">
<span>
Guide
</span>
            </a>
            <a
                    href="#"
                    class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                    x-on:click.prevent="active = '54876', document.getElementById('section-54876').scrollIntoView({ behavior: 'smooth' })"
                    x-bind:class="{ 'bg-primary-600 text-white' : scrollActive == '54876', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '54876' }"
            >
<span>
Preston&#039;s Growth
</span>
            </a>
            <a
                    href="#"
                    class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                    x-on:click.prevent="active = '40662', document.getElementById('section-40662').scrollIntoView({ behavior: 'smooth' })"
                    x-bind:class="{ 'bg-primary-600 text-white' : scrollActive == '40662', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '40662' }"
            >
<span>
Why Invest
</span>
            </a>
            <a
                    href="#"
                    class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                    x-on:click.prevent="active = '40667', document.getElementById('section-40667').scrollIntoView({ behavior: 'smooth' })"
                    x-bind:class="{ 'bg-primary-600 text-white' : scrollActive == '40667', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '40667' }"
            >
<span>
Properties
</span>
            </a>
            <a
                    href="#"
                    class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                    x-on:click.prevent="active = '54877', document.getElementById('section-54877').scrollIntoView({ behavior: 'smooth' })"
                    x-bind:class="{ 'bg-primary-600 text-white' : scrollActive == '54877', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '54877' }"
            >
<span>
Location
</span>
            </a>
        </div>
        <div class="w-full relative z-10">
            <div class="w-full" id="section-54867">
                <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
                    <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between"
                            x-data="imageSlideshowText()"
                            x-init="imageSlideshowTextInit(54867)">
                        <div class="px-3 | sm:px-4 w-full mb-10 | sm:w-8/12 sm:mx-auto | lg:mx-0 lg:mb-0 lg:w-5/12">
                            <div class="relative">
                                <div class="absolute top-0 left-0 z-0 bg-primary-600 w-full h-full -ml-2 -mt-2 |  lg:-ml-5 lg:-mt-5"></div>
                                <div class="w-full relative z-10 carousel--pagination-white-dots | js-slideshow-54867">
                                    <div class="w-full">
                                        <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
                                            <picture class="absolute top-0 left-0 w-full h-full ">
                                                <source type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43190/Exchange-Guide-Website-Image_6037a6716a6a4e90c973e9b5af84d444.webp 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43190/Exchange-Guide-Website-Image_642aae02fa1a1ab86dc7d4111aae8be7.webp 600w"
                                                        data-sizes="100vw"
                                                >
                                                <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27600%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/900909d328bc7921582b85cceb7d2dbc/43190/Exchange-Guide-Website-Image_642aae02fa1a1ab86dc7d4111aae8be7.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43190/Exchange-Guide-Website-Image_6037a6716a6a4e90c973e9b5af84d444.jpg 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43190/Exchange-Guide-Website-Image_642aae02fa1a1ab86dc7d4111aae8be7.jpg 600w"
                                                        data-sizes="100vw"
                                                        alt="Exchange Guide Website Image"
                                                        class="lazy-load js-lazy-load"
                                                        width="600" height="600">
                                            </picture>
                                        </div>
                                    </div>
                                    <div
                                            class="w-full">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 100%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37813/Preston-Market_6037a6716a6a4e90c973e9b5af84d444.webp 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37813/Preston-Market_642aae02fa1a1ab86dc7d4111aae8be7.webp 600w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27600%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/900909d328bc7921582b85cceb7d2dbc/37813/Preston-Market_642aae02fa1a1ab86dc7d4111aae8be7.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37813/Preston-Market_6037a6716a6a4e90c973e9b5af84d444.jpg 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37813/Preston-Market_642aae02fa1a1ab86dc7d4111aae8be7.jpg 600w"
                                                        data-sizes="100vw"
                                                        alt="Preston Market"
                                                        class="lazy-load js-lazy-load"
                                                        width="600" height="600">
                                            </picture>
                                        </div>
                                    </div>
                                    <div
                                            class="w-full">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 100%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43513/Preston-1_6037a6716a6a4e90c973e9b5af84d444.webp 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43513/Preston-1_642aae02fa1a1ab86dc7d4111aae8be7.webp 600w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27600%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/900909d328bc7921582b85cceb7d2dbc/43513/Preston-1_642aae02fa1a1ab86dc7d4111aae8be7.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43513/Preston-1_6037a6716a6a4e90c973e9b5af84d444.PNG 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/43513/Preston-1_642aae02fa1a1ab86dc7d4111aae8be7.PNG 600w"
                                                        data-sizes="100vw"
                                                        alt="Preston 1"
                                                        class="lazy-load js-lazy-load"
                                                        width="600" height="600">
                                            </picture>
                                        </div>
                                    </div>
                                    <div
                                            class="w-full">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 100%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/38057/UCLAN_6037a6716a6a4e90c973e9b5af84d444.webp 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/38057/UCLAN_642aae02fa1a1ab86dc7d4111aae8be7.webp 600w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27600%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/900909d328bc7921582b85cceb7d2dbc/38057/UCLAN_642aae02fa1a1ab86dc7d4111aae8be7.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/38057/UCLAN_6037a6716a6a4e90c973e9b5af84d444.jpg 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/38057/UCLAN_642aae02fa1a1ab86dc7d4111aae8be7.jpg 600w"
                                                        data-sizes="100vw"
                                                        alt="UCLAN"
                                                        class="lazy-load js-lazy-load"
                                                        width="600" height="600">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                                class="px-3 | sm:px-4 w-full | lg:w-6/12">
                            <div
                                    class="text-xs text-gray-600 font-semibold tracking-wide uppercase w-full text-center mb-2 | lg:mb-5">
                                Download Preston Guide
                            </div>
                            <div class="mx-auto max-w-sm w-full text-center mb-5 | lg:max-w-lg"><h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3-5xl text-primary-500 leading-tight ">
                                    {{$loc->guide_title}}
                                </h2></div>
                            <div class="w-full mx-auto text-center max-w-md | lg:max-w-xl"><p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                {!! $loc->guide_description !!}
                            </div>
                            <div
                                    class="w-full text-center mt-10"><a
                                        href="preston-investment-guide/index.html"
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
Download our guide to Preston
</span>
                                    <div
                                            class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                    </div>
                                    <div
                                            class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full"></div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="w-full" id="section-54872">
                <div
                        class="w-full  py-12 | lg:py-28 bg-gray-100 border-0"
                        id=""
                >
                    <div
                            class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between"
                    >
                        <div
                                class="w-full mx-auto max-w-xl px-3 | sm:px-4 | lg:max-w-3xl"
                        >
                            <div
                                    class="w-full block relative overflow-hidden"
                            >
                                <h2 class="block font-serif-primary font-bold leading-tight mb-3 text-primary-500 text-2xl | lg:text-3xl | xl:text-3-5xl | 2xl:text-3xl">
                                    A booming economy</h2>
                                <p
                                        class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                    Preston is the largest city in Lancashire, a county that’s generating £23bn in
                                    Gross Value Added (GVA) annually, with more than 45,000 registered businesses
                                    and around 620,000 jobs.</p>
                                <p
                                        class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                    The city’s proximity to its economic powerhouse neighbours has set Preston on
                                    its own path to prosperity. Attracting 70,000 commuters between 2001 and 2011, a
                                    figure that continues to grow, it’s fast become an attractive place to work and
                                    live, with young professionals pushing up demand for quality rental
                                    properties.</p>
                                <p
                                        class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                    The city now boasts an extremely strong employment rate of 77.5%, 3.1% higher
                                    than the national average.</p></div>
                        </div>
                        <div
                                class="w-full flex flex-wrap justify-center items-center mt-16 space-x-4">
                            <div
                                    class=""><a
                                        href="exchange-preston/index.html"
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
Discover The Exchange
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
                                    class="mt-5 | lg:mt-0">
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
            </div>
            <div class="w-full" id="section-54876">
                <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
                    <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                        {!! $loc->growth !!}
                    </div>
                </div>
            </div>
            <div class="w-full" id="section-40662">
                <div class="w-full  py-12 | lg:py-20 bg-primary-600 border-0" id="">
                    <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                        <div class="w-full mx-auto max-w-lg px-3 | sm:px-4 mb-10 text-center | lg:mb-16"><h2 class="font-bold font-serif-primary text-2xl | lg:text-3xl text-white leading-tight ">
                                Why invest in Preston
                            </h2>
                        </div>
                        <div class="w-full flex flex-wrap -mb-10 | lg:mb-0">
                            @foreach($loc->whyinvests as $whyinvest)
                            <div class="block w-full px-3 | sm:px-4 mb-10 sm:w-1/2 xl:mb-0 xl:w-1/4 text-center">
                                <div class="font-serif-primary inline-flex items-center font-bold text-2xl sm:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl text-white leading-tight">
                                    <span class="text-xl mr-4">
                                    <i class="{{$whyinvest->icon}}"></i>
                                    </span>
                                    {{$whyinvest->value}}
                                </div>
                                <div class="font-sans-primary text-gray-200 text-base mx-auto max-w-sm px-2 lg:px-8">
                                    {{$whyinvest->title}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div
                                class="w-full mt-10 flex flex-wrap justify-center items-center space-x-8 | lg:mb-16">
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
text-white | hover:text-primary | focus:outline-none focus:shadow-outline "
                                >
<span
        class="relative z-20"
>
Get in touch
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
            <div
                    class="w-full" id="section-40667">
                <div
                        class="w-full  py-12 | lg:py-28 bg-gray-100 border-0"
                        id=""
                >
                    <div
                            class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                        <div
                                class="w-full mx-auto max-w-lg mb-5 text-center | lg:mb-10"><h2
                                    class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight "
                            >
                                Our new-build Preston property portfolio</h2></div>
                    </div>
                    <div
                            class="ml-auto w-11.5/12 md:w-11.5/12 | lg:w-11.5/12 | xl:w-11/12 | 2xl:w-10.5/12"
                            x-data="carouselProperties()"
                            x-init="carouselPropertiesInit(40667)"
                    >
                        <div
                                class="w-full | js-slideshow-40667">
                            <div
                                    class="px-3 | sm:px-4 mt-2 mb-10 w-10/12 | sm:w-7/12  | lg:w-5/12 | xl:w-2/7">
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
                                                PKR126,500
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
                                    <div
                                            class="p-3 text-center"><a
                                                href="exchange-preston/index.html"
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
View Development
</span>
                                            <div
                                                    class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                                <div
                                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                            </div>
                                            <div
                                                    class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full"></div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                            class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                        <div
                                class="w-full mt-10 flex flex-wrap justify-center items-center space-x-8">
                            <div
                                    class=""><a
                                        href="{{route('residential.all')}}"
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
Browse all properties
</span>
                                    <div
                                            class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                    </div>
                                    <div
                                            class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full"></div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="w-full" id="section-54877">
                <div
                        class="w-full  py-12 | lg:py-28 bg-white border-0"
                        id=""
                >
                    <div
                            class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                        <div
                                class="w-full mx-auto max-w-lg mb-5 text-center px-3 | sm:px-4 | lg:mb-10"><h2
                                    class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight "
                            >
                                Location</h2></div>
                        <div
                                class="w-full px-3 | sm:px-4">
                            <script src="api.mapbox.com/mapbox-gl-js/v0.43.0/mapbox-gl.js"></script>
                            <link
                                    href="api.mapbox.com/mapbox-gl-js/v0.43.0/mapbox-gl.css" rel="stylesheet"/>
                            <div
                                    id="map" class="w-full h-120"></div>
                            <script>mapboxgl.accessToken = "pk.eyJ1IjoiYWxsaWFuY2VpbnZlc3RtZW50cyIsImEiOiJjazJlanpsbHAwNjQzM2hzNTN4N3M1ZXc0In0.W6c2yfeIjha-L4duU076DA";
                                var map = new mapboxgl.Map({
                                    container: "map",
                                    style: "mapbox://styles/mapbox/light-v9",
                                    minZoom: 12,
                                    center: [-2.6992717, 53.7593363]
                                });
                                map.addControl(new mapboxgl.FullscreenControl());
                                var marker1 = new mapboxgl.Marker().setLngLat([-2.6935280980251, 53.760801117012]).addTo(map);</script>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="w-full" id="section-40668">
                <div
                        class="w-full  py-12 | lg:py-28 bg-white border-0"
                        id=""
                >
                    <div
                            class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center flex-col justify-between  | lg:flex-row-reverse">
                        <div
                                class="px-3 | sm:px-4 w-full | sm:w-9/12 sm:mx-auto | lg:mx-0 lg:w-5/12">
                            <div
                                    class="relative">
                                <div
                                        class="absolute top-0 left-0 z-0 bg-primary-600 w-full h-full -ml-2 -mt-2 lg:-ml-5 lg:-mt-5"></div>
                                <div
                                        class="w-full relative z-10">
                                    <div
                                            class="relative overflow-hidden w-full"
                                            style="padding-top: 100%;"
                                    >
                                        <picture
                                                class="absolute top-0 left-0 w-full h-full ">
                                            <source
                                                    type="image/webp"
                                                    data-srcset="{{Storage::disk('local')->url('location-image/'.$loc->location_image)}} 800w"
                                                    data-sizes="100vw"
                                            >
                                            <img
                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27800%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                    data-src="{{Storage::disk('local')->url('location-image/'.$loc->location_image)}}"
                                                    data-srcset="{{Storage::disk('local')->url('location-image/'.$loc->location_image)}} 800w"
                                                    data-sizes="100vw"
                                                    alt="2019 10 22 Manchester 8"
                                                    class="lazy-load js-lazy-load"
                                                    width="800" height="800">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                                class="px-3 | sm:px-4 w-full mt-10 | sm:w-8/12 sm:mx-auto | lg:mx-0 lg:mt-0 lg:w-6/12">
                            <div
                                    class="max-w-sm w-full mb-2 | lg:mb-5 "><h2
                                        class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight "
                                >{{$loc->location_title}}</h2></div>
                            <div
                                    class="w-full max-w-lg "><p
                                        class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                    {{$loc->location_description}}
                                </p></div>
                            <div
                                    class="w-full mt-5 | lg:mt-10"><a
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
bg-primary-500 text-white "
                                >
<span
        class="relative z-20"
>
Request info
</span>
                                    <div
                                            class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                    </div>
                                    <div
                                            class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full"></div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

