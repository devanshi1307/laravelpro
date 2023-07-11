<?php

namespace App\Http\Controllers\Frontend;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        // $all_categories = Category::where()->get();
        return view('frontend.index');
    }
}
