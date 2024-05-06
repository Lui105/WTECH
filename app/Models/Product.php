<?php

namespace App\Models;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'parameters'=>'array',
    ];
    protected $fillable = [
            'id', 'price'
        ];

    use HasFactory;
    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items')
                    ->withPivot('quantity');
    }

}
