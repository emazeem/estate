@extends('layouts.master')
@section('content')
    <div class="transition ease-smooth-out delay-100 duration-1000 " x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }" x-on:click="megaMenu = null, search = null">
        <div class="">
            <div class="w-full relative h-screen-fix-50 overflow-hidden bg-primary-700 flex items-end pb-20 | lg:h-screen-fix-70">
                <div class="w-full h-full absolute top-0 left-0 z-10">
                    <picture>
                        <source
                                type="image/webp"
                                srcset="{{url('uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10026/2019-10-25-Mortgages-3_7119d0a83f49e10c8249e9824302359e.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10026/2019-10-25-Mortgages-3_c4e709ce898a8f0a5008bd8fa82b6536.webp 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10026/2019-10-25-Mortgages-3_7abbbb2796f27c91ef535646dc2c5299.webp')}} 1200w"
                                sizes="100vw"
                        >
                        <img
                                src="{{url('uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10026/2019-10-25-Mortgages-3_7abbbb2796f27c91ef535646dc2c5299.webp')}}"
                                srcset="{{url('uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10026/2019-10-25-Mortgages-3_7119d0a83f49e10c8249e9824302359e.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10026/2019-10-25-Mortgages-3_c4e709ce898a8f0a5008bd8fa82b6536.jpg 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10026/2019-10-25-Mortgages-3_7abbbb2796f27c91ef535646dc2c5299.jpg')}} 1200w"
                                sizes="100vw"
                                alt="2019 10 25 Mortgages 3"
                                class=" w-full h-full object-cover object-center"
                                width="1200" height="675">
                    </picture>
                    <div
                            class="w-full h-80 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-50"></div>
                </div>
            </div>
            <div
                    class="w-full relative py-12 | lg:py-28 bg-white border-0"
                    id=""
            >
                <div
                        class="mx-auto flex flex-wrap justify-center group w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12"
                        x-data="carouselTestimonials()"
                        x-init="carouselTestimonialsInit(46151)"
                >
                    <div class="w-full | js-slideshow-46151">
                        @foreach($testimonials as $testimonial)
                        <div class="px-3 | sm:px-4 w-full">
                            <div class="text-center mx-auto w-full max-w-md mb-5 | lg:max-w-3xl">
                                <div class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight ">
                                    {{$testimonial->details}}
                                </div>
                            </div>
                            <div class="text-primary-500 text-center uppercase text-xs tracking-wide font-semibold mb-1">
                                {{$testimonial->name}}
                            </div>
                            <div class="text-gray-600 text-center uppercase text-xs tracking-wide font-semibold mb-1">
                                {{$testimonial->address}}

                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div
                            class="relaive top-0 left-0 h-full flex items-center  transition ease-smooth-out duration-500 mr-1 mt-5 | lg:mt-0 lg:mr-0 lg:ml-12 lg:absolute lg:opacity-0 group-hover:opacity-100">
                        <a
                                href="#" aria-label="Previous Slide"
                                class="w-12 h-12 | lg:w-14 lg:h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 | hover:scale-90 | js-slideshow-46151__prev">
                            <i
                                    class="fal fa-long-arrow-left mr-0.5 mt-1"></i>
                        </a></div>
                    <div
                            class="relative top-0 right-0 h-full flex items-center transition ease-smooth-out duration-500 ml-1 mt-5 | lg:mt-0 lg:ml-0 lg:mr-12 lg:absolute lg:opacity-0 | group-hover:opacity-100">
                        <a
                                href="#" aria-label="Next Slide"
                                class="w-12 h-12 | lg:w-14 lg:h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 | hover:scale-90 | js-slideshow-46151__next">
                            <i
                                    class="fal fa-long-arrow-right ml-0.5 mt-1"></i>
                        </a></div>
                </div>
            </div>
            <div
                    class="w-full  py-12 | lg:py-28 bg-gray-100 border-0"
                    id=""
            >
                <div
                        class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between"
                >
                    <div
                            class="px-3 | sm:px-4 w-full mb-10 | sm:w-8/12 sm:mx-auto | lg:mx-0 lg:mb-0 lg:w-5/12">
                        <div
                                class="relative">
                            <div
                                    class="absolute top-0 left-0 z-0 bg-primary-600 w-full h-full -ml-2 -mt-2 |  lg:-ml-5 lg:-mt-5"></div>
                            <div
                                    class="w-full relative z-10 carousel--pagination-white-dots | js-slideshow-46113">
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
                                                    data-srcset="https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15010/2019-11-27-_axis_-_long_shot_view_6037a6716a6a4e90c973e9b5af84d444.webp 400w, https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15010/2019-11-27-_axis_-_long_shot_view_642aae02fa1a1ab86dc7d4111aae8be7.webp 600w"
                                                    data-sizes="100vw"
                                            >
                                            <img
                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27600%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                    data-src="uploads/b3c04de17f6a44befd74b25bfa739c31/15010/2019-11-27-_axis_-_long_shot_view_642aae02fa1a1ab86dc7d4111aae8be7.webp"
                                                    data-srcset="https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15010/2019-11-27-_axis_-_long_shot_view_6037a6716a6a4e90c973e9b5af84d444.jpg 400w, https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15010/2019-11-27-_axis_-_long_shot_view_642aae02fa1a1ab86dc7d4111aae8be7.jpg 600w"
                                                    data-sizes="100vw"
                                                    alt="2019 11 27 axis long shot view"
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
                                class="mx-auto max-w-sm w-full text-center mb-5 | lg:max-w-lg"><h2
                                    class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3-5xl text-primary-500 leading-tight "
                            >
                                Who are Alliance Investments?</h2></div>
                        <div
                                class="w-full mx-auto text-center max-w-md | lg:max-w-xl"><p
                                    class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                We are proud that the majority of our business is via referrals and repeat customers. Here
                                are just some of the things our valued clients say about Alliance Investments and the
                                service our global team of experts provides.</p>
                            <p
                                    class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                As part of Property Alliance Group, we have a proven track record of marketing, selling
                                and exchanging off-plan properties within several of the group’s landmark buildings, as
                                well as carefully selected new-build housing projects from other partner developers.</p>
                        </div>
                        <div
                                class="w-full text-center mt-10"><a
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
Our developments
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
            <div
                    class="w-full  py-12 | lg:py-28 bg-white border-0"
                    id=""
            >
                <div
                        class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                    <div
                            class="w-full mx-auto max-w-xl px-3 | sm:px-4 text-center mb-5 | lg:mb-10"><h2
                                class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight "
                        >
                            Latest News</h2></div>
                </div>
                <div
                        class="w-full relative">
                    <div
                            class="w-full"
                            x-data="carouselNews()"
                            x-init="carouselNewsInit(46116)"
                    >
                        <div
                                class="w-full carousel--faded-items carousel--pagination-bars pb-5 | lg:pb-10 js-slideshow-46116">
                            <div
                                    class="w-0.5/12 | xl:w-1/12 | 2xl:w-1.5/12"></div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/21-increase-and-still-rising-for-property-prices-in-preston/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64829/Preston-leads-the-way-in-the-North-West-as-house-prices-continue-to-rise_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64829/Preston-leads-the-way-in-the-North-West-as-house-prices-continue-to-rise_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64829/Preston-leads-the-way-in-the-North-West-as-house-prices-continue-to-rise_df3f3c656b173c3"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64829/Preston-leads-the-way-in-the-North-West-as-house-prices-continue-to-rise_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64829/Preston-leads-the-way-in-the-North-West-as-house-prices-continue-to-rise_df3f3c656b173c38d495187d67ef7935.jpg 500w"
                                                        data-sizes="100vw"
                                                        alt="Preston leads the way in the North West as house prices continue to rise"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
