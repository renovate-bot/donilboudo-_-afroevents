<?php

namespace AfroEvents\Http\Controllers;

use Illuminate\Http\Request;

use AfroEvents\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $category = Category::create($input);
        
        return redirect('categories')->withSuccess('Category has been created.');
    }

    public function show($id)
    {
        $category = Category::find($id);
        
        return view('categories.show')->with('category', $category);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->with('category', $category);
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        
        $category->save();

        return redirect('categories')->withSuccess('Category has been updated.');
    }

    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        
        return redirect('categories')->withSuccess('Category has been deleted.');
    }
}
