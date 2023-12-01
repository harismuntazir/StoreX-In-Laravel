<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\ProductDetail; // Assuming your model name is ProductDetail

class ProductController extends Controller
{
    /**
     * view the add product form
     */

    public function create(): Application|Factory|View|\Illuminate\Foundation\Application
    {
        return view('product/add-product');
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'product_name' => 'required|unique:product_details|max:255',
            'product_description' => 'nullable',
            'product_buy_price' => 'required|numeric|min:0',
            'product_sell_price' => 'required|numeric|min:0',
            'product_quantity' => 'required|integer|min:0',
        ]);

        // Create a new product
        $product = new ProductDetail();
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_buy_price = $request->input('product_buy_price');
        $product->product_sell_price = $request->input('product_sell_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->save();

        // Redirect to a specific route after successful creation
        return redirect()->route('products.create')->with('success', 'Product added successfully.');
    }

    /**
     * Display a listing of the product with pagination and search functionality.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function list(\Illuminate\Http\Request $request): \Illuminate\Contracts\View\View
    {
        $query = ProductDetail::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('product_name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('product_description', 'like', '%' . $searchTerm . '%');
                // Add more orWhere clauses if you want to search in additional fields
            });
        }

        $products = $query->paginate(10); // Paginate with 10 items per page
        return view('product/product-list', ['products' => $products]);
    }



    // get details of a specific product
    public function product($id): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $product = ProductDetail::findOrFail($id);
        return view('product/product-display', ['product' => $product]);
    }

    // show the old product details in the edit form
    public function edit($id): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $product = ProductDetail::findOrFail($id);  // Replace ProductDetail with your actual model name
        return view('product/edit-product', ['product' => $product]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_description' => 'nullable',
            'product_buy_price' => 'required|numeric|min:0',
            'product_sell_price' => 'required|numeric|min:0',
            'product_quantity' => 'required|integer|min:0',
        ]);

        $product = ProductDetail::findOrFail($id);  // Replace ProductDetail with your actual model name
        $product->update([
            'product_name' => $request->input('product_name'),
            'product_description' => $request->input('product_description'),
            'product_buy_price' => $request->input('product_buy_price'),
            'product_sell_price' => $request->input('product_sell_price'),
            'product_quantity' => $request->input('product_quantity'),
        ]);

        return redirect()->route('products.list')->with('success', 'Product updated successfully');
    }

    // invoice maker
    public function invoice(): Application|Factory|View|\Illuminate\Foundation\Application
    {
        return view('invoice/invoice-maker');
    }
}
