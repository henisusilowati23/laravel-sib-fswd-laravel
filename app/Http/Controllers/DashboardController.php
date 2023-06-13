<?php

namespace App\Http\Controllers;

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
        $role =  Role::count();
        $user =  User::count();
        $category = Category::count();
        $product =  Product::count();

        if (Auth::user()->role->name == 'User') {
            return redirect()->route('product.index');
        } else {
            return view('dashboard',compact('role', 'user', 'category', 'product'));
        }
        
    }
    
}
