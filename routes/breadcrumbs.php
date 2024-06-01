<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('home'));
});

// course detail
Breadcrumbs::for('react_course_detail_lessons', function (BreadcrumbTrail $trail) {
    $trail->parent('home'); 
    $trail->push('Course Details', route('react_course_detail_lessons'));
});

// course review
Breadcrumbs::for('react_course_detail_reviews', function (BreadcrumbTrail $trail) {
    $trail->parent('home'); 
    $trail->push('Course Details', route('react_course_detail_reviews'));
});

// teacher lists 
Breadcrumbs::for('react_course_teachers_list', function (BreadcrumbTrail $trail) {
    $trail->parent('react_course_detail_lessons'); 
    $trail->push('Teacher Lists', route('react_course_teachers_list'));
});

// booking form
Breadcrumbs::for('booking_form', function (BreadcrumbTrail $trail) {
    $trail->parent('react_course_teachers_list'); 
    $trail->push('Booking Form', route('booking_form_onsite'));
});

Breadcrumbs::for('booking_form_detail_onsite', function (BreadcrumbTrail $trail) {
    $trail->parent('booking_form'); 
    $trail->push('Booking Form Detail', route('booking_form_detail_onsite'));
});
