<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomUtility extends Model
{
    protected $table = 'room_utilities';
    protected $fillable = [
        'month',
        'water_old_counter',
        'water_new_counter', 
        'electricity_old_counter',
        'electricity_new_counter',
        'room_info_id'
    ];

    public function roomInfo()
    {
    	return $this->hasOne('\App\RoomInfo');
    }
}
