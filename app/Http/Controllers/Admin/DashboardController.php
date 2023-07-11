<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;
use App\Models\User;
class DashboardController extends Controller
{
    function index()
    {
        $categories = Category::count();
        $posts = Post::count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();
         // return "i am db";
        return view('admin.dashboard',compact('categories','posts','users','admins'));
    }
}
