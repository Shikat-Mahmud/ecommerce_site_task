<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        if (auth()->check() && auth()->user()->hasAnyPermission(['create-product', 'show-product', 'edit-product', 'delete-product'])) {
            $products = Product::all();
            return view('admin.main.product.index', compact('products'));
        } else {
            return redirect()->back()->with('error', 'You do not have permission to Products.');
        }
    }

    public function create()
    {
        if (auth()->user()->can('create-product')) {
            return view('admin.main.product.create', [
                'categories' => Category::where('status', 1)->get(),
                'units' => Unit::where('status', 1)->get(),
            ]);
        } else {
            return redirect()->back()->with('error', 'You do not have permission to add product.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|string|max:20',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'category_id' => 'required|exists:categories,id',
                'unit_id' => 'required|exists:units,id',
            ]);

            $inputs = $request->all();
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
                $inputs['image'] = $imagePath;
            }

            $product = new Product();
            $product->fill($inputs);
            $product->save();

            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    public function show(string $id)
    {
        if (auth()->user()->can('show-product')) {
            $product = Product::findOrFail($id);
            $category = Category::all();
            $unit = Unit::all();
            return view('admin.main.product.show', compact('product', 'category', 'unit'));
        } else {
            return redirect()->back()->with('error', 'You do not have permission to show product.');
        }
    }

    public function edit(string $id)
    {
        if (auth()->user()->can('edit-product')) {
            return view('admin.main.product.edit', [
                'product' => Product::find($id),
                'categories' => Category::where('status', 1)->get(),
                'units' => Unit::where('status', 1)->get(),
            ]);
        } else {
            return redirect()->back()->with('error', 'You do not have permission to edit products.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|string|max:20',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'category_id' => 'required|exists:categories,id',
                'unit_id' => 'required|exists:units,id',
            ]);

            $product = Product::find($id);

            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->status = $request->input('status');
            $product->description = $request->input('description');
            $product->category_id = $request->input('category_id');
            $product->unit_id = $request->input('unit_id');

            if ($request->hasFile('image')) {
                if ($product->image) {
                    Storage::delete($product->image);
                }

                $imagePath = $request->file('image')->store('products', 'public');
                $product->image = $imagePath;
            }

            $product->save();
            return redirect()->route('products.index')->with('success', 'Product Updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        if (auth()->user()->can('delete-product')) {
            Product::find($id)->delete();
            return redirect()->back()->with('success', 'Product deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'You do not have permission to delete product.');
        }
    }
}
