<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

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
            'user' => Auth::user()
        ]);
    }

    public function storeAds(Request $request)
    {
        // Auth::user()->ads()->create([
        //     'category_id' => $request->category,
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'status' => 'Новая',
        //     'img_url' => './ads-img/ads1.jpg',
        // ]);
    }
}
