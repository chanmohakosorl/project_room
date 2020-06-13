<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomInfo extends Model
{
    protected $table = 'room_infos';
    protected $fillable = [
        'room_no',
        'floor',
        'rent_fee', 
        'status',
    ];

    public function roomUtility()
    {
    	return $this->hasOne('\App\RoomUtility');
    }
}
