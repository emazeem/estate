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
                <center>
                    <h1 class="block font-serif-primary font-bold leading-tight mb-3 text-primary-500 text-3xl | lg:text-3-5xl | xl:text-4xl | 2xl:text-4xl">
                        Thank you. We will get back to you soon.
                    </h1>

                    <a href="{{route('home')}}"
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
lg:px-10 | hover:text-primary | focus:outline-none focus:shadow-outline js-form__submit"
                    >
<span
        class="relative z-20"
>
Go back to home
</span>
                        <div
                                class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                            <div
                                    class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-info transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                        </div>
                        <div
                                class="absolute top-0 left-0 z-0 border border-solid border-primary w-full h-full rounded-full"></div>
                    </a>
                </center>
            </div>
        </div>
    </div>
@endsection
