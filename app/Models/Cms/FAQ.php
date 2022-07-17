<?php

namespace App\Models\Cms;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends BaseModel
{
    use HasFactory;

    protected $table = 'faq';
    protected $fillable = [
        'title',
        'content',
        'is_show'
    ];
}
