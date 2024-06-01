<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('home');
})->name('home'); 

Route::get('/react-course-detail-lessons', function () {
    return view('react_course_detail_lessons');
})->name('react_course_detail_lessons');

Route::get('/react-course-detail-reviews', function () {
    return view('react_course_detail_reviews');
})->name('react_course_detail_reviews');

Route::get('/react-course-teachers-list', function () {
    return view('react_course_teachers_list');
})->name('react_course_teachers_list');

Route::get('/booking-form-onsite', function() {
    return view('booking_form_onsite');
})->name('booking_form_onsite');

Route::get('/booking-form-online', function() {
    return view('booking_form_online');
})->name('booking_form_online');

Route::get('/booking-form-detail-onsite', function() {
    return view('booking_form_detail_onsite');
})->name('booking_form_detail_onsite');

Route::get('/booking-form-detail-online', function() {
    return view('booking_form_detail_online');
})->name('booking_form_detail_online');

Route::get('/home-onsite', function() {
    return view('onsite_course_homePage');
})->name('onsite_course_homePage');