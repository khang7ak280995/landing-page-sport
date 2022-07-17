<?php

namespace App\Models\Cms;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurancePackage extends BaseModel
{
    use HasFactory;

    protected $table = 'insurance_package';
    protected $fillable = [
        'title',
        'description',
        'amount',
        'bonuses',
        'hole_regulation',
        'link_image',
        'note',
        'is_show_home_page',
        'is_show'
    ];
}
