@extends('layouts.master')
@section('content')
    <div class="transition ease-smooth-out delay-100 duration-1000 "
            x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }"
            x-on:click="megaMenu = null, search = null">
        <div class="">
            <div class="w-full relative h-screen-fix-50 overflow-hidden bg-primary-700 flex items-end pb-20 | lg:h-screen-fix-70">
                <div class="w-full h-full absolute top-0 left-0 z-10">
                    <picture>
                        <source type="image/webp"
                                srcset="{{Storage::disk('local')->url('services/'.$service->image)}} 1200w"
                                sizes="100vw"
                        >
                        <img
                                src="{{Storage::disk('local')->url('services/'.$service->image)}}"
                                srcset="{{Storage::disk('local')->url('services/'.$service->image)}} 1200w"
                                sizes="100vw"
                                alt="2019 10 25 Solicitors 3"
                                class=" w-full h-full object-cover object-center"
                                width="1200" height="675">
                    </picture>
                    <div
                            class="w-full h-80 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-50"></div>
                </div>
            </div>
            <div
                    class="w-full  py-12 | lg:py-20 bg-gray-100 border-0"
                    id=""
            >
                <div
                        class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                    <div
                            class="px-3 | sm:px-4 w-full mb-10 text-center | lg:text-left lg:w-5/12 lg:mb-0">
                        <div
                                class="max-w-md mx-auto | lg:mx-0"><h1
                                    class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight "
                            >
                                {{$service->name}}
                            </h1></div>
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
            <div class="w-full  pt-12 | lg:pt-28 bg-white border-0" id="">
                <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                    <div class="w-full text-center px-3 | sm:px-4">
                        <div class="max-w-xs mx-auto w-full mb-3 | lg:max-w-lg lg:mb-5">
                            <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                                {{$service->slider_title}}
                            </h2></div>
                        <div class="w-full mx-auto max-w-lg lg:max-w-2xl"><p
                                    class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                {{$service->slider_title}}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
                <div class="ml-auto w-11.5/12 md:w-11.5/12 | lg:w-11.5/12 | xl:w-11/12 | 2xl:w-10.5/12" x-data="carouselImages()"                      x-init="carouselImagesInit(775)">
                    <div class="w-full | js-slideshow-775">
                        @foreach($service->sliders as $slider)
                        <div class="px-3 | sm:px-4 w-10/12 | lg:w-5/12">
                            <div class="w-full bg-primary-600">
                                <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('/service-slider/'.$slider->image)}} 800w" data-sizes="100vw">
                                        <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"data-src="{{Storage::disk('local')->url('/service-slider/'.$slider->image)}}"
                                                data-srcset="{{Storage::disk('local')->url('/service-slider/'.$slider->image)}} 800w"
                                                data-sizes="100vw"
                                                alt="2019 10 25 Solicitors 1 resized"
                                                class="lazy-load js-lazy-load"
                                                width="800" height="600">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full  py-12 | lg:py-28 bg-gray-100 border-0" id="">
                <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap justify-between">
                    <div class="inline-flex flex-wrap px-3 | sm:px-4 mb-4 xl:mb-0 w-full sm:ml-1/12 xl:ml-0 sm:w-7/12 lg:w-6/12 xl:w-6/12 2xl:w-5/12">
                        <h2 class="block font-serif-primary font-bold leading-tight mb-3 text-primary-500 text-2xl | lg:text-3xl | xl:text-3-5xl | 2xl:text-3xl">
                            {{$service->title}}
                        </h2>
                    </div>
                    <div class="inline-flex flex-wrap px-3 | sm:px-4  w-full sm:w-9/12 sm:ml-1/12 xl:ml-0 lg:w-8/12 xl:w-6/12 2xl:w-6/12">
                        <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                            {{$service->description}}
                        </p></div>
                </div>
            </div>
            <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
                <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center flex-col justify-between  | lg:flex-row-reverse">
                    <div class="px-3 | sm:px-4 w-full | sm:w-9/12 sm:mx-auto | lg:mx-0 lg:w-5/12">
                        <div class="relative">
                            <div class="absolute top-0 left-0 z-0 bg-primary-600 w-full h-full -ml-2 -mt-2 lg:-ml-5 lg:-mt-5"></div>
                            <div class="w-full relative z-10">
                                <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('key-points/'.$service->key_points_image)}} 800w"
                                                data-sizes="100vw"
                                        >
                                        <img
                                                src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27800%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                data-src="{{Storage::disk('local')->url('key-points/'.$service->key_points_image)}}"
                                                data-srcset="{{Storage::disk('local')->url('key-points/'.$service->key_points_image)}} 800w"
                                                data-sizes="100vw"
                                                alt="2019 10 25 Recommend resized"
                                                class="lazy-load js-lazy-load"
                                                width="800" height="800">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 | sm:px-4 w-full mt-10 | sm:w-8/12 sm:mx-auto | lg:mx-0 lg:mt-0 lg:w-6/12">
                        <div class="max-w-sm w-full mb-2 | lg:mb-5 ">
                            <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                                {{$service->key_points_title}}
                            </h2>
                        </div>
                        <div class="w-full max-w-lg ">
                            {!! $service->key_points !!}
                        </div>
                    </div>
                </div>
            </div>
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
                                    href="our-people/index.html"
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
    <script>
        function carouselImages() {
            return {
                carouselImagesInit(id) {

                    var slideshowElement = document.querySelector('.js-slideshow-' + id)

                    var slideshow = new Flickity(
                        slideshowElement,
                        {
                            cellAlign: 'left',
                            contain: true,
                            prevNextButtons: false,
                            pageDots: false,
                            autoPlay: false,
                            imagesLoaded: true,
                            dragThreshold: 1
                        }
                    )
                }
            }
        };
    </script>
@endsection