8 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
03 Dec 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/21-increase-and-still-rising-for-property-prices-in-preston/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    21% increase and still rising for property prices in Preston
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/prestons-bright-future-of-investment-and-infrastructure-investments/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64822/Preston-investment-bright-future_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64822/Preston-investment-bright-future_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64822/Preston-investment-bright-future_df3f3c656b173c38d495187d67ef7935.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64822/Preston-investment-bright-future_ac3b53f3d462f7c47f3742a199c21d2d.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64822/Preston-investment-bright-future_df3f3c656b173c38d495187d67ef7935.png 500w"
                                                        data-sizes="100vw"
                                                        alt="Preston investment bright future"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
11 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
25 Nov 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/prestons-bright-future-of-investment-and-infrastructure-investments/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    Preston’s bright future of investment and infrastructure investments
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/mortgage-interest-rates-rise-in-2022-what-it-means-for-homeowners/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64765/UK-mortgage-interest-rates-are-set-to-rise-what-does-this-mean-for-home-buyers_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64765/UK-mortgage-interest-rates-are-set-to-rise-what-does-this-mean-for-home-buyers_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64765/UK-mortgage-interest-rates-are-set-to-rise-what-does-this-mean-for-home-buyers_df3f3c656"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64765/UK-mortgage-interest-rates-are-set-to-rise-what-does-this-mean-for-home-buyers_ac3b53f3d462f7c47f3742a199c21d2d.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64765/UK-mortgage-interest-rates-are-set-to-rise-what-does-this-mean-for-home-buyers_df3f3c656b173c38d495187d67ef7935.png 500w"
                                                        data-sizes="100vw"
                                                        alt="UK mortgage interest rates are set to rise what does this mean for home buyers"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
