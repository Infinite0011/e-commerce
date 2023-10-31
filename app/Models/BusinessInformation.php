<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessInformation extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = 'business_informations';

    public function state() {
        return $this->belongsTo(BusinessState::class);
    }

    public function type() {
        return $this->belongsTo(BusinessType::class);
    }
}
