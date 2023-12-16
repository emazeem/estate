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

    <div style="margin-top: 100px"
            class="w-full  py-12 | lg:py-20 bg-white border-0"
            id=""
    >
        <div
                class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap">
            <div
                    class="px-3 | sm:px-4 w-full | lg:w-7/12">
                <div
                        class="w-full bg-gray-100 py-6 px-8 | sm:py-10 sm:px-12">
                    <div
                            class="max-w-lg"><h1
                                class="font-bold font-serif-primary text-2xl | sm:text-3xl | xl:text-3-5xl text-primary-500 leading-none "
                        >
                            {{$guide->title}}</h1></div>
                </div>
                <div
                        class="w-full bg-primary-600">
                    <div
                            class="relative overflow-hidden w-full"
                            style="padding-top: 75%;"
                    >
                        <picture
                                class="absolute top-0 left-0 w-full h-full ">
                            <source
                                    type="image/webp"
                                    srcset="{{Storage::disk('local')->url('/guide/'.$guide->image)}} 1200w"
                                    sizes="100vw"
                            >
                            <img
                                    src="{{Storage::disk('local')->url('/guide/'.$guide->image)}}"
                                    srcset="{{Storage::disk('local')->url('/guide/'.$guide->image)}} 1200w"
                                    sizes="100vw"
                                    alt="Manchester Guide Header image"
                                    class=""
                                    width="1200" height="900">
                        </picture>
                    </div>
                </div>
                <div class="w-full bg-gray-100  py-6 px-8 | sm:py-10 sm:px-12">
                    <div class="block font-sans-primary text-sm text-gray-600">
                        {!! $guide->detail !!}
                        {!! $guide->description !!}
                    </div>
                </div>
            </div>
            <div
                    class="w-full px-3 | sm:px-4 relative | lg:w-5/12">
                <div
                        class="sticky top-0 left-0 w-full">
                    <div
                            class="w-full bg-primary-600  py-6 px-8 | sm:py-10 sm:px-12">
                        <div
                                class="mb-2"><h3
                                    class="font-bold font-serif-primary text-xl | lg:text-2xl text-white leading-tight "
                            >
                                Download Today</h3></div>
                        <div
                                class="w-full leading-relaxed text-gray-200 mb-6"><p>Our guides are informative,
                                free and available now. Click below to download yours:</p></div>
                        <div
                                class="w-full"><a
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
                                    x-on:click.prevent="lightbox = 'download'"
                            >
<span
        class="relative z-20"
>
Download the guide
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

