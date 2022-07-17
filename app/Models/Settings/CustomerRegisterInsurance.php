<?php

namespace App\Models\Settings;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRegisterInsurance extends BaseModel
{
    use HasFactory;
    protected $table = 'customer_register_buy_insurance';
    protected $fillable = [
        'name',
        'phone',
        'package_buy',
        "status",
        'vga_code',
        'note'
    ];
}
