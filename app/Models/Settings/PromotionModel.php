<?php

namespace App\Models\Settings;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionModel extends BaseModel
{
    use HasFactory;
    protected $table = 'promotions';
    protected $fillable = [
        'title',
        'content',
        'image',
        "status",
        'description',
        'slug'
    ];
}
