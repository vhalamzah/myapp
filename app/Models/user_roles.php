<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class user_roles extends Model
{
    public function get_level()
    {
        return $this->level;
    }
}
