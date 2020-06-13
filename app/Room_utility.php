<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_utility extends Model
{
    public function room_info()
    {
        return $this->belongsTo('App\Room_info');
    }
}
