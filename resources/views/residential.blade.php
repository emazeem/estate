@extends('layouts.master')
@section('content')
    <div class="transition ease-smooth-out delay-100 duration-1000 " x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }"          x-on:click="megaMenu = null, search = null">
        <style>:root {--entry-colour: #486368}</style>
        <div class="" x-data="propertyJs()" x-init="exitListener(document, 'mouseout', function(event) {if (Cookies.get('exitLightboxDisabled') != 'true' && event.toElement == null && event.relatedTarget == null) {lightbox = 'exitLightbox'}})">
            <div class="fixed flex items-center justify-center w-full h-full top-0 left-0 z-60 opacity-0 pointer-events-none transition duration-300" x-cloak x-bind:class="{ 'opacity-100 pointer-events-auto' : lightbox == 'exitLightbox', 'opacity-0 pointer-events-none' : lightbox != 'exitLightbox' }">
                <div class="absolute z-10 w-full h-full top-0 left- bg-primary-700 bg-opacity-90 max-h-" x-on:click="lightbox = null;  Cookies.set('exitLightboxDisabled', true)"></div>
                <div class="w-full max-h-screen overflow-scroll max-w-3xl px-5 pt-8 pb-5 lg:p-10 bg-primary-600 relative z-20 opacity-0 translate-y-5 transform transition ease-smooth-out duration-500 | lg:overflow-auto lg:max-h-none" x-bind:class="{ 'opacity-100 translate-y-0 delay-200' : lightbox == 'exitLightbox', 'opacity-0 translate-y-5' : lightbox != 'exitLightbox' }">
                    <div class="absolute top-0 right-0 z-10">
                        <a href="#" class="w-12 h-12 inline-flex items-center justify-center text-white" x-on:click.prevent="lightbox = null;  Cookies.set('exitLightboxDisabled', true)">
                            <i class="far mt-0.5 fa-times"></i>
                        </a></div>
                    <div class="w-full">
                        <div
                                class="mb-2 px-2">
                            <div
                                    class="font-bold font-serif-primary text-3xl text-white leading-tight "
                            >
                                Want to know more?
                            </div>
                        </div>
                        <div
                                class="w-full max-w-2xl px-2 mb-8"><p
                                    class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-200">
                                Leave your details below and we'll send you more information on investing, home buying and
                                the support Alliance Investments can offer you.</p></div>
                        <div
                                class="w-full">
                            <div>
                                <form
                                        class="js-form"
                                        action="https://go.alliance-investments.com/l/577541/2019-10-30/gwgb4q"
                                        id="requestInformation" method="post"
                                        data-id="137471-form-Va34kjZPq_0dc8_0f06da820092ca12d87ebc347ea14ced860c31dc61b099c52eccc">
                                    <input
                                            type="hidden" name="formHash"
                                            value="Va34kjZPq_0dc8_0f06da820092ca12d87ebc347ea14ced860c31dc61b099c52eccc"/><input
                                            type="hidden" name="CRAFT_CSRF_TOKEN"
                                            value="SWsSouPKcc7EfIrDCR6XaJ9stFt-M7HESWQpbFB3ZmVjufglrAWbcQ4IIvC0uCa5oknp9WUv4CntA_NqPQHrqywiRDNlHCc8PNeJQu9DrzU="/><input
                                            class name="interestedProject" type="hidden" id="form-input-interestedProject"
                                            value="The Exchange"/><input
                                            class name="language" type="hidden" id="form-input-language"/><input
                                            class name="campaign" type="hidden" id="form-input-campaign"/><input
                                            class name="keyword" type="hidden" id="form-input-keyword"/><input
                                            class name="sector" type="hidden" id="form-input-sector"/><input
                                            class name="gclid" type="hidden" id="form-input-gclid"/><input
                                            class name="medium" type="hidden" id="form-input-medium"/><input
                                            class name="source" type="hidden" id="form-input-source"/><a
                                            id="137471-form-Va34kjZPq_0dc8_0f06da820092ca12d87ebc347ea14ced860c31dc61b099c52eccc"></a>
                                    <div
                                            style="position: absolute !important; width: 0 !important; height: 0 !important; overflow: hidden !important;"
                                            aria-hidden="true" tabindex="-1"><label
                                                aria-hidden="true" tabindex="-1" for="freeform_honey_4c6b14">Leave this
                                            field blank</label><input
                                                type="text" value="519f94" name="freeform_honey_4c6b14"
                                                id="freeform_honey_4c6b14" aria-hidden="true" tabindex="-1"/></div>
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
                                    <div
                                            class=" flex flex-wrap md:flex-no-wrap">
                                        <div
                                                class="px-2 mb-5 relative  w-full relative md:w-6/12"><label
                                                    for="form-input-email"
                                                    class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                                Email
                                                <span
                                                        class="text-white ml-px">*</span>
                                            </label><input
                                                    type="email"
                                                    name="email"
                                                    id="form-input-email"
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
                                                    for="form-input-phoneInitial"
                                                    class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                                Phone
                                                <span
                                                        class="text-white ml-px">*</span>
                                            </label><input
                                                    type="text"
                                                    name="phoneInitial"
                                                    id="form-input-phoneInitial"
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
js-phone"
                                                    required
                                            >
                                            <div
                                                    class="absolute top-0 right-0 text-white font-sans-primary text-2xs font-semibold uppercase tracking-wide pr-2 | js-phone__error"
                                            ></div>
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
                                                        Please select an option
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
                                                class="px-2 mb-5 relative "><label
                                                    for="form-input-phone"
                                                    class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 hidden">
<span
        class="text-white ml-px">*</span>
                                            </label><input
                                                    type="text"
                                                    name="phone"
                                                    id="form-input-phone"
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
js-phone__formatted hidden"
                                                    required
                                            ></div>
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
                                                        href="terms-conditions/index.html" target="_blank"
                                                        class="underline text-white">clicking here</a>.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{ lightbox: null, active: null, scrollActive: null }"
                x-on:scroll.window="if ( document.getElementById('section-49952').getBoundingClientRect().top <= 20 ) {
active = '49952',
scrollActive = '49952'
}
if ( document.getElementById('section-49957').getBoundingClientRect().top <= 20 ) {
active = '49957',
scrollActive = '49957'
}
if ( document.getElementById('section-49959').getBoundingClientRect().top <= 20 ) {
active = '49959',
scrollActive = '49959'
}
if ( document.getElementById('section-49961').getBoundingClientRect().top <= 20 ) {
active = '49961',
scrollActive = '49961'
}
if ( document.getElementById('section-49962').getBoundingClientRect().top <= 20 ) {
active = '49962',
scrollActive = '49962'
}
"
        >
            <div
                    class="fixed flex items-center justify-center w-full h-full top-0 left-0 z-60 opacity-0 pointer-events-none transition duration-300"
                    x-cloak
                    x-bind:class="{ 'opacity-100 pointer-events-auto' : lightbox == 'requestInfo', 'opacity-0 pointer-events-none' : lightbox != 'requestInfo' }"
            >
                <div
                        class="absolute z-10 w-full h-full top-0 left- bg-primary-700 bg-opacity-90 max-h-"
                        x-on:click="lightbox = null;  Cookies.set('exitLightboxDisabled', true)"
                ></div>
                <div
                        class="w-full max-h-screen overflow-scroll max-w-3xl px-5 pt-8 pb-5 lg:p-10 bg-primary-600 relative z-20 opacity-0 translate-y-5 transform transition ease-smooth-out duration-500 | lg:overflow-auto lg:max-h-none"
                        x-bind:class="{ 'opacity-100 translate-y-0 delay-200' : lightbox == 'requestInfo', 'opacity-0 translate-y-5' : lightbox != 'requestInfo' }"
                >
                    <div
                            class="absolute top-0 right-0 z-10">
                        <a
                                href="#"
                                class="w-12 h-12 inline-flex items-center justify-center text-white"
                                x-on:click.prevent="lightbox = null;  Cookies.set('exitLightboxDisabled', true)"
                        >
                            <i
                                    class="far mt-0.5 fa-times"></i>
                        </a></div>
                    <div
                            class="w-full">
                        <div
                                class="w-full max-w-xs px-2 mb-5 | lg:max-w-xl lg:mb-10">
                            <div
                                    class="font-bold font-serif-primary text-2xl | lg:text-2xl | xl:text-3xl text-white leading-tight "
                            >
                                Request More Information
                            </div>
                        </div>
                        <div>
                            <form
                                    class="js-form"
                                    action="https://go.alliance-investments.com/l/577541/2019-10-30/gwgb4q"
                                    id="requestInformation" method="post"
                                    data-id="137471-form-Va34kjZPq_0dc8_0f06da820092ca12d87ebc347ea14ced860c31dc61b099c52eccc">
                                <input
                                        type="hidden" name="formHash"
                                        value="Va34kjZPq_0dc8_0f06da820092ca12d87ebc347ea14ced860c31dc61b099c52eccc"/><input
                                        type="hidden" name="CRAFT_CSRF_TOKEN"
                                        value="SWsSouPKcc7EfIrDCR6XaJ9stFt-M7HESWQpbFB3ZmVjufglrAWbcQ4IIvC0uCa5oknp9WUv4CntA_NqPQHrqywiRDNlHCc8PNeJQu9DrzU="/><input
                                        class name="interestedProject" type="hidden" id="form-input-interestedProject"
                                        value="The Exchange"/><input
                                        class name="language" type="hidden" id="form-input-language"/><input
                                        class name="campaign" type="hidden" id="form-input-campaign"/><input
                                        class name="keyword" type="hidden" id="form-input-keyword"/><input
                                        class name="sector" type="hidden" id="form-input-sector"/><input
                                        class name="gclid" type="hidden" id="form-input-gclid"/><input
                                        class name="medium" type="hidden" id="form-input-medium"/><input
                                        class name="source" type="hidden" id="form-input-source"/><a
                                        id="137471-form-Va34kjZPq_0dc8_0f06da820092ca12d87ebc347ea14ced860c31dc61b099c52eccc"></a>
                                <div
                                        style="position: absolute !important; width: 0 !important; height: 0 !important; overflow: hidden !important;"
                                        aria-hidden="true" tabindex="-1"><label
                                            aria-hidden="true" tabindex="-1" for="freeform_honey_4c6b14">Leave this field
                                        blank</label><input
                                            type="text" value="519f94" name="freeform_honey_4c6b14"
                                            id="freeform_honey_4c6b14" aria-hidden="true" tabindex="-1"/></div>
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
                                <div
                                        class=" flex flex-wrap md:flex-no-wrap">
                                    <div
                                            class="px-2 mb-5 relative  w-full relative md:w-6/12"><label
                                                for="form-input-email"
                                                class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            Email
                                            <span
                                                    class="text-white ml-px">*</span>
                                        </label><input
                                                type="email"
                                                name="email"
                                                id="form-input-email"
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
                                                for="form-input-phoneInitial"
                                                class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 ">
                                            Phone
                                            <span
                                                    class="text-white ml-px">*</span>
                                        </label><input
                                                type="text"
                                                name="phoneInitial"
                                                id="form-input-phoneInitial"
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
js-phone"
                                                required
                                        >
                                        <div
                                                class="absolute top-0 right-0 text-white font-sans-primary text-2xs font-semibold uppercase tracking-wide pr-2 | js-phone__error"
                                        ></div>
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
                                                        value="Bonaire, Saint Eustatius and Saba " class="bg-primary">
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
                                                        value="Heard Island and McDonald Islands" class="bg-primary">
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
                                                        value="United States Minor Outlying Islands" class="bg-primary">
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
                                                    Please select an option
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
                                            class="px-2 mb-5 relative "><label
                                                for="form-input-phone"
                                                class="block font-semibold uppercase text-2xs tracking-wide text-white mb-1 hidden">
