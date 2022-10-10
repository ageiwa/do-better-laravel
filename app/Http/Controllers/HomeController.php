<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'adsList' => Auth::user()->ads()->latest()->get(),
            'username' => Auth::user()->name
        ]);
    }

    public function showAddAdsForm()
    {
        return view('ads__add');
    }

    public function storeBb(Request $request)
    {
        Auth::user()->ads()->create([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price
        ]);

        return redirect()->route('home');
    }
}
