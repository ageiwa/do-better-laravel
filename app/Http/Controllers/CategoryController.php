<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function addCategory(Request $request) {
        // Auth::user()->category()->create([
        //     'title' => $request->title
        // ]);
    }
}
