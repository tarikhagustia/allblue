<?php
Route::get('/', 'Halaman@show');
Route::post('/email/new', 'SendEmail@send');
