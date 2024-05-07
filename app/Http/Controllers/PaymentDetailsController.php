<?php

namespace App\Http\Controllers;

use App\Models\PaymentDetails;
use App\Models\Order;

use App\Http\Requests\StorePaymentDetailsRequest;
use App\Http\Requests\UpdatePaymentDetailsRequest;
use Illuminate\Http\Request;


class PaymentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $paymentDetails = PaymentDetails::all();
        if (auth()->check()) {
            $order = Order::where('user_id', auth()->id())->where('status', 'In cart')->first();
        } else {
            $order = Order::with(['items'])->where('guest_id', $request->session()->get('guest_id'))->where('status', 'In cart')->first();
        }
        $totalPrice = $order->total_price + $order->deliveryMethod->price;
//         dd($paymentDetails);
        return view('payment_page', compact('paymentDetails', 'totalPrice'));
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
    public function store(StorePaymentDetailsRequest $request)
    {
        $validated = $request->validate([
            'creditCardNumber' => 'required|digits:16',
            'cardExpirationDate' => 'required|date_format:m/y',
            'cardSecurityCode' => 'required|digits:3',
            'paymentMethod' => 'required|exists:payment_details,id'
        ]);
        if (auth()->check()) {
            $order = Order::where('user_id', auth()->id())->where('status', 'In cart')->first();
        } else {
            $order = Order::with(['items'])->where('guest_id', $request->session()->get('guest_id'))->where('status', 'In cart')->first();
        }
        $order->payment_id = $validated['paymentMethod'];
        $order->status = 'Paid';
        $order->save();

        return redirect()->route('payment.success')->with('success', 'Payment processed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentDetails $paymentDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentDetails $paymentDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentDetailsRequest $request, PaymentDetails $paymentDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentDetails $paymentDetails)
    {
        //
    }
    public function showSuccessPage(Request $request)
    {
        if (auth()->check()) {
            $order = Order::where('user_id', auth()->id())->where('status', 'Paid')->first();
        } else {
            $order = Order::with(['items'])->where('guest_id', $request->session()->get('guest_id'))->where('status', 'Paid')->first();
        }
        $orderNumber = $order -> order_number;
        return view('payment_successful', compact('orderNumber'));
    }

}
