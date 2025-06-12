<?php
 
 use Illuminate\Support\Facades\Route;
 use Budhaspec\Contactform\Http\Controllers\ContactFormController;
 use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;


 Route::middleware(['guest', 'web'])->group(function(){
    Route::get('contact', [ContactFormController::class, 'index']);
    Route::post('contact/save', [ContactFormController::class, 'store']);

    // Load Assets //
    Route::get('contactform-assets/{type}/{file}', function ($type, $file) {
        $path = __DIR__ . "/../resources/assets/{$type}/{$file}";
        if (!File::exists($path)) {
            abort(404);
        }
        $mime = $type === 'js' ? 'application/javascript' : 'text/css';
        return Response::make(File::get($path), 200)->header("Content-Type", $mime);
    })->where('type', 'js|css');

});

