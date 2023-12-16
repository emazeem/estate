<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResidentialDevController;
use App\Http\Controllers\ResidentialGalleryController;
use App\Http\Controllers\ResidentialVideoController;
use App\Http\Controllers\ResidentialFeatureController;
use App\Http\Controllers\ResidentialPerksController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SpotlightLocationController;
use App\Http\Controllers\WhyBuyLocationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceSliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ConstructionUpdatesController;

Route::get('optimize', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize');
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    dd('YOUR APP IS OPTIMIZED');
});
Route::get('storage', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    dd('Storage linked');
});
Route::get('configure', function () {
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    dd('Storage linked');
});

Route::get('', [WebController::class, 'home'])->name('home');
Route::get('contact-us', [WebController::class, 'contact_us'])->name('contact.us');
Route::post('contact-submit-form', [WebController::class, 'contact_submit'])->name('contact.submit');
Route::get('privacy-policy', [WebController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('terms-and-conditions', [WebController::class, 'terms_and_conditions'])->name('terms.and.conditions');
Route::get('complaints', [WebController::class, 'complaints'])->name('complaints');
Route::get('testimonials', [WebController::class, 'testimonials'])->name('testimonial');
Route::get('news', [WebController::class, 'news'])->name('new');
Route::get('team', [WebController::class, 'team'])->name('teams');
Route::get('construction-updates', [WebController::class, 'construction_updates'])->name('construct.updates');
Route::get('construction-update/{id}', [WebController::class, 'construction_update'])->name('construct.update');
Route::get('all-faqs', [WebController::class, 'faq_all'])->name('faqs');
Route::get('all-guides', [WebController::class, 'all_guides'])->name('all.guides');
Route::get('guide/{id}', [WebController::class, 'guide'])->name('guide.single');
Route::get('location/{id}', [WebController::class, 'location'])->name('location');
Route::get('residential/{id}', [WebController::class, 'residential'])->name('residential');
Route::get('residential-all', [WebController::class, 'residential_all'])->name('residential.all');
Route::get('team/detail/{id}', [WebController::class, 'team_detail'])->name('team.detail');
Route::get('services/{id}', [WebController::class, 'services'])->name('service');
Route::get('thank-you', [WebController::class, 'thank_you'])->name('thank.you');


Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'sliders'], function () {
            Route::get('', [SlidersController::class, 'index'])->name('sliders');
            Route::post('', [SlidersController::class, 'fetch'])->name('sliders.fetch');
            Route::post('store', [SlidersController::class, 'store'])->name('sliders.store');
            Route::post('edit', [SlidersController::class, 'edit'])->name('sliders.edit');
            Route::post('update', [SlidersController::class, 'update'])->name('sliders.update');
            Route::post('delete', [SlidersController::class, 'destroy'])->name('sliders.destroy');
        });
        Route::group(['prefix' => 'testimonials'], function () {
            Route::get('', [TestimonialsController::class, 'index'])->name('testimonials');
            Route::post('', [TestimonialsController::class, 'fetch'])->name('testimonials.fetch');
            Route::post('store', [TestimonialsController::class, 'store'])->name('testimonials.store');
            Route::post('edit', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
            Route::post('update', [TestimonialsController::class, 'update'])->name('testimonials.update');
            Route::post('delete', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');
        });
        Route::group(['prefix' => 'news'], function () {
            Route::get('', [NewsController::class, 'index'])->name('news');
            Route::post('', [NewsController::class, 'fetch'])->name('news.fetch');
            Route::post('store', [NewsController::class, 'store'])->name('news.store');
            Route::post('edit', [NewsController::class, 'edit'])->name('news.edit');
            Route::post('update', [NewsController::class, 'update'])->name('news.update');
            Route::post('delete', [NewsController::class, 'destroy'])->name('news.destroy');
        });
        Route::group(['prefix' => 'residential-developments'], function () {
            Route::get('', [ResidentialDevController::class, 'index'])->name('residential.dev');
            Route::post('', [ResidentialDevController::class, 'fetch'])->name('residential.dev.fetch');
            Route::post('store', [ResidentialDevController::class, 'store'])->name('residential.dev.store');
            Route::post('edit', [ResidentialDevController::class, 'edit'])->name('residential.dev.edit');
            Route::post('update', [ResidentialDevController::class, 'update'])->name('residential.dev.update');
            Route::post('delete', [ResidentialDevController::class, 'destroy'])->name('residential.dev.destroy');
        });
        Route::group(['prefix' => 'residential-gallery'], function () {
            Route::get('', [ResidentialGalleryController::class, 'index'])->name('residential.gallery');
            Route::post('', [ResidentialGalleryController::class, 'fetch'])->name('residential.gallery.fetch');
            Route::post('store', [ResidentialGalleryController::class, 'store'])->name('residential.gallery.store');
            Route::post('edit', [ResidentialGalleryController::class, 'edit'])->name('residential.gallery.edit');
            Route::post('update', [ResidentialGalleryController::class, 'update'])->name('residential.gallery.update');
            Route::post('delete', [ResidentialGalleryController::class, 'destroy'])->name('residential.gallery.destroy');
        });
        Route::group(['prefix' => 'residential-video'], function () {
            Route::get('', [ResidentialVideoController::class, 'index'])->name('residential.video');
            Route::post('', [ResidentialVideoController::class, 'fetch'])->name('residential.video.fetch');
            Route::post('store', [ResidentialVideoController::class, 'store'])->name('residential.video.store');
            Route::post('edit', [ResidentialVideoController::class, 'edit'])->name('residential.video.edit');
            Route::post('update', [ResidentialVideoController::class, 'update'])->name('residential.video.update');
            Route::post('delete', [ResidentialVideoController::class, 'destroy'])->name('residential.video.destroy');
        });
        Route::group(['prefix' => 'residential-feature'], function () {
            Route::get('', [ResidentialFeatureController::class, 'index'])->name('residential.feature');
            Route::post('', [ResidentialFeatureController::class, 'fetch'])->name('residential.feature.fetch');
            Route::post('store', [ResidentialFeatureController::class, 'store'])->name('residential.feature.store');
            Route::post('edit', [ResidentialFeatureController::class, 'edit'])->name('residential.feature.edit');
            Route::post('update', [ResidentialFeatureController::class, 'update'])->name('residential.feature.update');
            Route::post('delete', [ResidentialFeatureController::class, 'destroy'])->name('residential.feature.destroy');
        });
        Route::group(['prefix' => 'residential-perk'], function () {
            Route::get('', [ResidentialPerksController::class, 'index'])->name('residential.perk');
            Route::post('', [ResidentialPerksController::class, 'fetch'])->name('residential.perk.fetch');
            Route::post('store', [ResidentialPerksController::class, 'store'])->name('residential.perk.store');
            Route::post('edit', [ResidentialPerksController::class, 'edit'])->name('residential.perk.edit');
            Route::post('update', [ResidentialPerksController::class, 'update'])->name('residential.perk.update');
            Route::post('delete', [ResidentialPerksController::class, 'destroy'])->name('residential.perk.destroy');
        });
        Route::group(['prefix' => 'locations'], function () {
            Route::get('', [LocationController::class, 'index'])->name('locations');
            Route::post('', [LocationController::class, 'fetch'])->name('locations.fetch');
            Route::post('store', [LocationController::class, 'store'])->name('locations.store');
            Route::post('edit', [LocationController::class, 'edit'])->name('locations.edit');
            Route::post('update', [LocationController::class, 'update'])->name('locations.update');
            Route::post('delete', [LocationController::class, 'destroy'])->name('locations.destroy');
        });
        Route::group(['prefix' => 'why-buy-locations'], function () {
            Route::get('', [WhyBuyLocationController::class, 'index'])->name('locations.why.buy');
            Route::post('', [WhyBuyLocationController::class, 'fetch'])->name('locations.why.buy.fetch');
            Route::post('store', [WhyBuyLocationController::class, 'store'])->name('locations.why.buy.store');
            Route::post('edit', [WhyBuyLocationController::class, 'edit'])->name('locations.why.buy.edit');
            Route::post('update', [WhyBuyLocationController::class, 'update'])->name('locations.why.buy.update');
            Route::post('delete', [WhyBuyLocationController::class, 'destroy'])->name('locations.why.buy.destroy');
        });
        Route::group(['prefix' => 'spotlight'], function () {
            Route::get('', [SpotlightLocationController::class, 'index'])->name('spotlight');
            Route::post('', [SpotlightLocationController::class, 'fetch'])->name('spotlight.fetch');
            Route::post('store', [SpotlightLocationController::class, 'store'])->name('spotlight.store');
            Route::post('edit', [SpotlightLocationController::class, 'edit'])->name('spotlight.edit');
            Route::post('update', [SpotlightLocationController::class, 'update'])->name('spotlight.update');
            Route::post('delete', [SpotlightLocationController::class, 'destroy'])->name('spotlight.destroy');
        });
        Route::group(['prefix' => 'services'], function () {
            Route::get('', [ServiceController::class, 'index'])->name('services');
            Route::post('', [ServiceController::class, 'fetch'])->name('services.fetch');
            Route::post('store', [ServiceController::class, 'store'])->name('services.store');
            Route::post('edit', [ServiceController::class, 'edit'])->name('services.edit');
            Route::post('update', [ServiceController::class, 'update'])->name('services.update');
            Route::post('delete', [ServiceController::class, 'destroy'])->name('services.destroy');
        });
        Route::group(['prefix' => 'service-sliders'], function () {
            Route::get('', [ServiceSliderController::class, 'index'])->name('services.slider');
            Route::post('', [ServiceSliderController::class, 'fetch'])->name('services.slider.fetch');
            Route::post('store', [ServiceSliderController::class, 'store'])->name('services.slider.store');
            Route::post('edit', [ServiceSliderController::class, 'edit'])->name('services.slider.edit');
            Route::post('update', [ServiceSliderController::class, 'update'])->name('services.slider.update');
            Route::post('delete', [ServiceSliderController::class, 'destroy'])->name('services.slider.destroy');
        });
        Route::group(['prefix' => 'team'], function () {
            Route::get('', [TeamController::class, 'index'])->name('team');
            Route::post('', [TeamController::class, 'fetch'])->name('team.fetch');
            Route::post('store', [TeamController::class, 'store'])->name('team.store');
            Route::post('edit', [TeamController::class, 'edit'])->name('team.edit');
            Route::post('update', [TeamController::class, 'update'])->name('team.update');
            Route::post('delete', [TeamController::class, 'destroy'])->name('team.destroy');
        });
        Route::group(['prefix' => 'guide'], function () {
            Route::get('', [GuideController::class, 'index'])->name('guide');
            Route::post('', [GuideController::class, 'fetch'])->name('guide.fetch');
            Route::post('store', [GuideController::class, 'store'])->name('guide.store');
            Route::post('edit', [GuideController::class, 'edit'])->name('guide.edit');
            Route::post('update', [GuideController::class, 'update'])->name('guide.update');
            Route::post('delete', [GuideController::class, 'destroy'])->name('guide.destroy');
        });
        Route::group(['prefix' => 'construction-update'], function () {
            Route::get('', [ConstructionUpdatesController::class, 'index'])->name('construction.update');
            Route::post('', [ConstructionUpdatesController::class, 'fetch'])->name('construction.update.fetch');
            Route::post('store', [ConstructionUpdatesController::class, 'store'])->name('construction.update.store');
            Route::post('edit', [ConstructionUpdatesController::class, 'edit'])->name('construction.update.edit');
            Route::post('update', [ConstructionUpdatesController::class, 'update'])->name('construction.update.update');
            Route::post('delete', [ConstructionUpdatesController::class, 'destroy'])->name('construction.update.destroy');
        });



        Route::get('home', [SettingsController::class, 'home'])->name('admin.home');
        Route::get('faqs', [SettingsController::class, 'faqs'])->name('admin.faqs');
        Route::get('contact', [SettingsController::class, 'contact'])->name('admin.contact');
        Route::get('footer', [SettingsController::class, 'footer'])->name('admin.footer');
        Route::get('policy', [SettingsController::class, 'policy'])->name('admin.policy');
        Route::get('complaints', [SettingsController::class, 'complaints'])->name('admin.complaints');
        Route::get('tac', [SettingsController::class, 'tac'])->name('admin.tac');
        Route::post('fetch', [SettingsController::class, 'fetch'])->name('settings.fetch');
        Route::post('edit', [SettingsController::class, 'edit'])->name('settings.edit');
        Route::post('store', [SettingsController::class, 'store'])->name('settings.store');
        Route::post('destroy', [SettingsController::class, 'settings'])->name('settings.destroy');
    });
});