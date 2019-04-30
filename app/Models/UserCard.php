<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCard extends Model
{
    protected $fillable = [
        'user_id', 'card_number', 'card_pin', 'card_currency', 'expire_date', 'card_holder_name', 'card_type', 'balance', 'status'];

    /**
     * Get the transactions for the usercard.
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'user_card_id', 'id');
    }
}
