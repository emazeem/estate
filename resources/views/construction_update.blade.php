@extends('layouts.master')
@section('content')
    <div
            class="">
        <div
                class="w-full bg-primary-800 carousel--pagination-white-bars | js-slideshow-41543"
        >
            <div
                    class="w-full relative h-screen-fix-90 flex bg-primary-700 items-end pb-10 | lg:h-screen">
                <div
                        class="w-full h-full absolute top-0 left-0 z-10">
                    <picture>
                        <source
                                type="image/webp"
                                srcset="{{Storage::disk('local')->url('/ConstructionUpdates/'.$update->image)}} 1200w"
                                sizes="100vw"
                        >
                        <img
                                src="{{Storage::disk('local')->url('/ConstructionUpdates/'.$update->image)}}"
                                srcset="{{Storage::disk('local')->url('/ConstructionUpdates/'.$update->image)}} 1200w"
                                sizes="100vw"
                                alt="Cover Oxygen"
                                class=" w-full h-full object-cover object-center"
                                width="1200" height="675">
                    </picture>
                    <div
                            class="w-full h-120 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-10 opacity-90"></div>
                    <div
                            class="w-full h-120 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-70"></div>
                </div>
                <div
                        class="w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 mx-auto relative z-20">
                    <div
                            class="w-full px-3 | sm:px-4">
                        <div
                                class="max-w-lg ">
                            <div
                                    class="font-bold font-serif-primary text-2xl lg:text-3xl xl:text-3-5xl text-white leading-tight "
                            >
                                {{$update->title}}
                            </div>
                        </div>
                        <div
                                class="mt-5 lg:mt-8">
                            <a
                                    href="https://go.alliance-investments.com/december-2020-construction-update"
                                    class="text-white text-xs pb-0.5 tracking-wide font-bold uppercase underlined underlined--visible"
                            >
                                Download {{$update->title}}
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div
                class="w-full  pt-12 | lg:pt-28 bg-gray-100 border-0"
                id=""
        >
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between"
            >
                <div
                        class="w-full mx-auto max-w-xl px-3 | sm:px-4 | lg:max-w-3xl"
                >
                    <div class="w-full block relative overflow-hidden">
                        {!! $update->description !!}
                    </div>
                </div>
            </div>
        </div>
        <div
                class="w-full  py-12 | lg:py-28 bg-gray-100 border-0"
                id=""
        >
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                <div class="w-full p-12 bg-white shadow-2xl flex flex-wrap px-3 | sm:px-4 | lg:p-20">
                    <div class="px-12 w-full mb-5 | lg:w-6/12 lg:mb-0 ">
                        <div class="w-full max-w-lg mb-2 | lg:mb-4">
                            <h2 class="font-bold font-serif-primary text-xl | lg:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                                Contents - developments</h2></div>
                        <div class="">
                            @php $developments = \App\Models\ResidentialDev::whereIn('id',explode(',',$update->developments))->get(); @endphp
                            @foreach($developments as $development)
                            <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                <a href="#id{{$development->id}}" class="font-semibold underlined text-primary-500">{{$development->title}}</a></p>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @foreach($developments as $development)

        <div class="w-full  py-0 bg-gray-100 border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                <div class="w-full mx-auto max-w-xl px-3 | sm:px-4 | lg:max-w-3xl">
                    <div class="w-full block relative overflow-hidden">
                        <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600"><span
                                    id="id{{$development->id}}"></span></p></div>
                </div>
            </div>
        </div>
        <div class="w-full  py-12 | lg:py-28 bg-gray-100 border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center flex-col justify-between mb-16 | sm:mb-20 | lg:mb-32 | lg:flex-row-reverse">
                <div class="px-3 | sm:px-4 w-full | sm:w-9/12 sm:mx-auto | lg:mx-0 lg:w-5/12">
                    <div class="relative">
                        <div class="absolute top-0 left-0 z-0 bg-primary-600 w-full h-full -ml-2 -mt-2 lg:-ml-5 lg:-mt-5"></div>
                        <div class="w-full relative z-10">
                            <div class="relative overflow-hidden w-full" style="padding-top: 100%;">
                                <picture
                                        class="absolute top-0 left-0 w-full h-full ">
                                    <source
                                            type="image/webp" data-srcset="{{Storage::disk('local')->url('/residential/'.$development->image)}} 800w"
                                            data-sizes="100vw"
                                    >
                                    <img
                                            src="{{Storage::disk('local')->url('/residential/'.$development->image)}}"
                                            data-src="{{Storage::disk('local')->url('/residential/'.$development->image)}}"
                                            data-srcset="{{Storage::disk('local')->url('/residential/'.$development->image)}} 800w"
                                            data-sizes="100vw"
                                            alt="Uptown 1"
                                            class="lazy-load js-lazy-load"
                                            width="800" height="800">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 | sm:px-4 w-full mt-10 | sm:w-8/12 sm:mx-auto | lg:mx-0 lg:mt-0 lg:w-6/12">
                    <div class="max-w-sm w-full mb-2 | lg:mb-5 ">
                        <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">Uptown</h2>
                    </div>
                    <div class="w-full max-w-lg ">
                        {!! $development->description !!}
                    </div>
                    <div
                            class="w-full mt-5 | lg:mt-10"><a
                                href="{{url('residential/'.$development->id)}}"
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
Uptown
</span>
                            <div
                                    class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                <div
                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                            </div>
                            <div
                                    class="absolute top-0 left-0 z-0 border border-solid border-primary-500 w-full h-full rounded-full"></div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
@endsection

