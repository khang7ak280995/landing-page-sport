<?php

namespace App\Models\Settings;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigModel extends BaseModel
{
    use HasFactory;
    protected $table = 'config_info';
    protected $fillable = [
        'title',
        'content',
        'type',
        "status",
    ];
}
