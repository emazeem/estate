@extends('layouts.master')
@section('content')
    <?php
    $settings  = \App\Models\Settings::where('page','home')->get();
    $point1  = $settings->where('slug','a-portfolio-worth-over')->first();
    $point2  = $settings->where('slug','4-continents')->first();
    $point3  = $settings->where('slug','full-service')->first();
    $point4  = $settings->where('slug','experience')->first();
    $content1  = $settings->where('slug','home-content-1')->first();
    $content2  = $settings->where('slug','home-content-2')->first();
    $calch  = $settings->where('slug','calculator-heading')->first();
    $calcp  = $settings->where('slug','calculator-details')->first();
    $calcimg  = $settings->where('slug','calculator-background')->first();
    $hpth  = $settings->where('slug','homepage-team-heading')->first();
    $hptd  = $settings->where('slug','homepage-team-description')->first();
    $hpts1  = $settings->where('slug','homepage-team-slider-1')->first();
    $hpts2  = $settings->where('slug','homepage-team-slider-2')->first();
    $hpts3 = $settings->where('slug','homepage-team-slider-3')->first();
    $avatar1 = $settings->where('slug','avatar-1')->first();
    $avatar2 = $settings->where('slug','avatar-2')->first();


    ?>
    <div class="">
        <div class="relative w-full h-screen-fix-90 | lg:h-screen-90  | xl:h-screen"
             x-data="heroLargeSlideshow()" x-init="heroLargeSlideshowInit(48549)">
            <div class="carousel--pagination-white-bars h-screen-fiz-90 w-full relative z-10 | xl:h-screen | js-slideshow-48549">
                @foreach($sliders as $slider)
                    <div class="w-full bg-primary-800 h-screen-fix-90 | xl:h-screen">
                        <div class="w-full relative h-full flex items-end pb-24 | lg:pb-10">
                            <div class="w-full h-full absolute top-0 left-0 z-10">
                                <div class="w-full h-full">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{Storage::disk('local')->url('sliders/'.$slider->image)}} 1800w"
                                                sizes="100vw">
                                        <img src="{{Storage::disk('local')->url('sliders/'.$slider->image)}}"
                                             sizes="100vw" alt="AXIS Hero"
                                             class=" w-full h-full object-cover object-center" width="1800"
                                             height="1013">
                                    </picture>
                                </div>
                                <div class="w-full h-120 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-10 opacity-90">
                                </div>
                                <div class="w-full h-120 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-70">
                                </div>
                            </div>
                            <div class="w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 mx-auto relative z-20">
                                <div class="w-full px-3 | sm:px-4">
                                    <div class="max-w-lg">
                                        <h1 class="font-bold font-serif-primary text-1-5xl lg:text-3xl xl:text-3-5xl text-white leading-tight ">
                                            {{$slider->title}}
                                        </h1>
                                    </div>
                                    <div class="mt-4 lg:mt-8">
                                        <a href="{{url($slider->link_url)}}"
                                           class="text-white text-xs pb-0.5 tracking-wide font-bold uppercase underlined underlined--visible">
                                            {{$slider->link_name}}
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div
                    class="absolute bottom-0 left-0 z-30 mx-6 mb-8 space-x-2 | sm:mx-12 | lg:mb-7 lg:mx-12 lg:right-0 lg:left-auto">
                <a href="#" aria-label="Previous Slide"
                   class="w-12 h-12 border border-solid border-white inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 | hover:scale-90 hover:border-transparent hover:bg-white hover:bg-opacity-10  | lg:w-14 lg:h-14 | js-slideshow-48549__prev">
                    <i class="fal fa-long-arrow-left mr-0.5 mt-0.5"></i>
                </a>
                <a href="#" aria-label="Next Slide"
                   class="w-12 h-12 border border-solid border-white inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 | hover:scale-90 hover:border-transparent hover:bg-white hover:bg-opacity-10 | lg:w-14 lg:h-14 | js-slideshow-48549__next">
                    <i class="fal fa-long-arrow-right ml-0.5 mt-0.5"></i>
                </a></div>
        </div>
        <div class="w-full  py-0 bg-primary-500 border-0" id="">
            <div class="w-full flex flex-wrap">
                <div
                        class="px-3 | sm:px-4 w-full py-6 flex items-center justify-center text-center border-b lg:border-r border-solid border-white border-opacity-10 | sm:w-1/2 | xl:border-b-none xl:flex-1 lgxl:w-auto xl:py-10">
                    <div class="">
                        <div class="font-sans-primary text-xs font-semibold tracking-wide uppercase text-white mb-1">
                            {{$point1->name}}
                        </div>
                        <div class="font-serif-primary font-bold text-white text-xl mx-auto max-w-xs leading-tight">
                            {{$point1->value}}
                        </div>
                    </div>
                </div>
                <div
                        class="px-3 | sm:px-4 w-full py-6 flex items-center justify-center text-center border-b lg:border-r border-solid border-white border-opacity-10 | sm:w-1/2 | xl:border-b-none xl:flex-1 lgxl:w-auto xl:py-10">
                    <div class="">
                        <div
                                class="font-sans-primary text-xs font-semibold tracking-wide uppercase text-white mb-1">
                            {{$point2->name}}

                        </div>
                        <div
                                class="font-serif-primary font-bold text-white text-xl mx-auto max-w-xs leading-tight">
                            {{$point2->value}}

                        </div>
                    </div>
                </div>
                <div
                        class="px-3 | sm:px-4 w-full py-6 flex items-center justify-center text-center border-b lg:border-r border-solid border-white border-opacity-10 | sm:w-1/2 | xl:border-b-none xl:flex-1 lgxl:w-auto xl:py-10">
                    <div class="">
                        <div
                                class="font-sans-primary text-xs font-semibold tracking-wide uppercase text-white mb-1">
                            {{$point3->name}}

                        </div>
                        <div
                                class="font-serif-primary font-bold text-white text-xl mx-auto max-w-xs leading-tight">
                            {{$point3->value}}
                        </div>
                    </div>
                </div>
                <div
                        class="px-3 | sm:px-4 w-full py-6 flex items-center justify-center text-center  | sm:w-1/2 | xl:border-b-none xl:flex-1 lgxl:w-auto xl:py-10">
                    <div class="">
                        <div
                                class="font-sans-primary text-xs font-semibold tracking-wide uppercase text-white mb-1">
                            {{$point4->name}}

                        </div>
                        <div
                                class="font-serif-primary font-bold text-white text-xl mx-auto max-w-xs leading-tight">
                            {{$point4->value}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full  pt-12 | lg:pt-28 bg-white border-0" id="">
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap justify-between">
                <div class="inline-flex flex-wrap px-3 | sm:px-4 mb-4 xl:mb-0 w-full sm:ml-1/12 xl:ml-0 sm:w-7/12 lg:w-6/12 xl:w-6/12 2xl:w-5/12">
                    {!! $content1->value !!}
                </div>
                <div class="inline-flex flex-wrap px-3 | sm:px-4  w-full sm:w-9/12 sm:ml-1/12 xl:ml-0 lg:w-8/12 xl:w-6/12 2xl:w-6/12">
                    {!! $content2->value !!}
                </div>
                <style>
                    h1{
                        font-size: 30px;
                    }
                </style>
            </div>
        </div>
        <div class="w-full  pt-12 | lg:pt-28 bg-white border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between"
                 x-data="imageSlideshowText()" x-init="imageSlideshowTextInit(49407)">
                <div class="px-3 | sm:px-4 w-full mb-10 | | sm:w-8/12 sm:mx-auto | lg:mx-0 lg:mb-0 lg:w-5/12">
                    <div class="relative">
                        <div class="absolute top-0 left-0 z-0 bg-primary-600 w-full h-full -ml-2 -mt-2 | lg:-ml-5 lg:-mt-5">
                        </div>
                        <div class="w-full relative z-10 carousel--pagination-white-dots | js-slideshow-49407">
                            @foreach($latestres->images as $image)
                            <div class="w-full">
                                <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source type="image/webp"
                                                data-srcset="uploads/images/img1.jpg"
                                                data-sizes="100vw">
                                        <img src="{{Storage::disk('local')->url('/residential/'.$image->image)}}"
                                             alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                             class="lazy-load js-lazy-load" width="600" height="600">
                                    </picture>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="px-3 | sm:px-4 w-full inline-flex flex-wrap justify-center | lg:w-7/12 | xl:w-6/12">
                    <div class="mx-auto w-full text-left mb-5 | sm:max-w-md | lg:max-w-md lg:text-center lg:mb-10 | xl:max-w-lg">
                        <h2 class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight ">
                            {{$latestres->title}}
                        </h2>
                    </div>
                    <div class="w-auto mx-auto flex flex-wrap justify-start | sm:max-w-4xl sm:justify-center sm:-mb-6">
                        @foreach($latestres->features as $feature)
                        <div class="flex flex-wrap justify-start  mb-6 space-x-2 | sm:space-x-4 sm:w-5/12 sm:justify-start sm:mb-10 | md:w-6/12">
                            <div class="inline-flex text-primary-500 flex-shrink-0">
                                <i class="{{$feature->icon}}"></i></div>
                            <div class="inline-block flex-1">
                                <div class="w-full text-xs font-bold text-primary-500 tracking-wide uppercase mb-1">
                                    {{$feature->title}}
                                </div>
                                <div class="w-full font-light text-sm text-gray-600 pr-5">
                                    {{$feature->detail}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full  py-0 bg-white border-0" id="">
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                <div class="w-full mx-auto max-w-xl px-3 | sm:px-4 | lg:max-w-3xl">
                    <div class="w-full block relative overflow-hidden"></div>
                </div>
                <div class="w-full flex flex-wrap justify-center items-center mt-16 space-x-4">
                    <div class=""><a href="exchange-preston.html" class="
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
bg-primary-500 text-white ">
                            <span class="relative z-20">Explore Oxygen</span>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                <div class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3">
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full">
                            </div>
                        </a>
                    </div>
                    <div class="mt-5 | lg:mt-0">
                        <div class="flex flex-wrap items-center space-x-2">
                            <div class="flex flex-wrap">
                                <div class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white ">
                                    <picture>
                                        <source
                                                type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('/settings/'.$avatar1->value)}} 70w"
                                                data-sizes="100vw">
                                        <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                             data-src="{{Storage::disk('local')->url('/settings/'.$avatar1->value)}}"
                                             data-srcset="{{Storage::disk('local')->url('/settings/'.$avatar1->value)}} 70w"
                                             data-sizes="100vw" alt="Mallam Grant"
                                             class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                             width="70" height="70">
                                    </picture>
                                </div>
                                <div
                                        class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white -ml-4">
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('/settings/'.$avatar2->value)}} 70w"
                                                data-sizes="100vw">
                                        <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                             data-src="{{Storage::disk('local')->url('/settings/'.$avatar2->value)}}"
                                             data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                             data-sizes="100vw" alt="Ginny Wai 2"
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
        <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                <div class="w-full mx-auto max-w-xl mb-5 px-3 | sm:px-4 text-center | lg:mb-10">
                    <h2
                            class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                        Our new-build property portfolio</h2>
                </div>
                <div class="w-full flex flex-wrap justify-center -mb-6 | lg:-mb-10">
                    @foreach($resids as $resid)
                    <div class="px-3 | sm:px-4 mb-6 w-full | sm:w-6/12 | lg:mb-10 lg:w-4/12">
                        <div class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                            <div class="relative">
                                <div class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                    {{$resid->tag}}
                                </div>
                                <a href="{{url('residential/'.$resid->id)}}"
                                   class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <picture class="absolute top-0 left-0 w-full h-full ">
                                                <source type="image/webp"
                                                        data-srcset="{{Storage::disk('local')->url('/residential/'.$resid->image)}}"
                                                        data-sizes="100vw">
                                                <img src="{{Storage::disk('local')->url('/residential/'.$resid->image)}}"
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
                                                        {{$resid->bedrooms}} Bedrooms
                                                    </span></div>
                                        <div
                                                class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                            <i class="fal fa-house"></i>
                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$resid->apartments}}  apartments
                                                    </span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                <div class="">
                                    <a href="{{url('residential/'.$resid->id)}}" class="">
                                        <div
                                                class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight ">
                                            {{$resid->title}}
                                        </div>
                                    </a></div>
                                <div class="font-light text-gray-600 text-sm | lg:text-base">
                                    {{$resid->location}}

                                </div>
                            </div>
                            <div
                                    class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                <div
                                        class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                    <div class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                        Prices From
                                    </div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        PKR                                            {{$resid->prices}}

                                    </div>
                                </div>
                                <div class="flex-1 py-4 px-2">
                                    <div class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                        Apartments
                                    </div>
                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                        {{$resid->apartments}}

                                    </div>
                                </div>
                            </div>
                            <div class="p-3 text-center"><a href="{{route('contact.us')}}" class="
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
bg-primary-500 text-white ">
                                            <span class="relative z-20">
                                                View Development
                                            </span>
                                    <div
                                            class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3">
                                        </div>
                                    </div>
                                    <div
                                            class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full">
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="w-full mt-10 flex flex-wrap justify-center items-center space-x-8">
                    <div class=""><a href="{{route('residential.all')}}" class="
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
bg-primary-500 text-white ">
                                    <span class="relative z-20">
                                        View all developments
                                    </span>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                <div
                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3">
                                </div>
                            </div>
                            <div
                                    class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full">
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
        <div class="w-full relative py-12 | lg:py-28 bg-gray-100 border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                <div class="w-full mx-auto max-w-lg px-3 | sm:px-4 mb-5 text-center | lg:mb-10">
                    <h2
                            class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                        Our locations</h2>
                </div>
            </div>
            <div class="w-full relative">
                <div class="w-full" x-data="carouselLocations()" x-init="carouselLocationsInit(45801)">
                    <div class="w-full pb-10 carousel--faded-items carousel--pagination-bars | js-slideshow-45801">
                        <div class="w-0.5/12 | xl:w-1/12 | 2xl:w-1.5/12"></div>
                        @foreach($locations as $loc)
                        <div class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:w-5/12 | xl:w-1/4 lg:mt-2">
                            <a href="{{url('location/'.$loc->id)}}"
                               class="w-full block relative transform transition ease-smooth-out duration-500 group | hover:-translate-y-2">
                                <div class="w-full relative overflow-hidden bg-primary-600 z-0">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <source type="image/webp"
                                                    data-srcset="{{Storage::disk('local')->url('locations/'.$loc->image)}} 500w"
                                                    data-sizes="100vw">
                                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                 data-src="{{Storage::disk('local')->url('locations/'.$loc->image)}}"
                                                 data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/7420/2019-10-22-Manchester-3_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/7420/2019-10-22-Manchester-3_df3f3c656b173c38d495187d67ef7935.jpg 500w"
                                                 data-sizes="100vw" alt="2019 10 22 Manchester 3"
                                                 class="lazy-load js-lazy-load" width="500" height="375">
                                        </picture>
                                    </div>
                                    <div class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125">
                                    </div>
                                    <div class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
                                                <span class="font-bold tracking-wide uppercase text-xs text-white">
                                                </span></div>
                                </div>
                                <div class="absolute bottom-0 left-0 w-full z-10 p-6">
                                    <div
                                            class="w-full h-60 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70">
                                    </div>
                                    <div class="relative w-full z-10">
                                        <div class="mb-2">
                                            <div
                                                    class="font-normal font-serif-primary text-1-5xl text-white leading-tight ">
                                                {{$loc->name}}
                                            </div>
                                        </div>
                                        <div class="text-white flex flex-wrap items-center space-x-2">
                                            <span class="text-xs uppercase font-bold tracking-wide">
                                                {{substr($loc->detail,0,30)}} ...
                                            </span></div>
                                    </div>
                                </div>
                            </a></div>
                        @endforeach

                    </div>
                </div>
                <div
                        class="absolute top-0 right-0 h-full items-center mr-12 -mt-4 transition ease-smooth-out duration-500 hidden | lg:flex">
                    <a href="#" aria-label="Next Slide"
                       class="w-14 h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 opacity-50 | hover:opacity-100 hover:scale-90 | js-slideshow-45801__next">
                        <i class="fal fa-long-arrow-right mt-0.5"></i>
                    </a></div>
                <div
                        class="absolute top-0 left-0 h-full items-center ml-12 -mt-4 transition ease-smooth-out duration-500 hidden | lg:flex">
                    <a href="#" aria-label="Previous Slide"
                       class="w-14 h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 opacity-50 | hover:opacity-100 hover:scale-90 | js-slideshow-45801__prev">
                        <i class="fal fa-long-arrow-left mt-0.5"></i>
                    </a></div>
            </div>
        </div>
        <div class="w-full relative py-0 bg-primary-600 border-0" id="">
            <div class="w-full h-full absolute top-0 left-0 z-10 opacity-10">
                <picture>
                    <source type="image/webp"
                            data-srcset="{{Storage::disk('local')->url('settings/'.$calcimg->value)}} 2500w"
                            data-sizes="100vw">
                    <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%272500%27%20height%3D%271406%27%20style%3D%27background%3Atransparent%27%2F%3E"
                         data-src="{{Storage::disk('local')->url('settings/'.$calcimg->value)}}"
                         data-srcset="{{Storage::disk('local')->url('settings/'.$calcimg->value)}} 2500w"
                         data-sizes="100vw" alt="2019 10 22 Manchester 3"
                         class="lazy-load js-lazy-load w-full h-full object-cover object-center" width="2500"
                         height="1406">
                </picture>
            </div>
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap justify-between pt-12 relative z-20 | lg:pt-20">
                <div
                        class="px-3 | sm:px-4 w-full mx-auto text-center | sm:w-8/12 | lg:text-left lg:mx-0 lg:mt-10 lg:w-6/12">
                    <div class="max-w-lg w-full mb-2 lg:mb-5">
                        <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-white leading-tight ">
                            {!! strip_tags($calch->value) !!}

                        </h2>
                    </div>
                    <div class="w-full max-w-xl">
                        <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-white">
                            {!! strip_tags($calcp->value) !!}


                        </p>
                    </div>
                    <div class="w-full mt-5 lg:mt-10"><a
                                href="investment-tools/rental-yield-calculator/index.html" class="
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
text-white | hover:text-primary | focus:outline-none focus:shadow-outline relative">
                                    <span class="relative z-20">
                                        Try our rental yield calculator
                                    </span>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                <div
                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-white transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3">
                                </div>
                            </div>
                            <div
                                    class="absolute top-0 left-0 z-0 border border-solid border-white w-full h-full rounded-full">
                            </div>
                        </a></div>
                </div>
                <div class="px-3 | sm:px-4 w-11/12 mx-auto mt-10 | sm:w-6/12 | lg:mt-0 lg:mx-0 lg:w-4/12">
                    <div class="w-full relative z-10">
                        <div class="relative overflow-hidden w-full" style="padding-top: 134.75%;">
                            <picture class="absolute top-0 left-0 w-full h-full ">
                                <source type="image/webp"
                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/45307/yield-calculator-mockup_616b2c32fb7bb9679ad560fc61635847.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/45307/yield-calculator-mockup_b52aeff1da97c6da6d7956e791a586c1.webp 500w"
                                        data-sizes="100vw">
                                <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27674%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                     data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/45307/yield-calculator-mockup_b52aeff1da97c6da6d7956e791a586c1.webp"
                                     data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/45307/yield-calculator-mockup_616b2c32fb7bb9679ad560fc61635847.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/45307/yield-calculator-mockup_b52aeff1da97c6da6d7956e791a586c1.png 500w"
                                     data-sizes="100vw" alt="Yield calculator mockup"
                                     class="lazy-load js-lazy-load" width="500" height="674">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between"
                 x-data="imageSlideshowText()" x-init="imageSlideshowTextInit(45803)">
                <div class="px-3 | sm:px-4 w-full mb-10 | sm:w-8/12 sm:mx-auto | lg:mx-0 lg:mb-0 lg:w-5/12">
                    <div class="relative">
                        <div
                                class="absolute top-0 left-0 z-0 bg-primary-600 w-full h-full -ml-2 -mt-2 |  lg:-ml-5 lg:-mt-5">
                        </div>
                        <div class="w-full relative z-10 carousel--pagination-white-dots | js-slideshow-45803">

                            <div class="w-full">
                                <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('settings/'.$hpts1->value)}}"
                                                data-sizes="100vw">
                                        <img
                                                src="{{Storage::disk('local')->url('settings/'.$hpts1->value)}}"
                                             alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                             class="lazy-load js-lazy-load" width="600" height="600">
                                    </picture>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('settings/'.$hpts2->value)}}"
                                                data-sizes="100vw">
                                        <img src="{{Storage::disk('local')->url('settings/'.$hpts2->value)}}"
                                             alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                             class="lazy-load js-lazy-load" width="600" height="600">
                                    </picture>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('settings/'.$hpts3->value)}}"
                                                data-sizes="100vw">
                                        <img src="{{Storage::disk('local')->url('settings/'.$hpts3->value)}}"
                                             alt="AIL001 OXYGEN V01 STORE STREET 010720"
                                             class="lazy-load js-lazy-load" width="600" height="600">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 | sm:px-4 w-full | lg:w-6/12">
                    <div
                            class="text-xs text-gray-600 font-semibold tracking-wide uppercase w-full text-center mb-2 | lg:mb-5">
                        Who are Alliance Investments?
                    </div>
                    <div class="mx-auto max-w-sm w-full text-center mb-5 | lg:max-w-lg">
                        <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3-5xl text-primary-500 leading-tight ">
                            {{$hpth->value}}
                        </h2>
                    </div>
                    <div class="w-full mx-auto text-center max-w-md | lg:max-w-xl">
                        <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                            {{$hptd->value}}
                        </p>
                    </div>
                    <div class="w-full text-center mt-10"><a href="{{route('teams')}}" class="
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
bg-primary-500 text-white ">
                                    <span class="relative z-20">
                                        Meet the team
                                    </span>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                <div
                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3">
                                </div>
                            </div>
                            <div
                                    class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full">
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
        <div class="w-full  py-12 | lg:py-28 bg-gray-100 border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                <div class="w-full mx-auto max-w-xl px-3 | sm:px-4 text-center mb-5 | lg:mb-10">
                    <h2
                            class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                        News</h2>
                </div>
            </div>
            <div class="w-full relative">
                <div class="w-full" x-data="carouselNews()" x-init="carouselNewsInit(45806)">
                    <div
                            class="w-full carousel--faded-items carousel--pagination-bars pb-5 | lg:pb-10 js-slideshow-45806">
                        <div class="w-0.5/12 | xl:w-1/12 | 2xl:w-1.5/12"></div>
                        @foreach($news as $new)
                        <div class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                            <div class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                <a href=""
                                   class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                            <source type="image/webp"
                                                    data-srcset="{{Storage::disk('local')->url('/news/'.$new->image)}} 400w, {{Storage::disk('local')->url('/news/'.$new->image)}} 500w"
                                                    data-sizes="100vw">
                                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                 data-src="{{Storage::disk('local')->url('/news/'.$new->image)}}"
                                                 data-srcset="{{Storage::disk('local')->url('/news/'.$new->image)}} 500w"
                                                 data-sizes="100vw"
                                                 alt="Preston leads the way in the North West as house prices continue to rise"
                                                 class="lazy-load js-lazy-load" width="500" height="375">
                                        </picture>
                                    </div>
                                    <div
                                            class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125">
                                    </div>
                                    <div
                                            class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
                                                <span class="font-bold tracking-wide uppercase text-xs text-white">
                                                    Read this article
                                                </span></div>
                                </a>
                                <div class="mt-5">
                                    <div class="w-full flex flex-wrap items-center space-x-5">
                                        <div
                                                class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
                                                    <span class="text-sm">
                                                        <i class="fal fa-clock"></i>
                                                    </span>
                                            <span>
                                                        {{$new->read_time}} min read
                                                    </span></div>
                                        <div
                                                class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
                                                    <span class="text-sm">
                                                        <i class="fal fa-calendar-alt"></i>
                                                    </span>
                                            <span>
                                                        {{date('d M Y')}}
                                                    </span></div>
                                    </div>
                                    <div class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                        <a href="how-alliance-investments-helps-provide-secure-investment-opportunities.html"
                                           class="block w-full">
                                            <div
                                                    class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight ">
                                                {{$new->title}}
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                </div>
                <div
                        class="absolute top-0 right-0 h-full items-center mr-12 -mt-14 transition ease-smooth-out duration-500 hidden | lg:flex">
                    <a href="#" aria-label="Next"
                       class="w-14 h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 opacity-50 | hover:opacity-100 hover:scale-90 | js-slideshow-45806__next">
                        <i class="fal fa-long-arrow-right mt-0.5"></i>
                    </a></div>
                <div
                        class="absolute top-0 left-0 h-full items-center ml-12 -mt-14 transition ease-smooth-out duration-500 hidden | lg:flex">
                    <a href="#" aria-label="Prev"
                       class="w-14 h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 opacity-50 | hover:opacity-100 hover:scale-90 | js-slideshow-45806__prev">
                        <i class="fal fa-long-arrow-left mt-0.5"></i>
                    </a></div>
            </div>
        </div>
    </div>
    <div class="w-full relative py-0 bg-primary-600 border-0" id="">
        <div class="w-full h-full absolute top-0 left-0 z-10 opacity-10">
            <picture>
                <source type="image/webp"
                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_616b2c32fb7bb9679ad560fc61635847.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_5ae402c9837860cd6e4f65e304b3a5fa.webp 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.webp 1200w"
                        data-sizes="100vw">
                <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%271200%27%20height%3D%27798%27%20style%3D%27background%3Atransparent%27%2F%3E"
                     data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.webp"
                     data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_616b2c32fb7bb9679ad560fc61635847.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_5ae402c9837860cd6e4f65e304b3a5fa.jpg 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.jpg 1200w"
                     data-sizes="100vw" alt="2019 10 25 contact us resized"
                     class="lazy-load js-lazy-load w-full h-full object-cover object-center" width="1200"
                     height="798">
            </picture>
        </div>
        <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 relative z-20 py-20">
            <div class="w-full px-3 | sm:px-4">
                <div class="flex flex-wrap justify-center mb-5">
                    <div class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
                        <picture>
                            <source type="image/webp"
                                    data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                    data-sizes="100vw">
                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                 data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.webp"
                                 data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1145/Mallam-Grant_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                 data-sizes="100vw" alt="Mallam Grant"
                                 class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                 width="70" height="70">
                        </picture>
                    </div>
                    <div class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
                        <picture>
                            <source type="image/webp"
                                    data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                    data-sizes="100vw">
                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                 data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.webp"
                                 data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/43363/Ginny-Wai-2_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                 data-sizes="100vw" alt="Ginny Wai 2"
                                 class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                 width="70" height="70">
                        </picture>
                    </div>
                    <div class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
                        <picture>
                            <source type="image/webp"
                                    data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                    data-sizes="100vw">
                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                 data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.webp"
                                 data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                 data-sizes="100vw" alt="Conor Armstrong"
                                 class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                 width="70" height="70">
                        </picture>
                    </div>
                </div>
                <div class="max-w-lg mx-auto text-center w-full | lg:max-w-2xl">
                    <div
                            class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-white leading-tight ">
                        Want to know more? Get in touch with our property experts today
                    </div>
                </div>
                <div class="w-full flex flex-wrap justify-center space-x-4 mt-10">
                    <div class=""><a href="{{route('contact.us')}}" class="
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
bg-primary-600 text-white">
                                    <span class="relative z-20">
                                        Get in touch
                                    </span>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                <div
                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3">
                                </div>
                            </div>
                            <div
                                    class="absolute top-0 left-0 z-0 border border-solid border-primary-600 w-full h-full rounded-full">
                            </div>
                        </a></div>
                    <div class=""><a href="{{route('new')}}" class="
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
text-white | hover:text-primary | focus:outline-none focus:shadow-outline relative">
                                    <span class="relative z-20">
                                        Our team
                                    </span>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                <div
                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-white transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3">
                                </div>
                            </div>
                            <div
                                    class="absolute top-0 left-0 z-0 border border-solid border-white w-full h-full rounded-full">
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
@endsection

