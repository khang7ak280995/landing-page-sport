<?php

namespace App\Models\Cms;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpressiveNumber extends BaseModel
{
    use HasFactory;

    protected $table = 'impressive_number';
    protected $fillable = [
        'title',
        'sub_title',
        'icon'
    ];
}
