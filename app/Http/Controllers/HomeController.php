<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return Product::with('many_to_many')->find(1);
        //return Product::find(1)->user_one_to_many;
        
        //return view('welcome');
    }
}
