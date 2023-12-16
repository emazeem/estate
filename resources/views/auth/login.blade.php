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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror transition appearance-none block w-full bg-transparent text-white border border-white border-opacity-10 text-sm px-3 py-2.5 font-light placeholder-white placeholder-opacity-100 hover:border-opacity-50 focus:border-opacity-100 focus:outline-none focus:shadow-outline " style="width: 300px"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror transition appearance-none block w-full bg-transparent text-white border border-white border-opacity-10 text-sm px-3 py-2.5 font-light placeholder-white placeholder-opacity-100 hover:border-opacity-50 focus:border-opacity-100 focus:outline-none focus:shadow-outline" style="width: 300px"
                                       name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="transition relative font-bold py-3.5 px-6 rounded-full group transition group ease-smooth-out duration-700 transform uppercase tracking-wide transform hover:-translate-y-1 lg:text-2xs lg:py-4 lg:px-10
">
                                    {{ __('Login') }}
                                    <div
                                            class="absolute top-0 left-0 z-0 border border-solid border-black w-full h-full rounded-full"></div>

                                </button>
                                <br>

                                {{--@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                --}}
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    </div>
@endsection
