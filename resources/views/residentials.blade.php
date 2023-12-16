@extends('layouts.master')
@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function () {
            $('.logo-color').show();
            $('.logo-white').hide();
            $('.w-full.absolute').addClass('text-gray-500').removeClass('text-white');
            $('.w-full.flex.relative.transition').removeClass('border-white');
        });
    </script>

    <div style="margin-top: 100px" class="w-full  py-12 | lg:py-20 bg-gray-100 border-0" id="">
        <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
            <div class="px-3 | sm:px-4 w-full mb-10 text-center | lg:text-left lg:w-5/12 lg:mb-0">
                <div class="max-w-md mx-auto | lg:mx-0"><h1
                            class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight "
                    >
                        Our Residential Developments</h1></div>
            </div>
            <div
                    class="px-3 | sm:px-4 flex flex-wrap items-center justify-center space-x-4 w-full | lg:w-6/12">
                <div
                        class="w-full text-center mb-4"><a
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
Request More Information
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
    <div class="w-full  pb-12 | lg:pb-28 bg-gray-100 border-0" id="">
        <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
            <div class="w-full flex flex-wrap -mb-10">
                @foreach($res as $resid)
                <div class="w-full px-3 | sm:px-4 mb-10 | sm:w-6/12 | lg:w-4/12">
                    <div class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                        <div class="relative">
                            <div class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                {{$resid->tag}}
                            </div>
                            <a href="{{url('residential/'.$resid->id)}}"
                                    class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                    <picture
                                            class="absolute top-0 left-0 w-full h-full ">
                                        <source
                                                type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('/residential/'.$resid->image)}}"
                                                data-sizes="100vw"
                                        >
                                        <img src="{{Storage::disk('local')->url('/residential/'.$resid->image)}}"
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
                                                        {{$resid->bedrooms}} Bedrooms

</span></div>
                                    <div
                                            class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                        <i
                                                class="fal fa-house"></i>
                                        <span
                                                class="text-2xs uppercase font-bold tracking-wide">
                                                        {{$resid->apartments}}  apartments

</span></div>
                                </div>
                            </div>
                        </div>
                        <div
                                class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                            <div
                                    class="">
                                <a
                                        href="{{url('residential/'.$resid->id)}}" class="">
                                    <div
                                            class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight "
                                    >
                                        {{$resid->title}}

                                    </div>
                                </a></div>
                            <div
                                    class="font-light text-gray-600 text-sm | lg:text-base">
                                {{$resid->location}}

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
                                    PKR                                            {{$resid->prices}}

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
                                    {{$resid->apartments}}
                                </div>
                            </div>
                        </div>
                        <div
                                class="p-3 text-center"><a
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
                    @endforeach
            </div>
        </div>
    </div>

    <div class="w-full relative py-12 | lg:py-28 bg-gray-100 border-0" id="">
        <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
            <div class="w-full mx-auto max-w-lg px-3 | sm:px-4 mb-5 text-center | lg:mb-10">
                <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                    Find a location which suits you</h2>
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
@endsection

