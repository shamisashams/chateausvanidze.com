<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address',
        'transaction_id',
        'total_price',
        'paymethod',
        'pay_status',
        'full_name',
        'email',
        'phone'
    ];
    public function products()
    {
        return $this->hasMany('App\Models\OrderProduct', 'order_id');
    }
    public function totalprice()
    {
        $total = 0;
        foreach ($this->products as $item) {
            $total += $item->quantity * $item->price;
        }
        return $total;
    }
}