<span
        class="text-white ml-px">*</span>
                                        </label><input
                                                type="text"
                                                name="phone"
                                                id="form-input-phone"
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
js-phone__formatted hidden"
                                                required
                                        ></div>
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
                                                    type="text" id="pardot_extra_field" name="pardot_extra_field"></div>
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
                                            communications and relevant industry information via email / phone / SMS.
                                            Alliance Investments will never share your details with any third party and
                                            you can change your communication preferences at any time by <a
                                                    href="terms-conditions/index.html" target="_blank"
                                                    class="underline text-white">clicking here</a>.
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="w-full relative h-screen-fix-50 overflow-hidden bg-primary-700 flex items-end pb-20 | lg:h-screen-fix-70">
                <div
                        class="w-full h-full absolute top-0 left-0 z-10">
                    <picture>
                        <source
                                type="image/webp"
                                srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_7119d0a83f49e10c8249e9824302359e.webp 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_c4e709ce898a8f0a5008bd8fa82b6536.webp 800w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_7abbbb2796f27c91ef535646dc2c5299.webp 1200w"
                                sizes="100vw"
                        >
                        <img
                                src="uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_7abbbb2796f27c91ef535646dc2c5299.webp"
                                srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_7119d0a83f49e10c8249e9824302359e.jpg 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_c4e709ce898a8f0a5008bd8fa82b6536.jpg 800w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_7abbbb2796f27c91ef535646dc2c5299.jpg 1200w"
                                sizes="100vw"
                                alt="Reception CGI"
                                class=" w-full h-full object-cover object-center"
                                width="1200" height="675">
                    </picture>
                    <div
                            class="w-full h-80 bg-gradient-to-b from-black to-transparent absolute top-0 left-0 z-10 opacity-50"></div>
                </div>
                <div
                        class="absolute top-0 right-0 h-full z-30 flex items-center">
                    <div
                            class="bg-entry w-40 h-24 p-6 | lg:w-64 lg:h-36 lg:p-6">
                        <picture>
                            <source
                                    type="image/webp"
                                    data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37817/Logo-Primary_616b2c32fb7bb9679ad560fc61635847.webp 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37817/Logo-Primary_5ae402c9837860cd6e4f65e304b3a5fa.webp 800w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37817/Logo-Primary_6c0c164bd2b597ee32b68b8b5755bd2e.webp 1200w"
                                    data-sizes="100vw"
                            >
                            <img
                                    src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%271200%27%20height%3D%27900%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                    data-src="uploads/900909d328bc7921582b85cceb7d2dbc/37817/Logo-Primary_6c0c164bd2b597ee32b68b8b5755bd2e.webp"
                                    data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37817/Logo-Primary_616b2c32fb7bb9679ad560fc61635847.png 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37817/Logo-Primary_5ae402c9837860cd6e4f65e304b3a5fa.png 800w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37817/Logo-Primary_6c0c164bd2b597ee32b68b8b5755bd2e.png 1200w"
                                    data-sizes="100vw"
                                    alt="Logo Primary"
                                    class="lazy-load js-lazy-load object-contain object-enter w-full h-full"
                                    width="1200" height="900">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="w-full  py-12 | lg:py-20 bg-gray-100 border-0" id="">
                <div
                        class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                    <div
                            class="px-3 | sm:px-4 w-full mb-10 text-center | lg:text-left lg:w-5/12 lg:mb-0">
                        <div
                                class="max-w-md mx-auto | lg:mx-0"><h1
                                    class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-entry leading-tight "
                            >
                                {{$res->title}}
                            </h1></div>
                        <div
                                class="w-full mt-2 max-w-lg mx-auto | lg:mx-0"><p
                                    class="w-full font-sans-primary leading-relaxed font-light text-sm lg:text-base text-gray-600">
                                {{$res->description}}
                            </p></div>
                    </div>
                    <div class="px-3 | sm:px-4 flex flex-wrap items-center justify-center space-x-4 w-full | lg:w-6/12">
                        <div class="w-full text-center mb-4"><a href="#"
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
bg-entry text-white "
                                    x-on:click.prevent="lightbox = 'requestInfo'"
                            >
