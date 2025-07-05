<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhishlistController extends Controller
{
    public function index()
    {
        $wishlist = auth()->user()->wishlist;
        return view('wishlist.index', compact('wishlist'));
    }

    public function addToWishlist(Request $request, $productId)
    {
       $user = auth()->user();

    
    if ($user->wishlist()->where('product_id', $productId)->exists()) {
        return response()->json([
            'status' => 'exists',
            'message' => 'Product is already in your wishlist.'
        ], 200);
    }

 
    $user->wishlist()->attach($productId);

    return response()->json([
        'status' => 'success',
        'message' => 'Product successfully added to your wishlist.'
    ], 200);
    }

    public function remove(Request $request, $productId)
    {
        
        auth()->user()->wishlist()->detach($productId);
        return redirect()->back()->with('success', 'Product removed from wishlist!');
    }
    public function clear()
    {
        auth()->user()->wishlist()->detach();

        return redirect()->back()->with('success', 'Wishlist cleared!');
    }
    public function check(Request $request, $productId)
    {
        $exists = auth()->user()->wishlist->contains($productId);
        return response()->json(['exists' => $exists]);
    }
    public function moveToCart(Request $request, $productId)
    {
       
        $user = auth()->user();
        $user->wishlist()->detach($productId);
        $user->cart()->attach($productId);
        return redirect()->back()->with('success', 'Product moved to cart!');
    }
    public function moveToWishlist(Request $request, $productId)
    {
        
        $user = auth()->user();
        $user->cart()->detach($productId);
        $user->wishlist()->attach($productId);

        return redirect()->back()->with('success', 'Product moved to wishlist!');
    }
    public function getWishlistCount()
    {
       
        $count = auth()->user()->wishlist()->count();

        return response()->json(['count' => $count]);
    }
    public function getWishlistProducts()
    {
        $products = auth()->user()->wishlist;

        return response()->json($products);
    }
    public function getWishlistProduct($productId)
    {
       
        $product = auth()->user()->wishlist()->where('product_id', $productId)->first();

        return response()->json($product);
    }
    public function getWishlistProductsByCategory($categoryId)
    {
        
        $products = auth()->user()->wishlist()->where('category_id', $categoryId)->get();

        return response()->json($products);
    }
    public function getWishlistProductsByPriceRange($minPrice, $maxPrice)
    {
        
        $products = auth()->user()->wishlist()->whereBetween('price', [$minPrice, $maxPrice])->get();

        
        return response()->json($products);
    }
    public function getWishlistProductsByDate($date)
    {
       
        $products = auth()->user()->wishlist()->whereDate('created_at', $date)->get();

        return response()->json($products);
    }


    public function front(){
   $mylists = auth()->user()->wishlist()->with('price')->get();

      return view('frontend.whishlist', compact('mylists'));
    }
}
