<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/portfolio', 'portfolio');
Route::view('/services', 'services');
Route::view('/about', 'about');
Route::view('/blogs', 'blogs');

Route::prefix('/blogs')->group(function () {
    Route::view('/virtualization', 'blogs.virtualization');
    Route::view('/byod', 'blogs.byod');
    Route::view('/digital-transformation', 'blogs.digital-transformation');
    Route::view('/website-upgrade-considerations', 'blogs.website-upgrade-considerations');
    Route::view('/website-upgrade-why-when', 'blogs.website-upgrade-why-when');
    Route::view('/outsourcing', 'blogs.outsourcing');
});

Route::prefix('/services')->group(function () {
    Route::view('/social-media-marketing', 'services.social-media-marketing');
    Route::view('/seo-ppc', 'services.seo-ppc');
    Route::view('/brand-identity', 'services.brand-identity');
    Route::view('/media-production', 'services.media-production');
    Route::view('/web-development', 'services.web-development');
    Route::view('/dedicated-remote-staff', 'services.dedicated-remote-staff');
});

Route::post('/form-submission', [MailController::class, 'send']);

Route::view('/contact', 'contact');
