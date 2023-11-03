<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageInformation extends Model
{
    use HasFactory;
    protected $table = 'page_informations';
    protected $guarded = [''];
}
