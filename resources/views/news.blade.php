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
    <div style="margin-top: 100px" class="transition ease-smooth-out delay-100 duration-1000 "
            x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }"
            x-on:click="megaMenu = null, search = null">
        <div class="w-full  py-12 | lg:py-20 bg-white border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                <div class="w-full max-w-sm mb-10 px-3 | sm:px-4 | lg:max-w-lg"><h1
                            class="block font-serif-primary font-bold leading-tight mb-3 text-primary-500 text-3xl | lg:text-3-5xl | xl:text-4xl | 2xl:text-4xl">
                        Latest News from
                        Alliance Investments</h1></div>
                <div class="w-full flex flex-wrap justify-between items-center mb-20">
                    <div class="px-3 | sm:px-4 w-full mb-5 | lg:mb-0 lg:w-6/12">
                        <div class="relative w-full">
                            <a href="21-increase-and-still-rising-for-property-prices-in-preston/index.html" class="w-full block relative bg-primary-600 z-10">
                                <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source
                                                type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('/news/'.$latest->image)}} 1200w"
                                                data-sizes="100vw"
                                        >
                                        <img
                                                src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%271200%27%20height%3D%27900%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                data-src="{{Storage::disk('local')->url('/news/'.$latest->image)}}"
                                                data-srcset="{{Storage::disk('local')->url('/news/'.$latest->image)}} 1200w"
                                                data-sizes="100vw"
                                                alt="Preston leads the way in the North West as house prices continue to rise"
                                                class="lazy-load js-lazy-load"
                                                width="1200" height="900">
                                    </picture>
                                </div>
                            </a></div>
                    </div>
                    <div
                            class="px-3 | sm:px-4 w-full | lg:w-5/12">
                        <div
                                class="w-full text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2 mb-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                            <span>
{{$latest->read_time}} min read
</span></div>
                        <div
                                class="max-w-sm w-full mb-2 | lg:mb-5">
                            <a
                                    href="21-increase-and-still-rising-for-property-prices-in-preston/index.html"
                                    class="block w-full"><h2
                                        class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight "
                                >
                                    {{$latest->title}}
                                </h2>
                            </a></div>
                        <div
                                class="w-full max-w-lg">
                            <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                {!! substr($latest->description,0,300) !!}
                                ...</p></div>
                    </div>
                </div>
                <div class="w-full flex flex-wrap -mb-10 | lg:-mb-20">
                    @foreach($news as $new)
                    <div class="px-3 | sm:px-4 w-full mb-10 | sm:w-6/12 | lg:w-4/12 lg:mb-20">
                        <div class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                            <a href="prestons-bright-future-of-investment-and-infrastructure-investments/index.html" class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source type="image/webp" data-srcset="{{Storage::disk('local')->url('/news/'.$new->image)}} 500w"
                                                data-sizes="100vw">
                                        <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                data-src="{{Storage::disk('local')->url('/news/'.$new->image)}}"
                                                data-srcset="{{Storage::disk('local')->url('/news/'.$new->image)}} 500w"
                                                data-sizes="100vw"
                                                alt="Preston investment bright future"
                                                class="lazy-load js-lazy-load"
                                                width="500" height="375">
                                    </picture>
                                </div>
                                <div class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                <div class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
                                    <span class="font-bold tracking-wide uppercase text-xs text-white">
                                    Read this article
                                    </span>
                                </div>
                            </a>
                            <div class="mt-5">
                                <div class="w-full flex flex-wrap items-center space-x-5">
                                    <div class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
                                        <span class="text-sm">
                                        <i class="fal fa-clock"></i>
                                        </span><span>
                                            {{$new->read_time}} min read
                                        </span></div>
                                    <div class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
                                        <span class="text-sm">
                                        <i class="fal fa-calendar-alt"></i>
                                        </span>
                                        <span>
                                            {{date('d-m-Y',strtotime($new->created_at))}}
                                        </span>
                                    </div>
                                </div>
                                <div class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                    <a href="" class="block w-full">
                                        <div class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight ">
                                            {{$new->title}}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div
                        class="mt-20">
                    <div
                            class="w-full space-x-2 flex flex-wrap justify-center items-center">
<span
        class="
w-8
h-8
rounded-full
border
border-solid
border-primary
text-white
text-sm
bg-primary
inline-flex
items-center
justify-center
font-sans-primary
font-semibold
lg:w-12
lg:h-12
">
1
</span><a
                                href="p2/index.html" class="
w-8
h-8
rounded-full
border
border-solid
border-primary-500
border-opacity-20
text-primary-500
inline-flex
items-center
justify-center
font-sans-primary
font-semibold
text-sm
transition
ease-smooth-out
duration-500
transform
hover:scale-90
hover:bg-primary-500
hover:border-opacity-100
hover:text-white
lg:w-12
lg:h-12
">
<span>
2
</span>
                        </a>
                        <a
                                href="p3/index.html" class="
w-8
h-8
rounded-full
border
border-solid
border-primary-500
border-opacity-20
text-primary-500
inline-flex
items-center
justify-center
font-sans-primary
font-semibold
text-sm
transition
ease-smooth-out
duration-500
transform
hover:scale-90
hover:bg-primary-500
hover:border-opacity-100
hover:text-white
lg:w-12
lg:h-12
">
<span>
3
</span>
                        </a>
                        <a
                                href="p4/index.html" class="
w-8
h-8
rounded-full
border
border-solid
border-primary-500
border-opacity-20
text-primary-500
inline-flex
items-center
justify-center
font-sans-primary
font-semibold
text-sm
transition
ease-smooth-out
duration-500
transform
hover:scale-90
hover:bg-primary-500
hover:border-opacity-100
hover:text-white
lg:w-12
lg:h-12
">
<span>
4
</span>
                        </a>
                        <a
                                href="p2/index.html" class="
w-8
h-8
rounded-full
border
border-solid
border-primary-500
border-opacity-20
text-primary-500
inline-flex
items-center
justify-center
font-sans-primary
font-semibold
text-sm
transition
ease-smooth-out
duration-500
transform
hover:scale-90
hover:bg-primary-500
hover:border-opacity-100
hover:text-white
lg:w-12
lg:h-12
">
<span>
&rarr;
</span>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
