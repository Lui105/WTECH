<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (auth()->check()) {
            $order = Order::with(['items'])
              ->where('user_id', auth()->id())
              ->where('status', 'In cart')
              ->first();
        }
        else{
            $id = $request->session()->get('guest_id', Str::random(40));
            $order = Order::with(['items'])
              ->where('guest_id', $id)
              ->where('status', 'In cart')
              ->first();

        }

        if ($order) {
            $products = $order->items;
        } else {
            $products = collect();
        }
        if ($order) {
            $products = $order->items->each(function ($item) {
                $firstImage = $item->images->first();
                $item->image_url = $firstImage ? asset('storage/images/' . $item->id . '/' . $firstImage->image_name) : asset('storage/images/default.png');
            });
        }

        return view('cart_page', compact('products', 'order'));
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
            $order = Order::firstOrCreate([
                    'user_id' => auth()->id(),
                    'status' => 'In cart',
                    ], [
                        'order_number' => strtoupper(Str::random(10)),
                        'total_price' => 0
                    ]);

        } else {
            $guestId = $request->session()->get('guest_id', strtoupper(Str::random(40)));

            $request->session()->put('guest_id', $guestId);

            $order = Order::firstOrCreate([
                'guest_id' => $guestId,
                'status' => 'In cart',
            ], [
                'order_number' => strtoupper(Str::random(10)),
                'total_price' => 0
            ]);
        }
//         $order = Order::firstOrCreate([
//         'user_id' => auth()->id(),
//         'status' => 'In cart',
//         ], [
//             'order_number' => strtoupper(Str::random(10)),
//             'total_price' => 0
//         ]);

        $orderItem = $order->items()->where('product_id', $productId)->first();
        $totalPriceChange = 0;
        if ($orderItem) {
            $currentQuantity = $orderItem->pivot->quantity;
            $orderItem->pivot->quantity = $currentQuantity + $quantity;
            $orderItem->pivot->save();
            $totalPriceChange = $product->price * $quantity;
        } else {
            $order->items()->attach($productId, ['quantity' => $quantity]);
            $totalPriceChange = $product->price * $quantity;
        }

        $order->total_price += $totalPriceChange;
        $order->save();
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


//     private function addToCartDatabase($productId, $quantity)
//     {
//         $product = Product::findOrFail($productId);
//
//         if (auth()->check()) {
//             $order = Order::firstOrCreate([
//                 'user_id' => auth()->id(),
//                 'status' => 'In cart',
//             ], [
//                 'order_number' => strtoupper(Str::random(10)),
//                 'total_price' => 0
//             ]);
//
//             $orderItem = $order->items()->where('product_id', $productId)->first();
//             $totalPriceChange = 0;
//             if ($orderItem) {
//                 $currentQuantity = $orderItem->pivot->quantity;
//                 $orderItem->pivot->quantity = $currentQuantity + $quantity;
//                 $orderItem->pivot->save();
//                 $totalPriceChange = $product->price * $quantity;
//             } else {
//                 $order->items()->attach($productId, ['quantity' => $quantity]);
//                 $totalPriceChange = $product->price * $quantity;
//             }
//
//             $order->total_price += $totalPriceChange;
//             $order->save();
//             return back()->with('success', 'Product added to cart!');
//         } else {
//             return $this->addToCartSession($request, $productId);
//         }
//     }
//
//     private function addToCartSession(Request $request, $productId, $quantity)
//     {
//         $product = Product::findOrFail($productId);
//         $guestId = $request->session()->get('guest_id', strtoupper(Str::random(40)));
//
//         $request->session()->put('guest_id', $guestId);
//
//         $order = Order::firstOrCreate([
//             'guest_id' => $guestId,
//             'status' => 'In cart',
//         ], [
//             'order_number' => strtoupper(Str::random(10)),
//             'total_price' => 0
//         ]);
//
//         $orderItem = $order->items()->where('product_id', $productId)->first();
//         $totalPriceChange = 0;
//         if ($orderItem) {
//             $currentQuantity = $orderItem->pivot->quantity;
//             $orderItem->pivot->quantity = $currentQuantity + $quantity;
//             $orderItem->pivot->save();
//             $totalPriceChange = $product->price * $quantity;
//         } else {
//             $order->items()->attach($productId, ['quantity' => $quantity]);
//             $totalPriceChange = $product->price * $quantity;
//         }
//
//         $order->total_price += $totalPriceChange;
//         $order->save();
//
//         return back()->with('success', 'Product added to cart!');
//     }




//     public function transferSessionCartToDatabase(Request $request)
//     {
//         $sessionCart = $request->session()->pull('cart', []);
//         $order = Order::firstOrCreate([
//             'user_id' => $user->id,
//             'status' => 'In cart',
//         ]);
//
//         foreach ($sessionCart as $productId => $details) {
//             $order->items()->updateOrCreate(
//                 ['product_id' => $productId],
//                 ['quantity' => $details['quantity'], 'price' => $details['price']]
//             );
//         }
//     }
    public function updateQuantity(UpdateOrderRequest $request, $productId)
    {
        $newQuantity = $request->input('quantity');
        if (auth()->check() && $newQuantity > 0) {
            $order = Order::with(['items'])->where('user_id', auth()->id())->where('status', 'In cart')->first();
        }
        else if($newQuantity > 0){
            $order = Order::with(['items'])->where('guest_id', $request->session()->get('guest_id'))->where('status', 'In cart')->first();

        }
        if ($order) {
            $orderItem = $order->items()->where('product_id', $productId)->first();
            if ($orderItem) {
                $oldQuantity = $orderItem->pivot->quantity;
                $priceDifference = ($newQuantity - $oldQuantity) * $orderItem->price;

                $orderItem->pivot->quantity = $newQuantity;
                $orderItem->pivot->save();

                $priceDifference = ($newQuantity - $oldQuantity) * $orderItem->price;
                $order->total_price += $priceDifference;
                $order->save();
            }
        }
        return redirect()->route('cart')->with('success', 'Cart updated!');
    }

    public function deleteItem(UpdateOrderRequest $request, $productId)
    {
        if (auth()->check()) {
            $order = Order::where('user_id', auth()->id())->where('status', 'In cart')->first();
        } else {
            $order = Order::with(['items'])->where('guest_id', $request->session()->get('guest_id'))->where('status', 'In cart')->first();
        }

        if ($order) {
            $orderItem = $order->items()->where('product_id', $productId)->first();
            if ($orderItem) {
                $totalItemPrice = $orderItem->pivot->quantity * $orderItem->price;
                $order->total_price -= $totalItemPrice;
                $order->save();

                $order->items()->detach($productId);
            }
        }



        return redirect()->route('cart')->with('success', 'Item removed from cart!');
    }

}
