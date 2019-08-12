<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class ingredients extends Model
{
    use Notifiable;
    protected $fillable = [
        'product_id','ingredient_name', 'quantity_volume',
    ];
}
