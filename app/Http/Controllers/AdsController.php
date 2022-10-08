<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;

class AdsController extends Controller
{
    public function index() {
        return view('index', [
            'adsList' => Ads::latest()->get()
        ]);
    }
}
