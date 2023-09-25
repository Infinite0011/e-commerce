<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerUser extends Model
{
    use HasFactory;
    protected $table = 'lunar_customer_user';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(\Lunar\Models\Customer::class);
    }
}
