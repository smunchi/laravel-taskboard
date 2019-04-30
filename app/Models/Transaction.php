<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    protected $dates = ['deleted_at'];
    use SoftDeletes;
    /**
     * Get the post that owns the comment.
     */
    public function userCard()
    {
        return $this->belongsTo('App\Models\UserCard', 'user_card_id', 'id');
    }
}
