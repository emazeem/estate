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
    <div style="margin-top: 100px" class="transition ease-smooth-out delay-100 duration-1000 " x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }"          x-on:click="megaMenu = null, search = null">
        <div class="w-full  py-12 | lg:py-20 bg-white border-0" id="">
            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap justify-between" x-data="{ active: '1', scrollActive: '1' }"
                    x-on:scroll.window="                            @foreach($settings as $k=> $setting)
                            if ( document.getElementById('card-{{$k+1}}').getBoundingClientRect().top <= 50 ) {
                            scrollActive = '{{$k+1}}'
                            }
                            @endforeach

                        ">
                <div class="w-3/12 px-3 | sm:px-4 hidden | lg:inline-block">
                    <div class="sticky top-0 left-0 pt-4 w-full">
                        @foreach($settings as $k=>$setting)
                        <div class="w-full border-b border-solid border-black border-opacity-10 py-3">
                            <a href="#" class="inline-block text-xs text-primary-500 tracking-wide font-bold uppercase transform ease-smooth-out duration-500 | hover:translate-x-1" x-on:click.prevent="active = '{{$k+1}}'; document.getElementById('card-{{$k+1}}').scrollIntoView({ behavior: 'smooth' })" x-bind:class="{ 'underline' : scrollActive == '{{$k+1}}' }">
                                {{$setting->name}}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="px-3 | sm:px-4 w-full max-w-xl mx-auto | lg:mx-0 lg:max-w-none lg:w-7/12">
                    @foreach($settings as $k=> $setting)
                    <div class="w-full mb-10" id="card-{{$k+1}}">
                        <div class="rich-text">
                            <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                {!! $setting->value !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
@endsection