10 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
19 Nov 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/mortgage-interest-rates-rise-in-2022-what-it-means-for-homeowners/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    Mortgage interest rates rise in 2022 - what it means for homeowners
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/36-increase-in-demand-for-manchester-city-centre-rental-property/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64757/36-increase-in-demand-for-Manchester-city-centre-rental-property_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64757/36-increase-in-demand-for-Manchester-city-centre-rental-property_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64757/36-increase-in-demand-for-Manchester-city-centre-rental-property_df3f3c656b173c38d495187"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64757/36-increase-in-demand-for-Manchester-city-centre-rental-property_ac3b53f3d462f7c47f3742a199c21d2d.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64757/36-increase-in-demand-for-Manchester-city-centre-rental-property_df3f3c656b173c38d495187d67ef7935.png 500w"
                                                        data-sizes="100vw"
                                                        alt="36 increase in demand for Manchester city centre rental property"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
8 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
15 Nov 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/36-increase-in-demand-for-manchester-city-centre-rental-property/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    36% increase in demand for Manchester city centre rental property
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/uk-mortgage-interest-rates-rising-what-it-means-for-investors/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64753/London-City-Skyline_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64753/London-City-Skyline_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64753/London-City-Skyline_df3f3c656b173c38d495187d67ef7935.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64753/London-City-Skyline_ac3b53f3d462f7c47f3742a199c21d2d.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64753/London-City-Skyline_df3f3c656b173c38d495187d67ef7935.png 500w"
                                                        data-sizes="100vw"
                                                        alt="London City Skyline"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
10 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
12 Nov 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/uk-mortgage-interest-rates-rising-what-it-means-for-investors/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    UK mortgage interest rates rising - what it means for investors
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/how-alliance-investments-helps-provide-secure-investment-opportunities/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64736/Buying-off-plan-property-how-to-ensure-your-investment-is-secure_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64736/Buying-off-plan-property-how-to-ensure-your-investment-is-secure_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64736/Buying-off-plan-property-how-to-ensure-your-investment-is-secure_df3f3c656b173c38d495187"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64736/Buying-off-plan-property-how-to-ensure-your-investment-is-secure_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64736/Buying-off-plan-property-how-to-ensure-your-investment-is-secure_df3f3c656b173c38d495187d67ef7935.jpg 500w"
                                                        data-sizes="100vw"
                                                        alt="Buying off plan property how to ensure your investment is secure"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
11 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
05 Nov 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/how-alliance-investments-helps-provide-secure-investment-opportunities/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    How Alliance Investments helps provide secure investment
                                                    opportunities
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/chancellor-reveals-investment-plans-for-manchester-preston/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64723/Chancellor-Rishi-Sunak-reveals-investment-plans-for-Manchester-Preston_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64723/Chancellor-Rishi-Sunak-reveals-investment-plans-for-Manchester-Preston_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64723/Chancellor-Rishi-Sunak-reveals-investment-plans-for-Manchester-Preston_df3f3c656b173c38d"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64723/Chancellor-Rishi-Sunak-reveals-investment-plans-for-Manchester-Preston_ac3b53f3d462f7c47f3742a199c21d2d.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64723/Chancellor-Rishi-Sunak-reveals-investment-plans-for-Manchester-Preston_df3f3c656b173c38d495187d67ef7935.png 500w"
                                                        data-sizes="100vw"
                                                        alt="Chancellor Rishi Sunak reveals investment plans for Manchester Preston"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
8 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
02 Nov 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/chancellor-reveals-investment-plans-for-manchester-preston/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    Chancellor reveals investment plans for Manchester & Preston
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/what-does-turnkey-mean/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15837/axis-23_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15837/axis-23_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/b3c04de17f6a44befd74b25bfa739c31/15837/axis-23_df3f3c656b173c38d495187d67ef7935.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15837/axis-23_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/b3c04de17f6a44befd74b25bfa739c31/15837/axis-23_df3f3c656b173c38d495187d67ef7935.jpg 500w"
                                                        data-sizes="100vw"
                                                        alt="Axis 23"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
9 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
28 Oct 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/what-does-turnkey-mean/index.html" class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    What does "turnkey" mean in real estate and property investing?
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/ancoats-voted-one-of-the-worlds-coolest-neighbourhoods/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64706/Oxygen-Blog-size_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64706/Oxygen-Blog-size_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64706/Oxygen-Blog-size_df3f3c656b173c38d495187d67ef7935.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64706/Oxygen-Blog-size_ac3b53f3d462f7c47f3742a199c21d2d.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64706/Oxygen-Blog-size_df3f3c656b173c38d495187d67ef7935.png 500w"
                                                        data-sizes="100vw"
                                                        alt="Oxygen Blog size"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
