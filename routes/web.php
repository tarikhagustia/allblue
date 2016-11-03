<?php
Route::get('/', 'Halaman@show');
Route::get('/email/new', 'SendEmail@send');
