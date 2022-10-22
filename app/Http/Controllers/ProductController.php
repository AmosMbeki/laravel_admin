<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::paginate());
    }

    
    public function store(Request $request)
    {
        $product = Product::create($request->only('title', 'description', 'image', 'price'));

        return response(new ProductResource($product) , Response::HTTP_CREATED); 
    }

    
    public function show($id)
    {
        return new ProductResource(Product::find($id));
    }

    
    public function update(Request $request, $id)
    {
        $product = new ProductResource(Product::find($id));

        $product->update($request->only('title', 'description', 'image', 'price'));

        return response(new ProductResource($product), Response::HTTP_ACCEPTED);
    }

    
    public function destroy($id)
    {
        Product::destroy($id);

        return \response(null, Response::HTTP_NO_CONTENT);
    }
}
