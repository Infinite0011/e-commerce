<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Lunar\Base\Traits\LunarUser;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LunarUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'is_sales_account',
        'is_referal_account',
        'is_accepted'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customer() {
        return $this->belongsToMany(\Lunar\Models\Customer::class, 'lunar_customer_user');
    }

    public function businessInformation() {
        return $this->hasOne(BusinessInformation::class);
    }

    public function referalInformation() {
        return $this->hasOne(ReferalInformation::class);
    }

    public function subscriptions() {
        return $this->hasMany(UserSubscription::class);
    }

    public function orders() {
        return $this->hasMany(\Lunar\Models\Order::class);
    }
}
