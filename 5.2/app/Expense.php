<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'item_name',
        'item_description',
        'purchased_at',
        'exp_id',
        'price'
    ];


//TODO: fix query result modifier
    public function setPurchasedAttribute($date)
    {
        $this->attributes['purchased_at'] = Carbon::parse($date);
    }
    


}
