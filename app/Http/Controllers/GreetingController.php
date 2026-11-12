<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet(Request $request,string $name = "Guest")
    {
        $name = $request->boolean('shout',false) ? strtoupper($name) : $name;
        return response()->json([
            "message" => "Hello, $name!"
        ]);
    }
}
