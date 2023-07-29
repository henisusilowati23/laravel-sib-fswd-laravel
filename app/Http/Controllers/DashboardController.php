<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $abouts =  AboutCompany::count();
        $user =  User::count();
        $category = Category::count();
        $product =  Product::count();

        return view('dashboard',compact('abouts', 'user', 'category', 'product'));

    }

}
