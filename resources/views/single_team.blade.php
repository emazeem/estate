@extends('layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function () {
            $('.logo-color').show();
            $('.logo-white').hide();
            $('.w-full.absolute').addClass('text-gray-500').removeClass('text-white');
            $('.w-full.flex.relative.transition').addClass('border-gray-500').removeClass('border-white');
        });
    </script>
    <div style="margin-top: 100px" class="w-full  py-12 | lg:py-20 bg-white border-0" id="">
        <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
            <div class="px-3 | sm:px-4 w-full | sm:w-6/12 sm:mx-auto | lg:mx-0 lg:w-4/12">
                <div class="w-full transform transition ease-smooth-out duration-500 | hover:-translate-y-2">
                    <div class="relative block bg-primary-600">
                        <div class="relative overflow-hidden w-full" style="padding-top: 133.25%;">
                            <picture class="absolute top-0 left-0 w-full h-full ">
                                <source type="image/webp"
                                        srcset="{{Storage::disk('local')->url('/Team/'.$team->image)}} 600w"
                                        sizes="100vw">
                                <img
                                        src="{{Storage::disk('local')->url('/Team/'.$team->image)}}"
                                        srcset="{{Storage::disk('local')->url('/Team/'.$team->image)}} 600w"
                                        sizes="100vw"
                                        alt="{{$team->name}}"
                                        class=""
                                        width="600" height="800">
                            </picture>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <div class="">
                            <div class="block w-full">
                                <div class="font-bold font-serif-primary text-lg | sm:text-xl | xl:text-2xl text-primary-500 leading-tight ">
                                    {{$team->name}}
                                </div>
                            </div>
                        </div>
                        <div class="font-light text-gray-600 text-sm | lg:text-base">
                            {{$team->designation}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-3 | sm:px-4 text-center w-full mt-10 | sm:w-10/12 sm:mx-auto | lg:mx-0 lg:mt-0 lg:w-6/12">
                <div class="mb-2 | lg:mb-4">
                    <h1 class="hidden">
                        {{$team->name}}</h1>
                    <div class="font-bold font-serif-primary text-lg | lg:text-2xl text-primary-500 leading-tight ">
                        Biography
                    </div>
                </div>
                <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                    {{$team->biography}}
                </p></div>
        </div>
    </div>
    <div class="w-full relative py-0 bg-primary-600 border-0" id="">
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
@endsection

