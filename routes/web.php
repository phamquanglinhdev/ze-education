<?php

use App\Http\Controllers\Client\CourseController;
use App\Http\Controllers\Client\LibraryController;
use App\Http\Controllers\Client\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/danh-sach-khoa-hoc", [CourseController::class, "index"])->name("courses");
Route::get("/khoa-hoc/{slug?}", [CourseController::class, "show", "slug"])->name("course");
Route::any("/tat-ca-giao-vien", [TeacherController::class, "index"])->name("teachers");
Route::any("/thu-vien", [LibraryController::class, "index"])->name("library");
