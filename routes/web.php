<?php
use App\Http\Controllers\ContactController;

Route::resource('contacts', ContactController::class);

Route::get('/', function () {
    return redirect()->route('contacts.index');
});

