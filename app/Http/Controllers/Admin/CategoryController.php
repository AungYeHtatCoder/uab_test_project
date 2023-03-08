<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $categories = Category::all();
        return response()->view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // validate request
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);
        // create category
        //dd($request->all());
        Category::create($request->all());
        // redirect to category index page with success message
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        // get category by id
        $category = Category::findOrFail($id);
        // return view with category
        return response()->view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        // get category by id
        $category_edit = Category::findOrFail($id);
        // return view with category
        return response()->view('admin.category.edit', compact('category_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // validate request
        $request->validate([
            'category_name' => 'required|unique:categories,category_name,' . $id,
        ]);
        // get category by id
        $category = Category::findOrFail($id);
        // update category
        $category->update($request->all());
        // redirect to category index page with success message
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        // get category by id
        $category = Category::findOrFail($id);
        // delete category
        $category->delete();
        // redirect to category index page with success message
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}