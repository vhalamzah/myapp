<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class products_images extends Model
{
    use Notifiable;
    protected $fillable = [
        'product_id','image_path', 'is_primary',
    ];
}
