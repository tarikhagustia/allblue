<?php
// Get Routes
Route::get('/', 'Halaman@show');
Route::get('/contact/thankyou', 'contactController@thankyou')->name('AfterInputContactForm');
Route::post('/email/new', 'SendEmail@send', function(){
  
});
