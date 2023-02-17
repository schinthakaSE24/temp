<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->product = new Product();
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'title' =>  'required',
            'name' =>  'required',

        ]);



        $product = new Product;


        $product->title = $request->title;
        $product->name= $request->name;


        $product->save();

        return redirect()->route('dashboard')->with('success', 'Student Added successfully.');

    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title'     =>  'required',
            'name'      =>  'required',


        ]);


        $product = Product::find($request->hidden_id);

        $product->title = $request->title;

        $product->name = $request->name;



        $student->save();

        return redirect()->route('dashboard')->with('success', 'Student Data has been updated successfully');
    }


    public function delete($product_id)
    {
        $product = $this->product->find($product_id);

        $product->delete();

        return redirect()->back();
    }

}
