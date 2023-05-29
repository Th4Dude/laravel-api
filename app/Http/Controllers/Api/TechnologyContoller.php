<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyContoller extends Controller
{
    public function index() {

        $techologies = Technology::all();

        return response()->json([
            'success' => true,
            'result' => $techologies
        ]);
    }
    public function show(string $slug){
        
        $technology = Technology::where('slug', $slug)->with('projects')->first();

        return response()->json([
            'success' => true,
            'result' => $technology
        ]);

    }
}
