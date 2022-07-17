<?php

namespace App\Models\Cms;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListGolferWinHIO extends BaseModel
{
    use HasFactory;

    protected $table = 'list_golfer_win_prize';
    protected $fillable = [
        'name',
        'date_post',
        'amount',
        'yard',
        'stick',
        'facility',
        'hdc',
        'is_show',
        'link_image',
        'description',
        'slug'
    ];
}
