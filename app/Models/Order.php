<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_number',
        'status',
        'address_id',
        'payment_id',
        'delivery_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }


    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id')->withDefault();
    }


    public function paymentDetails()
    {
        return $this->belongsTo(PaymentDetail::class, 'payment_id')->withDefault();
    }


    public function deliveryMethod()
    {
        return $this->belongsTo(DeliveryMethod::class, 'delivery_id')->withDefault();
    }

}
