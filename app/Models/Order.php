<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const STATUS_APPROVED='Approved';
    const STATUS_PENDING="Pending";
    const STATUS_FAILED="Failed";
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address',
        'transaction_id',
        'total_price',
        'card_number',
        'card_holder',
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
