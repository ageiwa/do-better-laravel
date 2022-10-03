<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index() {
        return response('Здесь будут заявки')->header('Content-Type', 'text/plain');
    }
}
