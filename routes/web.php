<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;

Route::get('/', function () {
    return redirect()->route('flowers.index'); // Redirect home to flowers list
});

Route::resource('flowers', FlowerController::class);

