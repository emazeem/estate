@extends('layouts.master')
@section('content')
    <div
            class="transition ease-smooth-out delay-100 duration-1000 "
            x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }"
            x-on:click="megaMenu = null, search = null"
    >
        <div
                class="w-full relative h-screen-fix-50 overflow-hidden bg-primary-700 flex items-end pb-20 | lg:h-screen-fix-70">
            <div
                    class="w-full h-full absolute top-0 left-0 z-10">
                <picture>
                    <source
                            type="image/webp"
                            srcset="https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39048/Living-Room-Oxygen_7119d0a83f49e10c8249e9824302359e.webp 400w, https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39048/Living-Room-Oxygen_c4e709ce898a8f0a5008bd8fa82b6536.webp 800w, https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39048/Living-Room-Oxygen_7abbbb2796f27c91ef535646dc2c5299.webp 1200w"
                            sizes="100vw"
                    >
                    <img
                            src="uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39048/Living-Room-Oxygen_7abbbb2796f27c91ef535646dc2c5299.webp"
                            srcset="https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39048/Living-Room-Oxygen_7119d0a83f49e10c8249e9824302359e.jpg 400w, https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39048/Living-Room-Oxygen_c4e709ce898a8f0a5008bd8fa82b6536.jpg 800w, https://alliance-investments.com/uploads/18f3f9126d75a2d5ce162ae54fdf0feb/39048/Living-Room-Oxygen_7abbbb2796f27c91ef535646dc2c5299.jpg 1200w"
                            sizes="100vw"
                            alt="Living Room Oxygen"
                            class=" w-full h-full object-cover object-center"
                            width="1200" height="675">
                </picture>
                <div
                        class="w-full h-80 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-50"></div>
            </div>
        </div>
        <div class="w-full  py-12 | lg:py-20 bg-gray-100 border-0" id="">
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                <div
                        class="px-3 | sm:px-4 w-full mb-10 text-center | lg:text-left lg:w-5/12 lg:mb-0">
                    <div
                            class="max-w-md mx-auto | lg:mx-0"><h1
                                class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-primary-500 leading-tight "
                        >
                            Guides & Downloads</h1></div>
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
        <div class="w-full  py-12 | lg:py-20 bg-white border-0"
                id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                <div class="w-full flex flex-wrap -mb-10 | lg:-mb-20">
                    @foreach($guides as $guide)
                    <div class="px-3 | sm:px-4 mb-10 w-full | sm:w-6/12 | lg:w-4/12 lg:mb-20">
                        <div class="w-full relative transition ease-smooth-out duration-500 transform | group hover:-translate-y-2">
                            <a href="{{url('guide/'.$guide->id)}}" class="block w-full bg-primary-600 relative overflow-hidden">
                                <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                        <source
                                                type="image/webp"
                                                data-srcset="{{Storage::disk('local')->url('/guide/'.$guide->image)}} 400w, {{Storage::disk('local')->url('/guide/'.$guide->image)}} 500w"
                                                data-sizes="100vw"
                                        >
                                        <img
                                                src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27500%27%20height%3D%27375%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                data-src="{{Storage::disk('local')->url('/guide/'.$guide->image)}}"
                                                data-srcset="{{Storage::disk('local')->url('/guide/'.$guide->image)}} 500w"
                                                data-sizes="100vw"
                                                alt="Manchester Guide Header image"
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
Find out more
</span></div>
                            </a>
                            <div
                                    class="mt-3 | lg:mt-6">
                                <div
                                        class="lg:mb-2">
                                    <a
                                            href="{{url('guide/'.$guide->id)}}" class="block w-full">
                                        <div
                                                class="font-normal font-serif-primary text-lg | sm:text-xl text-primary-500 leading-tight "
                                        >
                                            {{$guide->title}}
                                        </div>
                                    </a></div>
                                <div
                                        class="font-light text-gray-600 leading-relaxed text-sm">
                                    {{$guide->detail}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection

