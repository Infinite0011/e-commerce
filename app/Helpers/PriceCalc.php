<?php

namespace App\Helpers;

use App\Models\Subscription;
use App\Models\OneTimePurchase;
use App\Models\OrderType;

class PriceCalc
{
    public static function get($price, $subscriptionId = '1', $orderTypeId = '1')
    {
        $priceValue = $price->price->decimal(rounding: true);
        $orderType = OrderType::where('id', $orderTypeId)->first();
        $subscription = ($orderTypeId == '1') ? Subscription::where('id', $subscriptionId)->first() : OneTimePurchase::where('id', $subscriptionId)->first();

        return $priceValue * (100 - ($subscription && $subscription->discount ? $subscription->discount : 0)) / 100;
    }
}
