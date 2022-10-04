<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;

class AdsController extends Controller
{
    public function index() {
        $context = ['adss' => Ads::latest()->get()];
        return view('index', $context);
    }
}
