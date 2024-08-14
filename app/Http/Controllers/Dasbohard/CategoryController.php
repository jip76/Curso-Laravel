<?php

namespace App\Http\Controllers\Dasbohard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;

use App\Models\Category;




class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(3);
        return view('dashboard.category.index',compact('categories'));
    }

   
    public function create()
    {
        $category = new Category();
        echo view('dashboard.category.create', compact('category'));
    }

    public function store(StoreRequest $request)
    {
              
        Category::create($request->validated());
        return to_route('category.index')->with('status','registro Creado');
    }

   
    public function show(Category $category)
    {
        return view('dashboard.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        echo view('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        
        $category->update($request->validated());
        return to_route('category.index')->with('status','registro actualizado');
    }

    
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index')->with('status','registro eliminado satifatoriamente');
    }
}
