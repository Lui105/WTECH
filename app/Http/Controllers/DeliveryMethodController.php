<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethod;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use App\Models\Address;

use App\Http\Requests\StoreDeliveryMethodRequest;
use App\Http\Requests\UpdateDeliveryMethodRequest;
use Illuminate\Http\Request;


class DeliveryMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $deliveryMethods = DeliveryMethod::all();
        if (auth()->check()) {
            $order = Order::where('user_id', auth()->id())->where('status', 'In cart')->first();
        } else {
            $order = Order::with(['items'])->where('guest_id', $request->session()->get('guest_id'))->where('status', 'In cart')->first();
        }
        $totalPrice = $order->total_price;
        return view('delivery_page', compact('deliveryMethods', 'totalPrice'));
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
    public function store(StoreDeliveryMethodRequest $request)
    {
        $validatedData = $request->validate([
            'addressLine1' => 'required',
            'addressLine2' => 'nullable',
            'ZIP' => 'required',
            'City' => 'required',
            'country' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'emailAddress' => 'required|email',
            'deliveryMethod' => 'required|exists:delivery_methods,id'
        ]);

        if (auth()->check()) {
            $order = Order::where('user_id', auth()->id())->where('status', 'In cart')->first();
        } else {
            $order = Order::with(['items'])->where('guest_id', $request->session()->get('guest_id'))->where('status', 'In cart')->first();
        }

        $address = Address::create([
            'address_line_1' => $validatedData['addressLine1'],
            'address_line_2' => $validatedData['addressLine2'],
            'zip' => $validatedData['ZIP'],
            'city' => $validatedData['City'],
            'country' => $validatedData['country'],
        ]);

        $order->address_id = $address->id;
        $order->delivery_id = $validatedData['deliveryMethod'];
        $order->save();

        $user = User::firstOrCreate([
            'email' => $validatedData['emailAddress']
        ], [
            'first_name' => $validatedData['firstName'],
            'last_name' => $validatedData['lastName'],
            'phone_number' => $validatedData['phoneNumber'],
            'role' => 'guest'
        ]);

        if (!$order->user_id && Auth::check()) {
            $order->user_id = $user->id;
            $order->save();
        }

        return redirect()->route('payment')->with('success', 'Delivery details submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeliveryMethodRequest $request, DeliveryMethod $deliveryMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeliveryMethod $deliveryMethod)
    {
        //
    }
}