8 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
27 Oct 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/ancoats-voted-one-of-the-worlds-coolest-neighbourhoods/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    Ancoats voted one of the world’s “coolest neighbourhoods”
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="px-3 | sm:px-4 carousel__item w-10/12 | sm:w-7/12 | lg:mt-2 lg:w-5/12 | xl:w-1/4">
                                <div
                                        class="w-full block relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                                    <a
                                            href="news/manchesters-booming-technology-sector-given-further-job-boost/index.html"
                                            class="block w-full overflow-hidden bg-primary-600 relative z-0">
                                        <div
                                                class="relative overflow-hidden w-full"
                                                style="padding-top: 75%;"
                                        >
                                            <picture
                                                    class="absolute top-0 left-0 w-full h-full ">
                                                <source
                                                        type="image/webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64698/Spinningifelds_ac3b53f3d462f7c47f3742a199c21d2d.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64698/Spinningifelds_df3f3c656b173c38d495187d67ef7935.webp 500w"
                                                        data-sizes="100vw"
                                                >
                                                <img
                                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                        data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64698/Spinningifelds_df3f3c656b173c38d495187d67ef7935.webp"
                                                        data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64698/Spinningifelds_ac3b53f3d462f7c47f3742a199c21d2d.png 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/64698/Spinningifelds_df3f3c656b173c38d495187d67ef7935.png 500w"
                                                        data-sizes="100vw"
                                                        alt="Spinningifelds"
                                                        class="lazy-load js-lazy-load"
                                                        width="500" height="375">
                                            </picture>
                                        </div>
                                        <div
                                                class="absolute z-10 w-full aspect-ratio-1/1 top-0 left-0 bg-gradient-to-r from-primary-400 to-primary-700  opacity-0 rounded-full transition ease-smooth-out duration-500 transform origin-bottom scale-0 | group-hover:opacity-80 group-hover:scale-125"></div>
                                        <div
                                                class="absolute z-20 top-0 left-0 w-full h-full flex items-center justify-center opacity-0 transition ease-smooth-out duration-500 transform translate-y-2 | group-hover:opacity-100 group-hover:translate-y-0">
<span
        class="font-bold tracking-wide uppercase text-xs text-white">
Read this article
</span></div>
                                    </a>
                                    <div
                                            class="mt-5">
                                        <div
                                                class="w-full flex flex-wrap items-center space-x-5">
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-clock"></i>
</span>
                                                <span>
8 min read
</span></div>
                                            <div
                                                    class="text-xs uppercase tracking-wide text-gray-600 font-semibold flex items-center space-x-2">
<span
        class="text-sm">
<i
        class="fal fa-calendar-alt"></i>
</span>
                                                <span>
26 Oct 21
</span></div>
                                        </div>
                                        <div
                                                class="pr-10 max-w-sm mt-1 | lg:mt-2">
                                            <a
                                                    href="news/manchesters-booming-technology-sector-given-further-job-boost/index.html"
                                                    class="block w-full">
                                                <div
                                                        class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                                >
                                                    Manchester’s booming technology sector given further job boost
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                            class="absolute top-0 right-0 h-full items-center mr-12 -mt-14 transition ease-smooth-out duration-500 hidden | lg:flex">
                        <a
                                href="#" aria-label="Next"
                                class="w-14 h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 opacity-50 | hover:opacity-100 hover:scale-90 | js-slideshow-46116__next">
                            <i
                                    class="fal fa-long-arrow-right mt-0.5"></i>
                        </a></div>
                    <div
                            class="absolute top-0 left-0 h-full items-center ml-12 -mt-14 transition ease-smooth-out duration-500 hidden | lg:flex">
                        <a
                                href="#" aria-label="Prev"
                                class="w-14 h-14 bg-primary-600 inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 opacity-50 | hover:opacity-100 hover:scale-90 | js-slideshow-46116__prev">
                            <i
                                    class="fal fa-long-arrow-left mt-0.5"></i>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function carouselTestimonials() {
            return {
                carouselTestimonialsInit(id) {

                    var slideshowElement = document.querySelector('.js-slideshow-' + id)
                    var nextElement = document.querySelector('.js-slideshow-' + id + '__next')
                    var prevElement = document.querySelector('.js-slideshow-' + id + '__prev')

                    var slideshow = new Flickity(
                        slideshowElement,
                        {
                            cellAlign: 'left',
                            contain: true,
                            prevNextButtons: false,
                            adaptiveHeight: true,
                            pageDots: false,
                            autoPlay: false,
                            imagesLoaded: true,
                            dragThreshold: 1
                        }
                    )

                    nextElement.addEventListener(
                        'click',
                        function (event) {
                            if (slideshow.selectedIndex == (10 - 1)) {
                                slideshow.select(0)
                            } else {
                                slideshow.next()
                            }
                            event.preventDefault()
                        }
                    )

                    prevElement.addEventListener(
                        'click',
                        function (event) {
                            slideshow.previous()
                            event.preventDefault()
                        }
                    )
                }
            }
        };
    </script>
@endsection
