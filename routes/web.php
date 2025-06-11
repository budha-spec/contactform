<?php
 
 use Illuminate\Support\Facades\Route;
 use Budhaspec\Contactform\Http\Controllers\ContactFormController;

 Route::middleware(['guest', 'web'])->group(function(){
     Route::get('contact', [ContactFormController::class, 'index']);
     Route::post('contact/save', [ContactFormController::class, 'store']);
});

