<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Category::create($request->all());

        // Obtener la lista actualizada de categorías después de guardar la nueva categoría
        $categories = Category::all();

        // Redirigir a la vista categories.index con la lista actualizada de categorías
        return view('categories.index', compact('categories'))->with('alert-success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update($request->all());

        $categories = Category::all();

        return view('categories.index', compact('categories'))->with('alert-success', 'Category updated successfully.');
    }
}
