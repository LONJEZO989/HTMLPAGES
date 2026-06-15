<?php

use App\Models\Mix;
use Illuminate\Support\Facades\Route;

Route::get('/mixes', function () {

    $mixes = Mix::all()->groupBy('genre');

    return response()->json([
        'message' => 'API is working',
        'data' => $mixes
    ]);
});
