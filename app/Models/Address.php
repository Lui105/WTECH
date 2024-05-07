<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
        protected $table = 'address';
    protected $fillable = [
        'address_line_1',
        'address_line_2',
        'zip',
        'city',
        'country',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'address_id', 'id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
