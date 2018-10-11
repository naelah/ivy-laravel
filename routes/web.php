<?php

Route::get('welcome', function () {
    return view('welcome');
});



// Admin routes

Route::get('admin', function () {
    return view('admin_pages.dashboard');
});

Route::get('admin/invoice', function () {
    return view('admin_pages.invoices');
});

Route::get('admin/message', function () {
    return view('admin_pages.messages');
});

Route::get('admin/reservation', function () {
    return view('admin_pages.reservations');
});

Route::get('admin/salon', function () {
    return view('admin_pages.salons');
});

Route::get('admin/staff', function () {
    return view('admin_pages.staffs');
});

Route::get('admin/user', function () {
    return view('admin_pages.users');
});
