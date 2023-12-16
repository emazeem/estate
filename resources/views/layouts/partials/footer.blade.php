<?php
$footers=\App\Models\Settings::where('page','footer')->get();
$fb=$footers->where('slug','facebook-link')->first();
$tw=$footers->where('slug','twitter-link')->first();
$yt=$footers->where('slug','youtube-link')->first();
$in=$footers->where('slug','instagram-link')->first();
$li=$footers->where('slug','linked-in-link')->first();
$locs=\App\Models\Location::all();

?>
<div class="w-full  py-0 bg-primary-600 border-0" id="">
    <div
            class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap justify-between py-12 -mb-10 | lg:-mb-0 lg:py-20">
        <div class=" text-center px-3 | sm:px-4 w-full mb-10 | sm:w-1/2 | lg:w-auto lg:mb-0">
            <div class="w-full text-xs font-bold uppercase tracking-wide text-white mb-2 | lg:mb-5">
                Explore More</div>
            <div class="w-full lg:space-y-1">
                <div class="">
                    <a href="{{route('new')}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        Meet the team
                    </a></div>
                <div class="">
                    <a href="{{route('testimonial')}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        Testimonials
                    </a></div>
                <div class="">
                    <a href="{{route('new')}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        News
                    </a></div>
                <div class="">
                    <a href="{{route('contact.us')}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        Work with us
                    </a>
                </div>
            </div>
        </div>
        <div class=" text-center px-3 | sm:px-4 w-full mb-10 | sm:w-1/2 | lg:w-auto lg:mb-0">
            <div class="w-full text-xs font-bold uppercase tracking-wide text-white mb-2 | lg:mb-5">
                Our locations</div>
            <div class="w-full lg:space-y-1">
                @foreach($locs as $loc)
                <div class="">
                    <a href="{{url('location/'.$loc->id)}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        {{$loc->name}}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class=" text-center px-3 | sm:px-4 w-full mb-10 | sm:w-1/2 | lg:w-auto lg:mb-0">
            <div class="w-full text-xs font-bold uppercase tracking-wide text-white mb-2 | lg:mb-5">
                Knowledge Centre</div>
            <div class="w-full lg:space-y-1">
                <div class="">
                    <a href="{{route('all.guides')}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        Guides &amp; downloads
                    </a></div>


                <div class="">
                    <a href="{{route('new')}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        News
                    </a></div>
                <div class="">
                    <a href="{{route('contact.us')}}"
                       class="inline-block text-white underlined py-3 px-3 leading-none | lg:px-0 lg:py-0">
                        Construction updates
                    </a></div>
            </div>
        </div>
    </div>
    <div
            class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-center border-t border-solid border-white border-opacity-10 py-8 | lg:justify-between">
        <div class="px-3 | sm:px-4 flex flex-wrap justify-center space-x-4 | lg:justify-start">
            <div
                    class="text-2xs text-white uppercase tracking-wide font-bold w-full text-center mb-2 | lg:text-left lg:mb-0 lg:w-auto">
                © 2021 MRD Developers.</div>
            <a href="{{route('terms.and.conditions')}}"
               class=" inline-block text-2xs text-white uppercase tracking-wide font-bold underlined">
                Terms of use
            </a>
            <a href="{{route('privacy.policy')}}"
               class=" inline-block text-2xs text-white uppercase tracking-wide font-bold underlined">
                Privacy
            </a>
            <a href="{{route('complaints')}}"
               class=" inline-block text-2xs text-white uppercase tracking-wide font-bold underlined">
                Complaints
            </a>
            <a href="https://ail.sharefile.eu/Authentication/Login" target="_blank" rel="noreferrer"
               class=" inline-block text-2xs text-white uppercase tracking-wide font-bold underlined">
                Partner login
            </a>
        </div>
        <div class="px-3 | sm:px-4 flex flex-wrap justify-center my-6 space-x-2">
            <a href="{{$tw->value}}" rel="noreferrer" aria-label="twitter"
               target="_blank"
               class="w-10 h-10 rounded-full border border-solid border-white border-opacity-10 inline-flex items-center justify-center text-white text-sm transform ease-smooth-out duration-500 | hover:scale-90 hover:border-opacity-100">
                <i class="fab fa-twitter mt-0.5"></i>
            </a>
            <a href="{{$fb->value}}"
               rel="noreferrer" aria-label="facebook-f" target="_blank"
               class="w-10 h-10 rounded-full border border-solid border-white border-opacity-10 inline-flex items-center justify-center text-white text-sm transform ease-smooth-out duration-500 | hover:scale-90 hover:border-opacity-100">
                <i class="fab fa-facebook-f mt-0.5"></i>
            </a>
            <a href="{{$li->value}}" rel="noreferrer"
               aria-label="linkedin" target="_blank"
               class="w-10 h-10 rounded-full border border-solid border-white border-opacity-10 inline-flex items-center justify-center text-white text-sm transform ease-smooth-out duration-500 | hover:scale-90 hover:border-opacity-100">
                <i class="fab fa-linkedin mt-0.5"></i>
            </a>
            <a href="{{$yt->value}}" rel="noreferrer"
               aria-label="youtube" target="_blank"
               class="w-10 h-10 rounded-full border border-solid border-white border-opacity-10 inline-flex items-center justify-center text-white text-sm transform ease-smooth-out duration-500 | hover:scale-90 hover:border-opacity-100">
                <i class="fab fa-youtube mt-0.5"></i>
            </a>
            <a href="{{$in->value}}" rel="noreferrer"
               aria-label="instagram" target="_blank"
               class="w-10 h-10 rounded-full border border-solid border-white border-opacity-10 inline-flex items-center justify-center text-white text-sm transform ease-smooth-out duration-500 | hover:scale-90 hover:border-opacity-100">
                <i class="fab fa-instagram mt-0.5"></i>
            </a></div>
        <div class="px-3 | sm:px-4 flex flex-wrap space-x-4 text-center | lg:text-left">
            <a href="https://webzards.com/" target="_blank" rel="noreferrer"
               class="inline-block text-2xs text-white uppercase tracking-wide font-bold underlined">
                Webzards
            </a></div>
    </div>
</div>
