<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // fetch data from products
        $products = Product::get();
        // dd($products);        
        return view('home.index', compact('products'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function blog()
    {
        return view('home.blog');
    }
    public function blogdetail()
    {
        return view('home.blogdetail');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function hotel()
    {
        return view('home.hotel');
    }
    public function hoteldetail($id)      
    {
        $product = Product::find($id);
        // dd($hoteldetail->id);
        return view ('home.hoteldetail',compact('product'));

    }
    public function tour()
    {
        return view('home.tour');
    }
   
}
