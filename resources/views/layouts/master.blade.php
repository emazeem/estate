<?php
$favion=\App\Models\Settings::where('slug','favion')->first();
?>
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preload" href="{{url('dist/fonts/abril-display-bold.woff2')}}" as="font" crossorigin>
    <link rel="stylesheet" href="{{url('dist/css/app-2961a796ad.css')}}">
    <!-- <style>[x-cloak]{display:none}</style> -->
    <link rel="shortcut icon" href="{{Storage::disk('local')->url('/settings/'.$favion->value)}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{Storage::disk('local')->url('/settings/'.$favion->value)}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{Storage::disk('local')->url('/settings/'.$favion->value)}}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{Storage::disk('local')->url('/settings/'.$favion->value)}}">
    <link rel="manifest" href="{{url('dist/images/favicon/manifest.json')}}">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">
    <meta name="application-name" content="craftcms-tailwind">
    <title>Real Estate &amp; Property Development | Alliance Investments</title>
</head><body>
<div x-data="cookieConsent()" x-init="show()" x-show.transition.opacity.duration.450ms="visible" x-cloak
     class="fixed bottom-0 left-0 w-screen flex justify-center z-50">
    <div class="flex items-center cursor-pointer px-3 lg:px-5 py-2 sm:mb-4 bg-primary-600 text-white sm:rounded"
         x-on:click="hide()">
            <span class="text-2xs sm:text-xs">
                <p>This website uses cookies. By using our website you consent to all cookies in accordance with our <a
                            href="privacy-policy.html">Privacy Policy.</a></p>
            </span>
        <a href="#" class="ml-2 text-base mt-1 font-bold text-white" x-on:click.prevent="hide()">
            &times;
        </a></div>
</div>
<div x-data="globalJs()" x-init="cookies()" class="transition ease-smooth-out delay-100 duration-700 bg-primary-600">
    @include('layouts.partials.header')
    <div class="transition ease-smooth-out delay-100 duration-1000 " x-bind:class="{ 'opacity-10 ' : megaMenu != null, '' : megaMenu == null }" x-on:click="megaMenu = null, search = null">
        @yield('content')
        @include('layouts.partials.footer')
    </div>
</div>
<script src="{{url('dist/js/app-5aebc56193.js')}}" defer></script>
<script src="{{url('dist/js/includes.js')}}"></script>

<script>
    includeHTML();
</script>

<script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "author": {
                    "@id": "#identity"
                },
                "copyrightHolder": {
                    "@id": "#identity"
                },
                "copyrightYear": "2019-08-22T14:51:00+01:00",
                "creator": {
                    "@id": "#creator"
                },
                "dateModified": "2021-08-24T10:28:57+01:00",
                "datePublished": "2019-08-22T14:51:00+01:00",
                "description": "Alliance Investments is a leading property development company based in Manchester, offering investment opportunities across the UK.",
                "headline": "Real Estate & Property Development",
                "image": {
                    "@type": "ImageObject",
                    "url": "https://alliance-investments.com/uploads/images/_1200x630_crop_center-center_82_none/2019-10-24-Manchester-skyline.jpg?mtime=1572341953"
                },
                "inLanguage": "en",
                "mainEntityOfPage": "https://alliance-investments.com/",
                "name": "Real Estate & Property Development",
                "publisher": {
                    "@id": "#creator"
                },
                "url": "https://alliance-investments.com/"
            }, {
                "@id": "#identity",
                "@type": "LocalBusiness",
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "United Kingdom",
                    "postalCode": "M17 1QS",
                    "streetAddress": "Alliance House, Clarence Avenue, Trafford Park"
                },
                "priceRange": "$",
                "sameAs": ["https://twitter.com/allianceinv?lang=en",
                    "https://www.facebook.com/allianceinvestmentsmanchester/?_rdc=1&amp;_rdr",
                    "https://www.linkedin.com/company/alliance-investments-ltd/",
                    "https://www.youtube.com/channel/UCK4Er1tSQTTjBYPqGciIdvw",
                    "https://www.instagram.com/alliance_investments/"
                ]
            }, {
                "@id": "#creator",
                "@type": "Organization"
            }, {
                "@type": "BreadcrumbList",
                "description": "Breadcrumbs list",
                "itemListElement": [{
                    "@type": "ListItem",
                    "item": "https://alliance-investments.com/",
                    "name": "Home",
                    "position": 1
                }],
                "name": "Breadcrumbs"
            }]
        }
    </script>
