<?php

namespace App\Models\Settings;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SlideHomeModel extends BaseModel
{
    use HasFactory;
    protected $table = 'slide_home';
    protected $fillable = [
        'title',
        'description',
        'link_image'
    ];
}
