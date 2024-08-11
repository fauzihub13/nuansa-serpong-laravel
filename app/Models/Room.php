<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'name',
        'price',
        'cancellation',
        'pay_later',
        'policy',
        'room_features',
        'max_occupancy',
        'bed_configuration',
        'room_size',
        'bathrooms',
        'room_view',
        'bathrooms',
        'smoking_policy',
        'bathrooms',
    ];

    public function roomImages() : HasMany {
        return $this->hasMany(RoomImages::class);
    }
}