<script>
    function cookieConsent() {
        return {
            visible: true,
            show() {
                this.visible = Cookies.get('cookieConsent') ? false : true;
            },
            hide() {
                this.visible = false;
                Cookies.set('cookieConsent', 'false', {
                    expires: 6
                });
            }
        }
    };

    function heroLargeSlideshow() {
        return {
            heroLargeSlideshowInit(id) {

                var slideshowElement = document.querySelector('.js-slideshow-' + id)
                var nextElement = document.querySelector('.js-slideshow-' + id + '__next')
                var prevElement = document.querySelector('.js-slideshow-' + id + '__prev')

                var slideshow = new Flickity(
                    slideshowElement, {
                        cellAlign: 'left',
                        contain: true,
                        prevNextButtons: false,
                        pageDots: true,
                        wrapAround: true,
                        fade: true,
                        autoPlay: 7000,
                        pauseAutoPlayOnHover: false,
                        imagesLoaded: true,
                        dragThreshold: 1,
                        groupCells: true
                    }
                )

                nextElement.addEventListener(
                    'click',
                    function (event) {
                        if (slideshow.selectedIndex == (0 - 1)) {
                            slideshow.select(1)
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

    function imageSlideshowText() {
        return {
            imageSlideshowTextInit(id) {

                var slideshowElement = document.querySelector('.js-slideshow-' + id)

                var slideshow = new Flickity(
                    slideshowElement, {
                        cellAlign: 'left',
                        contain: true,
                        wrapAround: true,
                        fade: true,
                        prevNextButtons: false,
                        pageDots: true,
                        autoPlay: false,
                        imagesLoaded: true,
                        dragThreshold: 1,
                    }
                )

            }
        }
    };

    function carouselLocations() {
        return {
            carouselLocationsInit(id) {

                var slideshowElement = document.querySelector('.js-slideshow-' + id)
                var nextElement = document.querySelector('.js-slideshow-' + id + '__next')
                var prevElement = document.querySelector('.js-slideshow-' + id + '__prev')

                var slideshow = new Flickity(
                    slideshowElement, {
                        cellAlign: 'left',
                        contain: true,
                        prevNextButtons: false,
                        pageDots: true,
                        autoPlay: false,
                        imagesLoaded: true,
                        dragThreshold: 1,
                        groupCells: true
                    }
                )

                nextElement.addEventListener(
                    'click',
                    function (event) {
                        if (slideshow.selectedIndex == (4 - 1)) {
                            slideshow.select(1)
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

    function carouselNews() {
        return {
            carouselNewsInit(id) {

                var slideshowElement = document.querySelector('.js-slideshow-' + id)
                var nextElement = document.querySelector('.js-slideshow-' + id + '__next')
                var prevElement = document.querySelector('.js-slideshow-' + id + '__prev')

                var slideshow = new Flickity(
                    slideshowElement, {
                        cellAlign: 'left',
                        contain: true,
                        prevNextButtons: false,
                        pageDots: true,
                        autoPlay: false,
                        imagesLoaded: true,
                        dragThreshold: 1,
                        groupCells: true
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

    function globalJs() {
        return {
            megaMenu: null,
            search: null,
            mobileMenu: null,
            cookies() {

                let searchParams = new URLSearchParams(window.location.search);

                const cookies = [{
                    'param': 'utm_medium',
                    'field': 'medium'
                },
                    {
                        'param': 'utm_source',
                        'field': 'source'
                    },
                    {
                        'param': 'utm_campaign',
                        'field': 'campaign'
                    },
                    {
                        'param': 'sector',
                        'field': 'sector'
                    },
                    {
                        'param': 'language',
                        'field': 'language'
                    },
                    {
                        'param': 'gclid',
                        'field': 'gclid'
                    },
                    {
                        'param': 'keyword',
                        'field': 'keyword'
                    }
                ];

                for (i in cookies) {
                    if (searchParams.has(cookies[i].param) == true) {
                        Cookies.set(cookies[i].param, searchParams.get(cookies[i].param));
                    }

                    const input = document.querySelector('input[name=' + cookies[i].field + ']')
                    const inputs = document.querySelectorAll('input[name=' + cookies[i].field + ']')

                    if (typeof (input) != 'undefined' && input != null)

                        if (Cookies.get(cookies[i].param) != null) {

                            inputs.forEach(function (element, index) {
                                element.value = Cookies.get(cookies[i].param)
                            })

                        }

                }

            }

        }
    };
</script>
</body>
</html>