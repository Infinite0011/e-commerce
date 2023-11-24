<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = 'user_subscription';

    public function product() {
        return $this->belongsTo(\Lunar\Models\Product::class);
    }

    public function orderLine() {
        return $this->belongsTo(\Lunar\Models\OrderLine::class);
    }
}
