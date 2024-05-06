<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
            $cart = Order::with('items')
                ->where('user_id', auth()->id())
                ->where('status', 'In cart')
                ->firstOrFail();
        } else {
            $cart = collect($request->session()->get('cart', []))->map(function ($item, $productId) {
                return (object)[
                    'product_id' => $productId,
                    'quantity' => $item['quantity'],
                    'name' => $item['name'],
                    'price' => $item['price'],
                ];
            });
        }

        return view('cart', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        Log::info('Add to cart method accessed');
        $productId = $request->input('productId');
        $product = Product::findOrFail($productId);
        $quantity = $request->input('quantity', 1);


        if (Auth::check()) {
            $this->addToCartDatabase($productId, $quantity);
        } else {
            $this->addToCartSession($request, $productId, $quantity);
        }

        return back()->with('success', 'Product added to cart!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }


    private function addToCartDatabase($productId, $quantity)
    {
        $product = Product::findOrFail($productId);

        if (auth()->check()) {
            $order = Order::firstOrCreate([
                'user_id' => auth()->id(),
                'status' => 'In cart',
            ], [
                'order_number' => strtoupper(Str::random(10))
            ]);

            $orderItem = $order->items()->where('product_id', $productId)->first();

            if ($orderItem) {
                $orderItem->increment('quantity', $quantity);
            } else {
                $order->items()->create([
                    'product_id' => $productId,
                    'quantity' => $quantity,
                ]);
            }

            return back()->with('success', 'Product added to cart!');
        } else {
            return $this->addToCartSession($request, $productId);
        }
    }

    private function addToCartSession(StoreOrderRequest $request, $productId, $quantity)
    {
        $product = Product::findOrFail($productId);
        $cart = $request->session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = ['quantity' => $quantity, 'name' => $product->name, 'price' => $product->price];
        }

        $request->session()->put('cart', $cart);

        return back()->with('success', 'Product added to cart!');
    }



    public function transferSessionCartToDatabase(Request $request)
    {
        $sessionCart = $request->session()->pull('cart', []);
        $order = Order::firstOrCreate([
            'user_id' => $user->id,
            'status' => 'In cart',
        ]);

        foreach ($sessionCart as $productId => $details) {
            $order->items()->updateOrCreate(
                ['product_id' => $productId],
                ['quantity' => $details['quantity'], 'price' => $details['price']]
            );
        }
    }
}
