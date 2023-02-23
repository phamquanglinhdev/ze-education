<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('course', 'CourseCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('tag', 'TagCrudController');
    Route::crud('teacher', 'TeacherCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('skill', 'SkillCrudController');
    Route::crud('basket', 'BasketCrudController');
    Route::crud('book', 'BookCrudController');
    Route::crud('post', 'PostCrudController');
    Route::crud('setting', 'SettingCrudController');
    Route::crud('review', 'ReviewCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('certificate', 'CertificateCrudController');
}); // this should be the absolute last line of this file