<span
        class="relative z-20"
>
Request more information
</span>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                    <div class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-20 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                </div>
                                <div class="absolute top-0 left-0 z-0 border border-solid border-entry w-full h-full rounded-full"></div>
                            </a></div>
                        <div class="w-full flex justify-center">
                            <div class="flex flex-wrap items-center space-x-2">
                                <div class="flex flex-wrap">
                                    <div class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white ">
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
            <div class="w-full  py-0 bg-entry border-0" id="">
                <div class="w-full flex flex-wrap">
                    @foreach($res->perks as $feature)
                    <div class="px-3 | sm:px-4 w-full py-6 flex items-center justify-center text-center border-b lg:border-r border-solid border-white border-opacity-10 | sm:w-1/2 | xl:border-b-none xl:flex-1 lgxl:w-auto xl:py-10">
                        <div class="">
                            <div class="font-sans-primary text-xs font-semibold tracking-wide uppercase text-white mb-1">
                                {{$feature->name}}
                            </div>
                            <div class="font-serif-primary font-bold text-white text-xl mx-auto max-w-xs leading-tight">
                                {{$feature->detail}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full relative bg-white">
                <div class="sticky top-0 left-0 bg-gray-100 shadow-xl z-20 transform -translate-y-1 hidden | xl:flex">
                    <div class="w-auto px-12 flex items-center flex-shrink-0 bg-gray-100">
                        <img src="dist/images/logo-primary.png" alt="" class="w-12 h-auto"></div>
                    <a href="#" class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600" x-on:click.prevent="active = '49952', document.getElementById('section-49952').scrollIntoView({ behavior: 'smooth' })"                        x-bind:class="{ 'bg-entry text-white' : scrollActive == '49952', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '49952' }">
                        <span>
                        Gallery
                        </span>
                    </a>
                    <a href="#"
                            class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                            x-on:click.prevent="active = '49957', document.getElementById('section-49957').scrollIntoView({ behavior: 'smooth' })"
                            x-bind:class="{ 'bg-entry text-white' : scrollActive == '49957', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '49957' }"
                    ><span>
                        Overview
                        </span>
                    </a>
                    <a
                            href="#"
                            class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                            x-on:click.prevent="active = '49959', document.getElementById('section-49959').scrollIntoView({ behavior: 'smooth' })"
                            x-bind:class="{ 'bg-entry text-white' : scrollActive == '49959', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '49959' }"
                    >
<span>
Videos
</span>
                    </a>
                    <a
                            href="#"
                            class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                            x-on:click.prevent="active = '49961', document.getElementById('section-49961').scrollIntoView({ behavior: 'smooth' })"
                            x-bind:class="{ 'bg-entry text-white' : scrollActive == '49961', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '49961' }"
                    >
<span>
Location
</span>
                    </a>
                    <a
                            href="#"
                            class="flex flex-1 items-center justify-center py-8 transition ease-smooth-out duration-300 uppercase text-xs font-bold text-gray-600 tracking-wide | hover:bg-gray-200 hover:text-gray-600"
                            x-on:click.prevent="active = '49962', document.getElementById('section-49962').scrollIntoView({ behavior: 'smooth' })"
                            x-bind:class="{ 'bg-entry text-white' : scrollActive == '49962', 'bg-gray-100 text-gray-600 hover:bg-gray-200 hover:text-gray-600' : scrollActive != '49962' }"
                    >
<span>
About Preston
</span>
                    </a></div>
                <div class="w-full relative z-10">
                    <div class="w-full" id="section-49952">
                        <div class="w-full relative pt-12 | lg:pt-28 bg-white border-0" id="">
                            <div class="w-full relative group flex flex-wrap justify-center" x-data="carouselImagesLarge()" x-init="carouselImagesLargeInit(49952)">
                                <div class="w-full">
                                    <div class="w-full w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 mx-auto | js-slideshow-49952">
                                        @foreach($res->images as $image)
                                        <div class="px-3 | sm:px-4 relative w-full">
                                            <div class="w-full relative">
                                                <div class="w-full relative z-10">
                                                    <div class="relative overflow-hidden w-full" style="padding-top: 56.25%;">
                                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                                            <source type="image/webp"
                                                                    data-srcset="{{Storage::disk('local')->url('/residential-gallery/'.$image->image)}} 400w, {{Storage::disk('local')->url('/residential-gallery/'.$image->image)}} 1200w"
                                                                    data-sizes="100vw">
                                                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%271200%27%20height%3D%27675%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                                    data-src="{{Storage::disk('local')->url('/residential-gallery/'.$image->image)}}"
                                                                    data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_7119d0a83f49e10c8249e9824302359e.jpg 400w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_c4e709ce898a8f0a5008bd8fa82b6536.jpg 800w, https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/37816/Reception-CGI_7abbbb2796f27c91ef535646dc2c5299.jpg 1200w"
                                                                    data-sizes="100vw"
                                                                    alt="Reception CGI"
                                                                    class="lazy-load js-lazy-load"
                                                                    width="1200" height="675">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="relative bottom-0 left-0 w-full z-20 font-light text-sm p-4 text-gray-600 bg-gray-200 | lg:max-w-md lg:p-6 lg:absolute lg:text-white lg:bg-transparent">
                                                    {{$image->title}}
                                                </div>
                                                <div class="w-full h-40 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-10 opacity-0 | lg:opacity-70"></div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="relative top-0 left-0 h-full flex items-center  transition ease-smooth-out duration-500 mr-1 mt-5 | lg:mt-0 lg:mr-0 lg:ml-12 lg:absolute lg:opacity-0 group-hover:opacity-100">
                                    <a href="#"
                                            aria-label="Previous Slide"
                                            class="bg-entry inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 | hover:scale-90 w-12 h-12 | lg:w-14 lg:h-14 js-slideshow-49952__prev"
                                            x-on:click.prevent="prev()"
                                    >
                                        <i
                                                class="fal fa-long-arrow-left mr-0.5 mt-0.5"></i>
                                    </a></div>
                                <div
                                        class="relative top-0 right-0 h-full flex items-center transition ease-smooth-out duration-500 ml-1 mt-5 | lg:mt-0 lg:ml-0 lg:mr-12 lg:absolute lg:opacity-0 | group-hover:opacity-100">
                                    <a
                                            href="#"
                                            aria-label="Next Slide"
                                            class="bg-entry inline-flex items-center justify-center text-white rounded-full transform transition ease-smooth-out duration-500 | hover:scale-90 w-12 h-12 | lg:w-14 lg:h-14 js-slideshow-49952__next"
                                            x-on:click.prevent="next()">
                                        <i
                                                class="fal fa-long-arrow-right ml-0.5 mt-0.5"></i>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full" id="section-49957">
                        <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
                            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                                <div class="w-full mx-auto max-w-xl px-3 | sm:px-4 | lg:max-w-3xl">
                                    <div class="w-full block relative overflow-hidden">
                                        {!! $res->overview !!}
                                    </div>
                                </div>
                                <div class="w-full flex flex-wrap justify-center items-center mt-16 space-x-4">
                                    <div class=""><a href="#" class="
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
bg-entry text-white "
                                                x-on:click.prevent="lightbox = 'requestInfo'">
<span class="relative z-20">
Request more information
</span>
                                            <div class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                                <div
                                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-20 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                            </div>
                                            <div
                                                    class="absolute top-0 left-0 z-0 border border-solid border-entry w-full h-full rounded-full"></div>
                                        </a></div>
                                    <div
                                            class="mt-5 | lg:mt-0">
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
                    </div>
                    <div class="w-full" id="section-49958">
                        <div class="w-full  pb-12 | lg:pb-28 bg-white border-0" id="">
                            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between">
                                <div class="w-full">
                                    <div class="w-full mx-auto flex flex-wrap justify-center -mb-10 | lg:mb-0">
                                        @foreach($res->features as $feature)
                                        <div class="flex flex-wrap w-full mb-10 | sm:w-6/12 | lg:w-4/12 lg:mb-16 px-3 | sm:px-4">
                                            <div class="text-entry w-full text-center mb-2 text-3xl | lg:text-4xl">
                                                <i class="{{$feature->icon}}"></i></div>
                                            <div class="text-center mx-auto">
                                                <div class="mx-auto w-56">
                                                    <div class="font-normal font-serif-primary text-lg | lg:text-xl text-entry leading-tight ">
                                                        {{$feature->title}}
                                                    </div>
                                                </div>
                                                <div class="w-full font-light text-sm text-gray-600 mt-2 px-8">
                                                    <p>{{$feature->detail}}</p></div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="w-full mx-auto max-w-3xl px-3 | sm:px-4 mt-10">
                                    <div class="w-full flex flex-wrap items-center justify-center sm:space-x-4">
                                        <div class=""><a
                                                    href="#"
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
bg-entry text-white "
                                                    x-on:click.prevent="lightbox = 'requestInfo'"
                                            >
<span
        class="relative z-20"
>
Request more information
</span>
                                                <div
                                                        class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                                    <div
                                                            class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-20 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                                </div>
                                                <div
                                                        class="absolute top-0 left-0 z-0 border border-solid border-entry w-full h-full rounded-full"></div>
                                            </a></div>
                                        <div class="w-full mt-5 flex justify-center">
                                            <div class="flex flex-wrap items-center space-x-2">
                                                <div class="flex flex-wrap">
                                                    <div class="w-10 h-10 rounded-full overflow-hidden relative z-20 border-2 border-solid border-white ">
                                                        <picture>
                                                            <source type="image/webp"
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
                                                    Fill out our form, and one of our property experts will get in
                                                    touch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full" id="section-49959">
                        <div class="w-full relative py-12 | lg:py-28 bg-entry border-0" id="">
                            <div class="" x-data="carouselIframes()" x-init="carouselIframesInit(49959)">
                                <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                                    <div class="w-full mx-auto max-w-lg mb-5 text-center | lg:mb-10"><h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-white leading-tight ">
                                            Videos - Discover Preston</h2></div>
                                </div>
                                <div class="w-full relative group flex flex-wrap justify-center">
                                    <div class="mx-auto w-full">
                                        <div class="w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 mx-auto | js-slideshow-49959">
                                            @foreach($res->videos as $video)
                                            <div class="px-3 | sm:px-4 w-full">
                                                <div class="w-full relative aspect-ratio-16/9">
                                                    <iframe
                                                            src="{{$video->url}}"
                                                            class="w-full h-full top-0 left-0 absolute" frameborder="0"
                                                            webkitallowfullscreen mozallowfullscreen
                                                            allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="w-full flex-wrap justify-center px-3 | sm:px-4 space-x-2 mt-2 hidden | lg:flex">
                                            @foreach($res->videos as $video)
                                            <div class="max-w-2xs flex-1 transition ease-smooth-out duration-500" x-bind:class="{ 'opacity-100' : slide == 0, 'opacity-20' : slide != 0 }">
                                                <div class="relative overflow-hidden w-full" style="padding-top: 56.25%;">
                                                    <picture class="absolute top-0 left-0 w-full h-full ">
                                                        <source
                                                                type="image/webp"
                                                                data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/56728/Exchange-video-thumb1_7119d0a83f49e10c8249e9824302359e.webp 400w"
                                                                data-sizes="100vw"
                                                        >
                                                        <img
                                                                src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27400%27%20height%3D%27225%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                                data-src="uploads/900909d328bc7921582b85cceb7d2dbc/56728/Exchange-video-thumb1_7119d0a83f49e10c8249e9824302359e.webp"
                                                                data-srcset="https://alliance-investments.com/uploads/900909d328bc7921582b85cceb7d2dbc/56728/Exchange-video-thumb1_7119d0a83f49e10c8249e9824302359e.jpg 400w"
                                                                data-sizes="100vw"
                                                                alt="Exchange video thumb1"
                                                                class="lazy-load js-lazy-load"
                                                                width="400" height="225">
                                                    </picture>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div
                                            class="relative top-0 left-0 h-full flex items-center mr-1 mt-5 | lg:mt-0 lg:mr-0 lg:absolute lg:ml-12">
                                        <a
                                                href="#"
                                                aria-label="Previous Slide"
                                                class="bg-white inline-flex items-center justify-center text-entry rounded-full transform transition ease-smooth-out duration-500 w-12 h-12 | lg:w-14 lg:h-14 | hover:scale-90 | js-slideshow-49959__prev"
                                                x-on:click.prevent="prev()"
                                        >
                                            <i
                                                    class="fal fa-long-arrow-left mr-0.5 mt-0.5"></i>
                                        </a></div>
                                    <div
                                            class="relative top-0 right-0 h-full flex items-center ml-1 mt-5 | lg:mt-0 lg:ml-0 lg:absolute lg:mr-12">
                                        <a
                                                href="#"
                                                aria-label="Next Slide"
                                                class="bg-white inline-flex items-center justify-center text-entry rounded-full transform transition ease-smooth-out duration-500 w-12 h-12 | lg:w-14 lg:h-14 | hover:scale-90 | js-slideshow-49959__next"
                                                x-on:click.prevent="next()"
                                        >
                                            <i
                                                    class="fal fa-long-arrow-right ml-0.5 mt-0.5"></i>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                            class="w-full" id="section-49960">
                        <div
                                class="w-full  pt-12 | lg:pt-28 bg-white border-0"
                                id=""
                        >
                            <div
                                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 flex flex-wrap items-center justify-between"
                            >
                                <div
                                        class="w-full mx-auto max-w-xl px-3 | sm:px-4 | lg:max-w-3xl"
                                >
                                    <div class="w-full block relative overflow-hidden">
                                        {!! $res->overview !!}
                                    </div>
                                    <style>
                                        h3 {
                                            font-size: 30px;
                                        }
                                    </style>
                                </div>
                                <div
                                        class="w-full flex flex-wrap justify-center items-center mt-16 space-x-4">
                                    <div
                                            class=""><a
                                                href="#"
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
bg-entry text-white "
                                                x-on:click.prevent="lightbox = 'requestInfo'"
                                        >
<span
        class="relative z-20"
>
Request more information
</span>
                                            <div
                                                    class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                                <div
                                                        class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-20 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                            </div>
                                            <div
                                                    class="absolute top-0 left-0 z-0 border border-solid border-entry w-full h-full rounded-full"></div>
                                        </a></div>
                                    <div
                                            class="mt-5 | lg:mt-0">
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
                    </div>

                    <div class="w-full" id="section-49966">
                        <div class="w-full  py-12 | lg:py-28 bg-white border-0" id="">
                            <div class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12">
                                <div class="w-full mx-auto max-w-xl mb-5 px-3 | sm:px-4 text-center | lg:mb-10">
                                    <h2 class="font-bold font-serif-primary text-xl | sm:text-2xl | xl:text-3xl text-primary-500 leading-tight ">
                                        View our other Developments</h2>
                                </div>
                                <div class="w-full flex flex-wrap justify-center -mb-6 | lg:-mb-10">
                                    @foreach(\App\Models\ResidentialDev::all() as $residential)
                                    <div class="px-3 | sm:px-4 mb-6 w-full | sm:w-6/12 | lg:mb-10 lg:w-4/12">
                                        <div class="w-full relative block bg-white shadow-xl transition transform ease-smooth-out duration-500 | group hover:-translate-y-2">
                                            <div class="relative">
                                                <div class="absolute z-20 top-0 left-0 bg-primary-500 text-white uppercase text-2xs tracking-wide font-bold py-3 px-5 | lg:py-4 lg:px-6">
                                                    {{$residential->tag}}
                                                </div>
                                                <a href="{{url('residential/'.$residential->id)}}"
                                                        class="relative bg-primary-600 w-full block overflow-hidden z-10">
                                                    <div class="relative overflow-hidden w-full" style="padding-top: 75%;">
                                                        <picture class="absolute top-0 left-0 w-full h-full ">
                                                            <source type="image/webp"
                                                                    data-srcset="{{Storage::disk('local')->url('/residential/'.$residential->image)}} 800w"
                                                                    data-sizes="100vw"
                                                            >
                                                            <img
                                                                    src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27800%27%20height%3D%27600%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                                                    data-src="{{Storage::disk('local')->url('/residential/'.$residential->image)}}"
                                                                    data-srcset="https://alliance-investments.com/uploads/1a140c58d87d3ba560c3bf179d785906/37905/New-Hero-Building-Image_ac3b53f3d462f7c47f3742a199c21d2d.jpg 400w, https://alliance-investments.com/uploads/1a140c58d87d3ba560c3bf179d785906/37905/New-Hero-Building-Image_85fe4262e6f7d664e679f74b4c4d6c35.jpg 800w"
                                                                    data-sizes="100vw"
                                                                    alt="Front CGI"
                                                                    class="lazy-load js-lazy-load"
                                                                    width="800" height="600">
                                                        </picture>
                                                    </div>
                                                </a>
                                                <div class="absolute bottom-0 left-0 w-full z-20 pb-4 pointer-events-none">
                                                    <div class="w-full h-20 bg-gradient-to-t from-black to-transparent absolute bottom-0 left-0 z-0 opacity-70"></div>
                                                    <div class="relative w-full z-10 flex flex-wrap space-x-4 justify-center">
                                                        <div class="flex flex-wrap items-center text-white space-x-1">
                                                            <i class="fal fa-bed"></i>
                                                            <span class="text-2xs uppercase font-bold tracking-wide">{{$residential->bedrooms}} Bedrooms</span></div>
                                                        <div class="hidden flex-wrap items-center text-white space-x-1 | lg:flex">
                                                            <i class="fal fa-house"></i>
                                                            <span class="text-2xs uppercase font-bold tracking-wide">
                                                                {{$residential->apartments}} apartments</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-b border-solid border-black border-opacity-10 py-6 px-2 text-center">
                                                <div class="">
                                                    <a href="{{url('residential/'.$residential->id)}}" class="">
                                                        <div class="font-bold font-serif-primary text-xl xl:text-2xl text-primary-500 leading-tight ">
                                                            {{$residential->title}}
                                                        </div>
                                                    </a></div>
                                                <div class="font-light text-gray-600 text-sm | lg:text-base">
                                                    {{$residential->location}}
                                                </div>
                                            </div>
                                            <div class="border-b border-solid border-black border-opacity-10 text-center flex flex-wrap">
                                                <div class="flex-1 border-r border-solid border-black border-opacity-10 py-4 px-2">
                                                    <div class="font-light text-gray-600 mb-1 text-xs | lg:text-sm">
                                                        Prices From
                                                    </div>
                                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                                        PKR {{$residential->prices}}
                                                    </div>
                                                </div>
                                                <div
                                                        class="flex-1 py-4 px-2">
                                                    <div
                                                            class="font-light text-gray-600 text-xs mb-1 | lg:text-sm">
                                                        Apartments
                                                    </div>
                                                    <div class="text-primary-500 font-semibold text-sm | lg:text-base">
                                                        {{$residential->apartments}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                    class="p-3 text-center"><a
                                                        href="address-altrincham/index.html"
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
View Development
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
                                    @endforeach
                                </div>
                                <div
                                        class="w-full mt-10 flex flex-wrap justify-center items-center space-x-8">
                                    <div
                                            class=""><a
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
View all developments
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
                    </div>
                </div>
            </div>

        </div>
        <div
                class="w-full relative py-0 bg-primary-600 border-0"
                id=""
        >
            <div
                    class="w-full h-full absolute top-0 left-0 z-10 opacity-10">
                <picture>
                    <source
                            type="image/webp"
                            data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_616b2c32fb7bb9679ad560fc61635847.webp 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_5ae402c9837860cd6e4f65e304b3a5fa.webp 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.webp 1200w"
                            data-sizes="100vw"
                    >
                    <img
                            src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%271200%27%20height%3D%27798%27%20style%3D%27background%3Atransparent%27%2F%3E"
                            data-src="uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.webp"
                            data-srcset="https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_616b2c32fb7bb9679ad560fc61635847.jpg 400w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_5ae402c9837860cd6e4f65e304b3a5fa.jpg 800w, https://alliance-investments.com/uploads/bc9e33244d2d8a7bebbefa89bb319b9f/10260/2019-10-25-contact-us-resized_6c0c164bd2b597ee32b68b8b5755bd2e.jpg 1200w"
                            data-sizes="100vw"
                            alt="2019 10 25 contact us resized"
                            class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                            width="1200" height="798">
                </picture>
            </div>
            <div
                    class="mx-auto w-11/12 md:w-11/12 | lg:w-11/12 | xl:w-10/12 | 2xl:w-9/12 relative z-20 py-20">
                <div
                        class="w-full px-3 | sm:px-4">
                    <div
                            class="flex flex-wrap justify-center mb-5">
                        <div
                                class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
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
                                class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
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
                        <div
                                class="w-10 h-10 rounded-full overflow-hidden bg-primary-400 relative z-20 -mx-1">
                            <picture>
                                <source
                                        type="image/webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.webp 70w"
                                        data-sizes="100vw"
                                >
                                <img
                                        src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2770%27%20height%3D%2770%27%20style%3D%27background%3Atransparent%27%2F%3E"
                                        data-src="uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.webp"
                                        data-srcset="https://alliance-investments.com/uploads/7d5c2c5140e371019c88499fa0b69b46/1059/Conor-Armstrong_d177f6d934e0f980b353cc07a39de85a.jpg 70w"
                                        data-sizes="100vw"
                                        alt="Conor Armstrong"
                                        class="lazy-load js-lazy-load w-full h-full object-cover object-center"
                                        width="70" height="70">
                            </picture>
                        </div>
                    </div>
                    <div
                            class="max-w-lg mx-auto text-center w-full | lg:max-w-2xl">
                        <div
                                class="font-bold font-serif-primary text-2xl | lg:text-3xl | xl:text-3-5xl text-white leading-tight "
                        >
                            Want to know more? Get in touch with our property experts today
                        </div>
                    </div>
                    <div
                            class="w-full flex flex-wrap justify-center space-x-4 mt-10">
                        <div
                                class=""><a
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
bg-primary-600 text-white"
                            >
<span
        class="relative z-20"
>
Get in touch
</span>
                                <div
                                        class="absolute top-0 left-0 w-full h-full rounded-full overflow-hidden z-10">
                                    <div
                                            class="absolute z-10 w-full aspect-ratio-1/1 rounded-full top-0 left-0 bg-black bg-opacity-30 transform origin-bottom scale-0 transition ease-smooth-out duration-700 | group-hover:scale-105 group-hover:-translate-y-1/3"></div>
                                </div>
                                <div
                                        class="absolute top-0 left-0 z-0 border border-solid border-primary-600 w-full h-full rounded-full"></div>
                            </a></div>
                        <div
                                class=""><a
                                    href="{{route('teams')}}"
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
text-white | hover:text-primary | focus:outline-none focus:shadow-outline relative"
                            >
<span
        class="relative z-20"
>
Our team
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
    <script>

        function carouselImagesLarge() {
            return {
                slide: 0,
                next() {

                    if (this.slide < 5) {
                        this.slide = this.slide + 1
                    }

                },
                prev() {

                    if (this.slide > 0) {
                        this.slide = this.slide - 1
                    }

                },
                carouselImagesLargeInit(id) {

                    var slideshowElement = document.querySelector('.js-slideshow-' + id)
                    var nextElement = document.querySelector('.js-slideshow-' + id + '__next')
                    var prevElement = document.querySelector('.js-slideshow-' + id + '__prev')

                    var slideshow = new Flickity(
                        slideshowElement,
                        {
                            cellAlign: 'left',
                            contain: true,
                            prevNextButtons: false,
                            pageDots: false,
                            autoPlay: false,
                            imagesLoaded: true,
                            fade: true,
                            draggable: false,
                            dragThreshold: 1
                        }
                    )

                    nextElement.addEventListener(
                        'click',
                        function (event) {
                            slideshow.next()
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

        function carouselIframes() {
            return {
                slide: 0,
                next() {

                    if (this.slide < 1) {
                        this.slide = this.slide + 1
                    }

                },
                prev() {

                    if (this.slide > 0) {
                        this.slide = this.slide - 1
                    }

                },
                carouselIframesInit(id) {

                    var slideshowElement = document.querySelector('.js-slideshow-' + id)
                    var nextElement = document.querySelector('.js-slideshow-' + id + '__next')
                    var prevElement = document.querySelector('.js-slideshow-' + id + '__prev')

                    var slideshow = new Flickity(
                        slideshowElement,
                        {
                            cellAlign: 'left',
                            contain: true,
                            prevNextButtons: false,
                            pageDots: false,
                            fade: true,
                            autoPlay: false,
                            imagesLoaded: true,
                            draggable: false,
                            dragThreshold: 1
                        }
                    )

                    nextElement.addEventListener(
                        'click',
                        function (event) {
                            slideshow.next()
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

