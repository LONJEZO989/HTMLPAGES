<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mix;

class MixController extends Controller
{
    public function index()
    {
        $mixes = Mix::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Mixes fetched successfully',
            'data' => $mixes
        ], 200);
    }
}
