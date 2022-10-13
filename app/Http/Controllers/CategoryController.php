<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function showAddCategoryForm() {
        return view('category_add');
    }

    public function addCategory(Request $request) {
        Auth::user()->category()->create([
            'title' => $request->title
        ]);

        return redirect()->route('home');
    }
}
