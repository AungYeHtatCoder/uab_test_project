<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $products = Product::all();
        return response()->view('admin.product.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $categories = Category::all();
        $brands = Brand::all();
        return response()->view('admin.product.create', [
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request): RedirectResponse
    //     {
    //         // validate
    //         $data = $request->validated();
    
    //         // store
    //         $product = Product::create($data);
    
    //         // redirect
    //         return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    //     }
    public function store(Request $request): RedirectResponse
{
    // validate
    $data = $request->validate([
        'product_name' => 'required|string|max:255',
        'category_id' => 'required',
        'brand_id' => 'required',
        'product_description' => 'required|string',
        'product_price' => 'required|numeric|min:0',
         'product_old_price' => 'required|numeric|min:0,',
        'product_quantity' => 'required|numeric|min:0',
        'product_image' => 'required|image|max:2048', // add validation rule for image file
    ]);
    // store image
    // $imagePath = $request->file('product_image')->store('public/product_image');
    // $imageUrl = Storage::url($imagePath);
    if($request->hasFile('product_image')){
        $image = $request->file('product_image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/product_image');
        $image->move($destinationPath, $name);
        $imageUrl = $name;
    }

    // store product
    $product = new Product();
    $product->product_name = $data['product_name'];
    $product->category_id = $data['category_id'];
    $product->brand_id = $data['brand_id'];
    $product->product_description = $data['product_description'];
    $product->product_price = $data['product_price'];
    $product->product_old_price = $data['product_old_price'];
    $product->product_quantity = $data['product_quantity'];
    $product->product_image = $imageUrl;
    $product->save();
    // redirect
    return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        // get the product by id
        $product = Product::find($id);
        return response()->view('admin.product.show', [
            'product' => $product,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        // get the product by id
        $product_edit = Product::find($id);
        $categories_edit = Category::all();
        $brands_edit = Brand::all();
        return response()->view('admin.product.edit', [
            'product_edit' => $product_edit,
            'categories_edit' => $categories_edit,
            'brands_edit' => $brands_edit,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // validate
        $data = $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_description' => 'required|string',
            'product_price' => 'required|numeric|min:0',
            'product_old_price' => 'required|numeric|min:0',
            'product_quantity' => 'required|numeric|min:0',
            'product_image' => 'nullable|image|max:2048',
        ]);
    
        // retrieve product by id
        $product = Product::findOrFail($id);
    
        // format image path
        $imageUrl = $product->product_image ?? '';
    
        // if there's a new image uploaded
        if ($request->hasFile('product_image')) {
            $uploadedImage = $request->file('product_image');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $destinationPath = public_path('/product_image');
            $uploadedImage->move($destinationPath, $imageName);
            $imageUrl = $imageName;
        }
    
        // update product
        $product->update([
            'product_name' => $data['product_name'],
            'category_id' => $data['category_id'],
            'brand_id' => $data['brand_id'],
            'product_description' => $data['product_description'],
            'product_price' => $data['product_price'],
            'product_old_price' => $data['product_old_price'],
            'product_quantity' => $data['product_quantity'],
            'product_image' => $imageUrl,
        ]);
    
        // redirect
        return redirect()->route('admin.products.index')
                         ->with('success', 'Product updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        // delete
        $product = Product::find($id);
        $product->delete();
        // redirect
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}