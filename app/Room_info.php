<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_info extends Model
{
    public function roomUtility()
    {
        return $this->hasOne('App\Room_utility');
    }
}
