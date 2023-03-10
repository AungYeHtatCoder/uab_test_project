<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $products_all = Product::all();
        // Get all products, categories and brands with pagination of 12 order id desc 
        $products = Product::with('category', 'brand')->orderBy('id', 'desc')->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        // Return view with products, categories and brands
        return response()->view('welcome', compact('products_all', 'products', 'categories', 'brands'));
    }

    // get all products no pagination 
    // public function allProducts(): Response
    // {
    //     // Get all products, categories and brands with pagination of 12 order id desc 
    //     $all_products = Product::with('category', 'brand')->orderBy('id', 'desc')->get();
       
    //     // Return view with products, categories and brands
    //     return response()->view('welcome', compact('all_products'));
    // } 


    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }

    public function search(Request $request)
{
    $query = $request->input('search');

    // Search for products
    $products = Product::where('product_name', 'like', "%$query%")
                ->orWhere('product_description', 'like', "%$query%")
                ->get();

    // Search for categories
    $categories = Category::where('category_name', 'like', "%$query%")
                ->get();
    // Search for brands
    $brands = Brand::where('brand_name', 'like', "%$query%")
                ->get();
    // redirect to the search view with the resluts compacted
    return view('search', compact('products', 'categories', 'brands'));

}
}