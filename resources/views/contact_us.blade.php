@extends('layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php
    $title = $settings->where('slug', 'contact-us-page-title')->first();
    $address = $settings->where('slug', 'contact-us-our-office-address')->first();
    $email = $settings->where('slug', 'contact-us-email')->first();
    $phone = $settings->where('slug', 'contact-us-phone-no')->first();
    $image = $settings->where('slug', 'contact-us-background-image')->first();
    ?>
    <div class="">
        <div class="w-full relative py-0 bg-white border-0" id="">
            <div class="w-full h-full absolute top-0 left-0 z-10 bg-primary-600">
                <picture>
                    <source type="image/webp"
                            data-srcset="{{Storage::disk('local')->url('/settings/'.$image->value)}} 2500w"
                            data-sizes="100vw">
                    <img
                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%272500%27%20height%3D%271406%27%20style%3D%27background%3Atransparent%27%2F%3E"
                            data-src="{{Storage::disk('local')->url('/settings/'.$image->value)}}"
                            data-srcset="{{Storage::disk('local')->url('/settings/'.$image->value)}} 2500w"
                            data-sizes="100vw"
                            alt="2019 10 03 Manhattan Reception"
                            class="lazy-load js-lazy-load w-full h-full object-cover object-center opacity-20"
                            width="2500" height="1406">
                </picture>
            </div>
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap-reverse items-center justify-between pt-28 lg:pt-48 pb-20 relative z-20 | lg:flex-wrap">
                <div class="px-3 | sm:px-4 w-full text-center | lg:text-left lg:w-5/12">
                    <div class="max-w-sm mb-10 mx-auto | lg:mx-0">
                        <h2 class="font-bold font-serif-primary text-xl | lg:text-2xl text-white leading-tight ">
                            {{$title->value}}</h2>
                    </div>
                    <div class="w-full mb-8">
                        <div class="font-semibold tracking-wide text-gray-400 uppercase text-xs mb-1">
                            Our office
                        </div>
                        <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-white">
                            {!! $address->value !!}
                        </p></div>
                    <div class="w-full ">
                        <div class="font-semibold tracking-wide text-gray-400 uppercase text-xs mb-1">
                            Get in touch
                        </div>
                        <p class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-white">
                            <a href="tel:{{$phone->value}}" class="font-semibold underlined text-white">
                                {{$phone->value}}
                            </a><br><a
                                    href="mailto:{{$email->value}}"
                                    class="font-semibold underlined text-white">{{$email->value}}</a><br><a
                                    href="https://wa.me/{{$phone->value}}" class="font-semibold underlined text-white">WhatsApp
                                Enquiries</a></p></div>
                </div>
                <div class="px-3 | sm:px-4 w-full mb-10 | lg:mb-0 lg:w-7/12 |  xl:w-6/12">
                    <div class="w-full bg-primary-600 px-4 py-6 | lg:p-10">
                        <div>
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif
                            <form class="js-form" action="{{route('contact.submit')}}" id="contact" method="post">
                                @csrf
                                <input
                                        type="hidden" name="formHash"
                                        value="8oWe9jZpP_0dc8_b937a6b6b29db0c614be4b672f6a9c2e4e638a3c61b099c09e974"/><input
                                        type="hidden" name="CRAFT_CSRF_TOKEN"
                                        value="t8b4IbrwWSG-4T9eRLVmU-n7bTeEIuxyyzYkATcta2n2ZF-eQMSUNvClyHPtgg5W2NRcaCiEERKblCoGxxC2Ha5wSV4CRiowqQou-QOCoHI="/><input
                                        class name="source" type="hidden" id="form-input-source"/><input
                                        class name="interestedProject" type="hidden" id="form-input-interestedProject"/><input
                                        class name="keyword" type="hidden" id="form-input-keyword"/><input
                                        class name="campaign" type="hidden" id="form-input-campaign"/><input
                                        class name="medium" type="hidden" id="form-input-medium"/><input
                                        class name="gclid" type="hidden" id="form-input-gclid"/><input
                                        class name="sector" type="hidden" id="form-input-sector"/><input
                                        class name="language" type="hidden" id="form-input-language"/><a
                                        id="28cc12-form-8oWe9jZpP_0dc8_b937a6b6b29db0c614be4b672f6a9c2e4e638a3c61b099c09e974"></a>
                                <div
                                        style="position: absolute !important; width: 0 !important; height: 0 !important; overflow: hidden !important;"
                                        aria-hidden="true" tabindex="-1"><label
                                            aria-hidden="true" tabindex="-1" for="freeform_honey_c9dad6">Leave this
                                        field blank</label><input
                                            type="text" value="1c73d7" name="freeform_honey_c9dad6"
                                            id="freeform_honey_c9dad6" aria-hidden="true" tabindex="-1"/></div>
                                <div
                                        class="">
                                    <div
                                            class="px-2 mb-5 relative "><h3
                                                class="font-serif-primary text-2xl lg:text-3xl font-bold text-white leading-tight mb-4">
                                            Request more information</h3></div>
                                </div>
                                <div
                                        class=" flex flex-wrap md:flex-no-wrap">
                                    <div
                                            class="px-2 mb-5 relative  w-full relative md:w-6/12"><label
                                                for="form-input-firstName"
                                                class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            First Name
                                            <span
                                                    class="text-white ml-px">*</span>
                                        </label><input
                                                type="text"
                                                name="firstName"
                                                id="form-input-firstName"
                                                class="
transition
appearance-none
block
w-full
bg-transparent
text-white
border
border-white
border-opacity-10
text-sm
px-3
py-2.5
font-light
placeholder-white
placeholder-opacity-100
hover:border-opacity-50
focus:border-opacity-100
focus:outline-none
focus:shadow-outline
lg:px-4
lg:py-4
"
                                                required
                                        ></div>
                                    <div
                                            class="px-2 mb-5 relative  w-full relative md:w-6/12"><label
                                                for="form-input-lastName"
                                                class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            Last Name
                                            <span
                                                    class="text-white ml-px">*</span>
                                        </label><input
                                                type="text"
                                                name="lastName"
                                                id="form-input-lastName"
                                                class="
transition
appearance-none
block
w-full
bg-transparent
text-white
border
border-white
border-opacity-10
text-sm
px-3
py-2.5
font-light
placeholder-white
placeholder-opacity-100
hover:border-opacity-50
focus:border-opacity-100
focus:outline-none
focus:shadow-outline
lg:px-4
lg:py-4
"
                                                required
                                        ></div>
                                </div>
                                <div class=" flex flex-wrap md:flex-no-wrap">
                                    <div class="px-2 mb-5 relative  w-full relative md:w-6/12">
                                        <label for="form-input-email"
                                               class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            Email
                                            <span class="text-white ml-px">*</span>
                                        </label>
                                        <input type="email" name="email" id="form-input-email"
                                               class="transition appearance-none block w-full bg-transparent text-white border border-white border-opacity-10 text-sm px-3 py-2.5 font-light placeholder-white placeholder-opacity-100 hover:border-opacity-50 focus:border-opacity-100 focus:outline-none focus:shadow-outline lg:px-4 lg:py-4"
                                               required>
                                    </div>
                                    <div class="px-2 mb-5 relative  w-full relative md:w-6/12">
                                        <label for="form-input-phoneInitial"
                                               class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            Phone
                                            <span class="text-white ml-px">*</span>
                                        </label>
                                        <input type="text" name="phoneInitial" id="form-input-phoneInitial"
                                               class="transition appearance-none block w-full bg-transparent text-white border border-white border-opacity-10 text-sm px-3 py-2.5 font-light placeholder-white placeholder-opacity-100 hover:border-opacity-50 focus:border-opacity-100 focus:outline-none focus:shadow-outline lg:px-4 lg:py-4 js-phone"
                                               required>
                                        <div class="absolute top-0 right-0 text-white font-sans-primary text-2xs font-semibold uppercase tracking-wide pr-2 | js-phone__error"></div>
                                    </div>
                                </div>
                                <div
                                        class=" flex flex-wrap md:flex-no-wrap">
                                    <div
                                            class="px-2 mb-5 relative  w-full relative md:w-6/12"><label
                                                for="form-input-country"
                                                class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            Country
                                            <span
                                                    class="text-white ml-px">*</span>
                                        </label>
                                        <div
                                                class="relative">
<span
        class="absolute mr-5 border-gray-700 border-b-2 border-l-2 right-0 w-2 h-2 pointer-events-none top-1/2 transform -rotate-45 -translate-y-1/2"></span>
                                            <select
                                                    name="country"
                                                    id="form-input-country"
                                                    class="
transition
appearance-none
block
w-full
bg-transparent
text-white
border
border-white
border-opacity-10
text-sm
px-3
py-2.5
font-light
hover:border-opacity-50
focus:border-opacity-100
focus:outline-none
focus:shadow-outline
focus:bg-primary
lg:px-4
lg:py-4
"
                                                    required
                                            >
                                                <option
                                                        value="Afghanistan" class="bg-primary">
                                                    Afghanistan
                                                </option>
                                                <option
                                                        value="Aland Islands" class="bg-primary">
                                                    Aland Islands
                                                </option>
                                                <option
                                                        value="Albania" class="bg-primary">
                                                    Albania
                                                </option>
                                                <option
                                                        value="Algeria" class="bg-primary">
                                                    Algeria
                                                </option>
                                                <option
                                                        value="American Samoa" class="bg-primary">
                                                    American Samoa
                                                </option>
                                                <option
                                                        value="Andorra" class="bg-primary">
                                                    Andorra
                                                </option>
                                                <option
                                                        value="Angola" class="bg-primary">
                                                    Angola
                                                </option>
                                                <option
                                                        value="Anguilla" class="bg-primary">
                                                    Anguilla
                                                </option>
                                                <option
                                                        value="Antarctica" class="bg-primary">
                                                    Antarctica
                                                </option>
                                                <option
                                                        value="Antigua and Barbuda" class="bg-primary">
                                                    Antigua and Barbuda
                                                </option>
                                                <option
                                                        value="Argentina" class="bg-primary">
                                                    Argentina
                                                </option>
                                                <option
                                                        value="Armenia" class="bg-primary">
                                                    Armenia
                                                </option>
                                                <option
                                                        value="Aruba" class="bg-primary">
                                                    Aruba
                                                </option>
                                                <option
                                                        value="Australia" class="bg-primary">
                                                    Australia
                                                </option>
                                                <option
                                                        value="Austria" class="bg-primary">
                                                    Austria
                                                </option>
                                                <option
                                                        value="Azerbaijan" class="bg-primary">
                                                    Azerbaijan
                                                </option>
                                                <option
                                                        value="Bahamas" class="bg-primary">
                                                    Bahamas
                                                </option>
                                                <option
                                                        value="Bahrain" class="bg-primary">
                                                    Bahrain
                                                </option>
                                                <option
                                                        value="Bangladesh" class="bg-primary">
                                                    Bangladesh
                                                </option>
                                                <option
                                                        value="Barbados" class="bg-primary">
                                                    Barbados
                                                </option>
                                                <option
                                                        value="Belarus" class="bg-primary">
                                                    Belarus
                                                </option>
                                                <option
                                                        value="Belgium" class="bg-primary">
                                                    Belgium
                                                </option>
                                                <option
                                                        value="Belize" class="bg-primary">
                                                    Belize
                                                </option>
                                                <option
                                                        value="Benin" class="bg-primary">
                                                    Benin
                                                </option>
                                                <option
                                                        value="Bermuda" class="bg-primary">
                                                    Bermuda
                                                </option>
                                                <option
                                                        value="Bhutan" class="bg-primary">
                                                    Bhutan
                                                </option>
                                                <option
                                                        value="Bolivia" class="bg-primary">
                                                    Bolivia
                                                </option>
                                                <option
                                                        value="Bonaire, Saint Eustatius and Saba "
                                                        class="bg-primary">
                                                    Bonaire, Saint Eustatius and Saba
                                                </option>
                                                <option
                                                        value="Bosnia and Herzegovina" class="bg-primary">
                                                    Bosnia and Herzegovina
                                                </option>
                                                <option
                                                        value="Botswana" class="bg-primary">
                                                    Botswana
                                                </option>
                                                <option
                                                        value="Bouvet Island" class="bg-primary">
                                                    Bouvet Island
                                                </option>
                                                <option
                                                        value="Brazil" class="bg-primary">
                                                    Brazil
                                                </option>
                                                <option
                                                        value="British Indian Ocean Territory" class="bg-primary">
                                                    British Indian Ocean Territory
                                                </option>
                                                <option
                                                        value="British Virgin Islands" class="bg-primary">
                                                    British Virgin Islands
                                                </option>
                                                <option
                                                        value="Brunei" class="bg-primary">
                                                    Brunei
                                                </option>
                                                <option
                                                        value="Bulgaria" class="bg-primary">
                                                    Bulgaria
                                                </option>
                                                <option
                                                        value="Burkina Faso" class="bg-primary">
                                                    Burkina Faso
                                                </option>
                                                <option
                                                        value="Burundi" class="bg-primary">
                                                    Burundi
                                                </option>
                                                <option
                                                        value="Cambodia" class="bg-primary">
                                                    Cambodia
                                                </option>
                                                <option
                                                        value="Cameroon" class="bg-primary">
                                                    Cameroon
                                                </option>
                                                <option
                                                        value="Canada" class="bg-primary">
                                                    Canada
                                                </option>
                                                <option
                                                        value="Cape Verde" class="bg-primary">
                                                    Cape Verde
                                                </option>
                                                <option
                                                        value="Cayman Islands" class="bg-primary">
                                                    Cayman Islands
                                                </option>
                                                <option
                                                        value="Central African Republic" class="bg-primary">
                                                    Central African Republic
                                                </option>
                                                <option
                                                        value="Chad" class="bg-primary">
                                                    Chad
                                                </option>
                                                <option
                                                        value="Chile" class="bg-primary">
                                                    Chile
                                                </option>
                                                <option
                                                        value="China" class="bg-primary">
                                                    China
                                                </option>
                                                <option
                                                        value="Christmas Island" class="bg-primary">
                                                    Christmas Island
                                                </option>
                                                <option
                                                        value="Cocos Islands" class="bg-primary">
                                                    Cocos Islands
                                                </option>
                                                <option
                                                        value="Colombia" class="bg-primary">
                                                    Colombia
                                                </option>
                                                <option
                                                        value="Comoros" class="bg-primary">
                                                    Comoros
                                                </option>
                                                <option
                                                        value="Cook Islands" class="bg-primary">
                                                    Cook Islands
                                                </option>
                                                <option
                                                        value="Costa Rica" class="bg-primary">
                                                    Costa Rica
                                                </option>
                                                <option
                                                        value="Croatia" class="bg-primary">
                                                    Croatia
                                                </option>
                                                <option
                                                        value="Cuba" class="bg-primary">
                                                    Cuba
                                                </option>
                                                <option
                                                        value="Curacao" class="bg-primary">
                                                    Curacao
                                                </option>
                                                <option
                                                        value="Cyprus" class="bg-primary">
                                                    Cyprus
                                                </option>
                                                <option
                                                        value="Czech Republic" class="bg-primary">
                                                    Czech Republic
                                                </option>
                                                <option
                                                        value="Democratic Republic of the Congo" class="bg-primary">
                                                    Democratic Republic of the Congo
                                                </option>
                                                <option
                                                        value="Denmark" class="bg-primary">
                                                    Denmark
                                                </option>
                                                <option
                                                        value="Djibouti" class="bg-primary">
                                                    Djibouti
                                                </option>
                                                <option
                                                        value="Dominica" class="bg-primary">
                                                    Dominica
                                                </option>
                                                <option
                                                        value="Dominican Republic" class="bg-primary">
                                                    Dominican Republic
                                                </option>
                                                <option
                                                        value="East Timor" class="bg-primary">
                                                    East Timor
                                                </option>
                                                <option
                                                        value="Ecuador" class="bg-primary">
                                                    Ecuador
                                                </option>
                                                <option
                                                        value="Egypt" class="bg-primary">
                                                    Egypt
                                                </option>
                                                <option
                                                        value="El Salvador" class="bg-primary">
                                                    El Salvador
                                                </option>
                                                <option
                                                        value="Equatorial Guinea" class="bg-primary">
                                                    Equatorial Guinea
                                                </option>
                                                <option
                                                        value="Eritrea" class="bg-primary">
                                                    Eritrea
                                                </option>
                                                <option
                                                        value="Estonia" class="bg-primary">
                                                    Estonia
                                                </option>
                                                <option
                                                        value="Ethiopia" class="bg-primary">
                                                    Ethiopia
                                                </option>
                                                <option
                                                        value="Falkland Islands" class="bg-primary">
                                                    Falkland Islands
                                                </option>
                                                <option
                                                        value="Faroe Islands" class="bg-primary">
                                                    Faroe Islands
                                                </option>
                                                <option
                                                        value="Fiji" class="bg-primary">
                                                    Fiji
                                                </option>
                                                <option
                                                        value="Finland" class="bg-primary">
                                                    Finland
                                                </option>
                                                <option
                                                        value="France" class="bg-primary">
                                                    France
                                                </option>
                                                <option
                                                        value="French Guiana" class="bg-primary">
                                                    French Guiana
                                                </option>
                                                <option
                                                        value="French Polynesia" class="bg-primary">
                                                    French Polynesia
                                                </option>
                                                <option
                                                        value="French Southern Territories" class="bg-primary">
                                                    French Southern Territories
                                                </option>
                                                <option
                                                        value="Gabon" class="bg-primary">
                                                    Gabon
                                                </option>
                                                <option
                                                        value="Gambia" class="bg-primary">
                                                    Gambia
                                                </option>
                                                <option
                                                        value="Georgia" class="bg-primary">
                                                    Georgia
                                                </option>
                                                <option
                                                        value="Germany" class="bg-primary">
                                                    Germany
                                                </option>
                                                <option
                                                        value="Ghana" class="bg-primary">
                                                    Ghana
                                                </option>
                                                <option
                                                        value="Gibraltar" class="bg-primary">
                                                    Gibraltar
                                                </option>
                                                <option
                                                        value="Greece" class="bg-primary">
                                                    Greece
                                                </option>
                                                <option
                                                        value="Greenland" class="bg-primary">
                                                    Greenland
                                                </option>
                                                <option
                                                        value="Grenada" class="bg-primary">
                                                    Grenada
                                                </option>
                                                <option
                                                        value="Guadeloupe" class="bg-primary">
                                                    Guadeloupe
                                                </option>
                                                <option
                                                        value="Guam" class="bg-primary">
                                                    Guam
                                                </option>
                                                <option
                                                        value="Guatemala" class="bg-primary">
                                                    Guatemala
                                                </option>
                                                <option
                                                        value="Guernsey" class="bg-primary">
                                                    Guernsey
                                                </option>
                                                <option
                                                        value="Guinea" class="bg-primary">
                                                    Guinea
                                                </option>
                                                <option
                                                        value="Guinea-Bissau" class="bg-primary">
                                                    Guinea-Bissau
                                                </option>
                                                <option
                                                        value="Guyana" class="bg-primary">
                                                    Guyana
                                                </option>
                                                <option
                                                        value="Haiti" class="bg-primary">
                                                    Haiti
                                                </option>
                                                <option
                                                        value="Heard Island and McDonald Islands"
                                                        class="bg-primary">
                                                    Heard Island and McDonald Islands
                                                </option>
                                                <option
                                                        value="Honduras" class="bg-primary">
                                                    Honduras
                                                </option>
                                                <option
                                                        value="Hong Kong" class="bg-primary">
                                                    Hong Kong
                                                </option>
                                                <option
                                                        value="Hungary" class="bg-primary">
                                                    Hungary
                                                </option>
                                                <option
                                                        value="Iceland" class="bg-primary">
                                                    Iceland
                                                </option>
                                                <option
                                                        value="India" class="bg-primary">
                                                    India
                                                </option>
                                                <option
                                                        value="Indonesia" class="bg-primary">
                                                    Indonesia
                                                </option>
                                                <option
                                                        value="Iran" class="bg-primary">
                                                    Iran
                                                </option>
                                                <option
                                                        value="Iraq" class="bg-primary">
                                                    Iraq
                                                </option>
                                                <option
                                                        value="Ireland" class="bg-primary">
                                                    Ireland
                                                </option>
                                                <option
                                                        value="Isle of Man" class="bg-primary">
                                                    Isle of Man
                                                </option>
                                                <option
                                                        value="Israel" class="bg-primary">
                                                    Israel
                                                </option>
                                                <option
                                                        value="Italy" class="bg-primary">
                                                    Italy
                                                </option>
                                                <option
                                                        value="Ivory Coast" class="bg-primary">
                                                    Ivory Coast
                                                </option>
                                                <option
                                                        value="Jamaica" class="bg-primary">
                                                    Jamaica
                                                </option>
                                                <option
                                                        value="Japan" class="bg-primary">
                                                    Japan
                                                </option>
                                                <option
                                                        value="Jersey" class="bg-primary">
                                                    Jersey
                                                </option>
                                                <option
                                                        value="Jordan" class="bg-primary">
                                                    Jordan
                                                </option>
                                                <option
                                                        value="Kazakhstan" class="bg-primary">
                                                    Kazakhstan
                                                </option>
                                                <option
                                                        value="Kenya" class="bg-primary">
                                                    Kenya
                                                </option>
                                                <option
                                                        value="Kiribati" class="bg-primary">
                                                    Kiribati
                                                </option>
                                                <option
                                                        value="Kosovo" class="bg-primary">
                                                    Kosovo
                                                </option>
                                                <option
                                                        value="Kuwait" class="bg-primary">
                                                    Kuwait
                                                </option>
                                                <option
                                                        value="Kyrgyzstan" class="bg-primary">
                                                    Kyrgyzstan
                                                </option>
                                                <option
                                                        value="Laos" class="bg-primary">
                                                    Laos
                                                </option>
                                                <option
                                                        value="Latvia" class="bg-primary">
                                                    Latvia
                                                </option>
                                                <option
                                                        value="Lebanon" class="bg-primary">
                                                    Lebanon
                                                </option>
                                                <option
                                                        value="Lesotho" class="bg-primary">
                                                    Lesotho
                                                </option>
                                                <option
                                                        value="Liberia" class="bg-primary">
                                                    Liberia
                                                </option>
                                                <option
                                                        value="Libya" class="bg-primary">
                                                    Libya
                                                </option>
                                                <option
                                                        value="Liechtenstein" class="bg-primary">
                                                    Liechtenstein
                                                </option>
                                                <option
                                                        value="Lithuania" class="bg-primary">
                                                    Lithuania
                                                </option>
                                                <option
                                                        value="Luxembourg" class="bg-primary">
                                                    Luxembourg
                                                </option>
                                                <option
                                                        value="Macao" class="bg-primary">
                                                    Macao
                                                </option>
                                                <option
                                                        value="Macedonia" class="bg-primary">
                                                    Macedonia
                                                </option>
                                                <option
                                                        value="Madagascar" class="bg-primary">
                                                    Madagascar
                                                </option>
                                                <option
                                                        value="Malawi" class="bg-primary">
                                                    Malawi
                                                </option>
                                                <option
                                                        value="Malaysia" class="bg-primary">
                                                    Malaysia
                                                </option>
                                                <option
                                                        value="Maldives" class="bg-primary">
                                                    Maldives
                                                </option>
                                                <option
                                                        value="Mali" class="bg-primary">
                                                    Mali
                                                </option>
                                                <option
                                                        value="Malta" class="bg-primary">
                                                    Malta
                                                </option>
                                                <option
                                                        value="Marshall Islands" class="bg-primary">
                                                    Marshall Islands
                                                </option>
                                                <option
                                                        value="Martinique" class="bg-primary">
                                                    Martinique
                                                </option>
                                                <option
                                                        value="Mauritania" class="bg-primary">
                                                    Mauritania
                                                </option>
                                                <option
                                                        value="Mauritius" class="bg-primary">
                                                    Mauritius
                                                </option>
                                                <option
                                                        value="Mayotte" class="bg-primary">
                                                    Mayotte
                                                </option>
                                                <option
                                                        value="Mexico" class="bg-primary">
                                                    Mexico
                                                </option>
                                                <option
                                                        value="Micronesia" class="bg-primary">
                                                    Micronesia
                                                </option>
                                                <option
                                                        value="Moldova" class="bg-primary">
                                                    Moldova
                                                </option>
                                                <option
                                                        value="Monaco" class="bg-primary">
                                                    Monaco
                                                </option>
                                                <option
                                                        value="Mongolia" class="bg-primary">
                                                    Mongolia
                                                </option>
                                                <option
                                                        value="Montenegro" class="bg-primary">
                                                    Montenegro
                                                </option>
                                                <option
                                                        value="Montserrat" class="bg-primary">
                                                    Montserrat
                                                </option>
                                                <option
                                                        value="Morocco" class="bg-primary">
                                                    Morocco
                                                </option>
                                                <option
                                                        value="Mozambique" class="bg-primary">
                                                    Mozambique
                                                </option>
                                                <option
                                                        value="Myanmar" class="bg-primary">
                                                    Myanmar
                                                </option>
                                                <option
                                                        value="Namibia" class="bg-primary">
                                                    Namibia
                                                </option>
                                                <option
                                                        value="Nauru" class="bg-primary">
                                                    Nauru
                                                </option>
                                                <option
                                                        value="Nepal" class="bg-primary">
                                                    Nepal
                                                </option>
                                                <option
                                                        value="Netherlands" class="bg-primary">
                                                    Netherlands
                                                </option>
                                                <option
                                                        value="New Caledonia" class="bg-primary">
                                                    New Caledonia
                                                </option>
                                                <option
                                                        value="New Zealand" class="bg-primary">
                                                    New Zealand
                                                </option>
                                                <option
                                                        value="Nicaragua" class="bg-primary">
                                                    Nicaragua
                                                </option>
                                                <option
                                                        value="Niger" class="bg-primary">
                                                    Niger
                                                </option>
                                                <option
                                                        value="Nigeria" class="bg-primary">
                                                    Nigeria
                                                </option>
                                                <option
                                                        value="Niue" class="bg-primary">
                                                    Niue
                                                </option>
                                                <option
                                                        value="Norfolk Island" class="bg-primary">
                                                    Norfolk Island
                                                </option>
                                                <option
                                                        value="North Korea" class="bg-primary">
                                                    North Korea
                                                </option>
                                                <option
                                                        value="Northern Mariana Islands" class="bg-primary">
                                                    Northern Mariana Islands
                                                </option>
                                                <option
                                                        value="Norway" class="bg-primary">
                                                    Norway
                                                </option>
                                                <option
                                                        value="Oman" class="bg-primary">
                                                    Oman
                                                </option>
                                                <option
                                                        value="Pakistan" class="bg-primary">
                                                    Pakistan
                                                </option>
                                                <option
                                                        value="Palau" class="bg-primary">
                                                    Palau
                                                </option>
                                                <option
                                                        value="Palestinian Territory" class="bg-primary">
                                                    Palestinian Territory
                                                </option>
                                                <option
                                                        value="Panama" class="bg-primary">
                                                    Panama
                                                </option>
                                                <option
                                                        value="Papua New Guinea" class="bg-primary">
                                                    Papua New Guinea
                                                </option>
                                                <option
                                                        value="Paraguay" class="bg-primary">
                                                    Paraguay
                                                </option>
                                                <option
                                                        value="Peru" class="bg-primary">
                                                    Peru
                                                </option>
                                                <option
                                                        value="Philippines" class="bg-primary">
                                                    Philippines
                                                </option>
                                                <option
                                                        value="Pitcairn" class="bg-primary">
                                                    Pitcairn
                                                </option>
                                                <option
                                                        value="Poland" class="bg-primary">
                                                    Poland
                                                </option>
                                                <option
                                                        value="Portugal" class="bg-primary">
                                                    Portugal
                                                </option>
                                                <option
                                                        value="Puerto Rico" class="bg-primary">
                                                    Puerto Rico
                                                </option>
                                                <option
                                                        value="Qatar" class="bg-primary">
                                                    Qatar
                                                </option>
                                                <option
                                                        value="Republic of the Congo" class="bg-primary">
                                                    Republic of the Congo
                                                </option>
                                                <option
                                                        value="Reunion" class="bg-primary">
                                                    Reunion
                                                </option>
                                                <option
                                                        value="Romania" class="bg-primary">
                                                    Romania
                                                </option>
                                                <option
                                                        value="Russia" class="bg-primary">
                                                    Russia
                                                </option>
                                                <option
                                                        value="Rwanda" class="bg-primary">
                                                    Rwanda
                                                </option>
                                                <option
                                                        value="Saint Barthelemy" class="bg-primary">
                                                    Saint Barthelemy
                                                </option>
                                                <option
                                                        value="Saint Helena" class="bg-primary">
                                                    Saint Helena
                                                </option>
                                                <option
                                                        value="Saint Kitts and Nevis" class="bg-primary">
                                                    Saint Kitts and Nevis
                                                </option>
                                                <option
                                                        value="Saint Lucia" class="bg-primary">
                                                    Saint Lucia
                                                </option>
                                                <option
                                                        value="Saint Martin" class="bg-primary">
                                                    Saint Martin
                                                </option>
                                                <option
                                                        value="Saint Pierre and Miquelon" class="bg-primary">
                                                    Saint Pierre and Miquelon
                                                </option>
                                                <option
                                                        value="Saint Vincent and the Grenadines" class="bg-primary">
                                                    Saint Vincent and the Grenadines
                                                </option>
                                                <option
                                                        value="Samoa" class="bg-primary">
                                                    Samoa
                                                </option>
                                                <option
                                                        value="San Marino" class="bg-primary">
                                                    San Marino
                                                </option>
                                                <option
                                                        value="Sao Tome and Principe" class="bg-primary">
                                                    Sao Tome and Principe
                                                </option>
                                                <option
                                                        value="Saudi Arabia" class="bg-primary">
                                                    Saudi Arabia
                                                </option>
                                                <option
                                                        value="Senegal" class="bg-primary">
                                                    Senegal
                                                </option>
                                                <option
                                                        value="Serbia" class="bg-primary">
                                                    Serbia
                                                </option>
                                                <option
                                                        value="Seychelles" class="bg-primary">
                                                    Seychelles
                                                </option>
                                                <option
                                                        value="Sierra Leone" class="bg-primary">
                                                    Sierra Leone
                                                </option>
                                                <option
                                                        value="Singapore" class="bg-primary">
                                                    Singapore
                                                </option>
                                                <option
                                                        value="Sint Maarten" class="bg-primary">
                                                    Sint Maarten
                                                </option>
                                                <option
                                                        value="Slovakia" class="bg-primary">
                                                    Slovakia
                                                </option>
                                                <option
                                                        value="Slovenia" class="bg-primary">
                                                    Slovenia
                                                </option>
                                                <option
                                                        value="Solomon Islands" class="bg-primary">
                                                    Solomon Islands
                                                </option>
                                                <option
                                                        value="Somalia" class="bg-primary">
                                                    Somalia
                                                </option>
                                                <option
                                                        value="South Africa" class="bg-primary">
                                                    South Africa
                                                </option>
                                                <option
                                                        value="South Georgia and the South Sandwich Islands"
                                                        class="bg-primary">
                                                    South Georgia and the South Sandwich Islands
                                                </option>
                                                <option
                                                        value="South Korea" class="bg-primary">
                                                    South Korea
                                                </option>
                                                <option
                                                        value="South Sudan" class="bg-primary">
                                                    South Sudan
                                                </option>
                                                <option
                                                        value="Spain" class="bg-primary">
                                                    Spain
                                                </option>
                                                <option
                                                        value="Sri Lanka" class="bg-primary">
                                                    Sri Lanka
                                                </option>
                                                <option
                                                        value="Sudan" class="bg-primary">
                                                    Sudan
                                                </option>
                                                <option
                                                        value="Suriname" class="bg-primary">
                                                    Suriname
                                                </option>
                                                <option
                                                        value="Svalbard and Jan Mayen" class="bg-primary">
                                                    Svalbard and Jan Mayen
                                                </option>
                                                <option
                                                        value="Swaziland" class="bg-primary">
                                                    Swaziland
                                                </option>
                                                <option
                                                        value="Sweden" class="bg-primary">
                                                    Sweden
                                                </option>
                                                <option
                                                        value="Switzerland" class="bg-primary">
                                                    Switzerland
                                                </option>
                                                <option
                                                        value="Syria" class="bg-primary">
                                                    Syria
                                                </option>
                                                <option
                                                        value="Taiwan" class="bg-primary">
                                                    Taiwan
                                                </option>
                                                <option
                                                        value="Tajikistan" class="bg-primary">
                                                    Tajikistan
                                                </option>
                                                <option
                                                        value="Tanzania" class="bg-primary">
                                                    Tanzania
                                                </option>
                                                <option
                                                        value="Thailand" class="bg-primary">
                                                    Thailand
                                                </option>
                                                <option
                                                        value="Togo" class="bg-primary">
                                                    Togo
                                                </option>
                                                <option
                                                        value="Tokelau" class="bg-primary">
                                                    Tokelau
                                                </option>
                                                <option
                                                        value="Tonga" class="bg-primary">
                                                    Tonga
                                                </option>
                                                <option
                                                        value="Trinidad and Tobago" class="bg-primary">
                                                    Trinidad and Tobago
                                                </option>
                                                <option
                                                        value="Tunisia" class="bg-primary">
                                                    Tunisia
                                                </option>
                                                <option
                                                        value="Turkey" class="bg-primary">
                                                    Turkey
                                                </option>
                                                <option
                                                        value="Turkmenistan" class="bg-primary">
                                                    Turkmenistan
                                                </option>
                                                <option
                                                        value="Turks and Caicos Islands" class="bg-primary">
                                                    Turks and Caicos Islands
                                                </option>
                                                <option
                                                        value="Tuvalu" class="bg-primary">
                                                    Tuvalu
                                                </option>
                                                <option
                                                        value="U.S. Virgin Islands" class="bg-primary">
                                                    U.S. Virgin Islands
                                                </option>
                                                <option
                                                        value="Uganda" class="bg-primary">
                                                    Uganda
                                                </option>
                                                <option
                                                        value="Ukraine" class="bg-primary">
                                                    Ukraine
                                                </option>
                                                <option
                                                        value="United Arab Emirates" class="bg-primary">
                                                    United Arab Emirates
                                                </option>
                                                <option
                                                        value="United Kingdom" class="bg-primary" selected>
                                                    United Kingdom
                                                </option>
                                                <option
                                                        value="United States" class="bg-primary">
                                                    United States
                                                </option>
                                                <option
                                                        value="United States Minor Outlying Islands"
                                                        class="bg-primary">
                                                    United States Minor Outlying Islands
                                                </option>
                                                <option
                                                        value="Uruguay" class="bg-primary">
                                                    Uruguay
                                                </option>
                                                <option
                                                        value="Uzbekistan" class="bg-primary">
                                                    Uzbekistan
                                                </option>
                                                <option
                                                        value="Vanuatu" class="bg-primary">
                                                    Vanuatu
                                                </option>
                                                <option
                                                        value="Vatican" class="bg-primary">
                                                    Vatican
                                                </option>
                                                <option
                                                        value="Venezuela" class="bg-primary">
                                                    Venezuela
                                                </option>
                                                <option
                                                        value="Vietnam" class="bg-primary">
                                                    Vietnam
                                                </option>
                                                <option
                                                        value="Wallis and Futuna" class="bg-primary">
                                                    Wallis and Futuna
                                                </option>
                                                <option
                                                        value="Western Sahara" class="bg-primary">
                                                    Western Sahara
                                                </option>
                                                <option
                                                        value="Yemen" class="bg-primary">
                                                    Yemen
                                                </option>
                                                <option
                                                        value="Zambia" class="bg-primary">
                                                    Zambia
                                                </option>
                                                <option
                                                        value="Zimbabwe" class="bg-primary">
                                                    Zimbabwe
                                                </option>
                                            </select></div>
                                    </div>
                                    <div
                                            class="px-2 mb-5 relative  w-full relative md:w-6/12"><label
                                                for="form-input-reasonForBuying"
                                                class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            Reason for Buying
                                            <span
                                                    class="text-white ml-px">*</span>
                                        </label>
                                        <div
                                                class="relative">
<span
        class="absolute mr-5 border-gray-700 border-b-2 border-l-2 right-0 w-2 h-2 pointer-events-none top-1/2 transform -rotate-45 -translate-y-1/2"></span>
                                            <select
                                                    name="reasonForBuying"
                                                    id="form-input-reasonForBuying"
                                                    class="
transition
appearance-none
block
w-full
bg-transparent
text-white
border
border-white
border-opacity-10
text-sm
px-3
py-2.5
font-light
hover:border-opacity-50
focus:border-opacity-100
focus:outline-none
focus:shadow-outline
focus:bg-primary
lg:px-4
lg:py-4
"
                                                    required
                                            >
                                                <option
                                                        value="" class="bg-primary" selected>
                                                    Please select one
                                                </option>
                                                <option
                                                        value="Investor" class="bg-primary">
                                                    Investor
                                                </option>
                                                <option
                                                        value="Home Buyer" class="bg-primary">
                                                    Home Buyer
                                                </option>
                                            </select></div>
                                    </div>
                                </div>
                                <div
                                        class="">
                                    <div
                                            class="px-2 mb-5 relative  text-left">
                                        <div
                                                class="">
                                            <button
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
text-white | hover:text-primary | focus:outline-none focus:shadow-outline js-form__submit"
                                            >
<span
        class="relative z-20"
>
Submit
</span>
                                                <div
                                                        class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                                    <div
                                                            class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-white transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                                </div>
                                                <div
                                                        class="absolute top-0 left-0 z-0 border border-solid border-white w-full h-full rounded-full"></div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                        class="">
                                    <div
                                            class="px-2 mb-5 relative ">
                                        <div
                                                style="position:absolute; left:-9999px; top: -9999px;">
                                            <label
                                                    for="pardot_extra_field">Comments</label>
                                            <input
                                                    type="text" id="pardot_extra_field" name="pardot_extra_field">
                                        </div>
                                    </div>
                                </div>
                                <div
                                        class="">
                                    <div
                                            class="px-2 mb-5 relative ">
                                        <div
                                                class="font-sans-primary text-xs text-gray-400">
                                            Please note, by filling in this form you are agreeing to Alliance
                                            Investments adding you to their mailing list to receive future marketing
                                            communications and relevant industry information via email / phone /
                                            SMS. Alliance Investments will never share your details with any third
                                            party and you can change your communication preferences at any time by
                                            <a
                                                    href="{{route('terms.and.conditions')}}" target="_blank"
                                                    class="underline text-white">clicking here</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="px-2 mb-5 relative ">
                                        <label for="form-input-phone"
                                               class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 hidden">
                                            <span class="text-white ml-px">*</span>
                                        </label>
                                        <input type="text" name="phone" id="form-input-phone"
                                               class=" transition appearance-none block w-full bg-transparent text-white border border-white border-opacity-10 text-sm px-3 py-2.5 font-light placeholder-white placeholder-opacity-100 hover:border-opacity-50 focus:border-opacity-100 focus:outline-none focus:shadow-outline lg:px-4 lg:py-4 js-phone__formatted hidden"
                                               required></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('.contact-us-form').on('submit', function (e) {
                e.preventDefault();
                alert(1);
            });
            $('.iti__flag-container .iti__selected-flag').remove();
            $('.iti__flag-container').append('<div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0"\n' +
                '     title="Pakistan (‫پاکستان‬‎): +92">\n' +
                '    <div class="iti__flag iti__pk"></div>\n' +
                '    <div class="iti__arrow"></div>\n' +
                '</div>');
            $('.iti__country-list').empty().append('<li class="iti__country iti__standard iti__active iti__highlight" tabindex="-1" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk" aria-selected="true"><div class="iti__flag-box"><div class="iti__flag iti__pk"></div></div><span class="iti__country-name">Pakistan (‫پاکستان‬‎)</span><span class="iti__dial-code">+92</span></li>');
        });
    </script>
    <style>
        .iti__country.iti__standard {
            /*            display: none !important;*/
        }
    </style>
@endsection

{{--
<div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0"
     title="Pakistan (‫پاکستان‬‎): +92">
    <div class="iti__flag iti__pk"></div>
    <div class="iti__arrow"></div>
</div>--}}
