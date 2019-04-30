<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardOrder extends Model
{
    protected $fillable = ['user_id', 'card_type', 'order_amount', 'order_status'];
}
