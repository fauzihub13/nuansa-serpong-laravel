<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'image',
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

    protected $casts = [
        'cancellation' => 'boolean',
        'pay_later' => 'boolean',
        'smoking_policy' => 'boolean',
        'image' => 'json',

    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function (Room $room) {
            $image_to_delete = array_diff($room->getOriginal('image'), $room->image);
            foreach ($image_to_delete as $image) {
                Storage::delete("public/$image");
            }
        });

        static::deleting(function (Room $room) {
            foreach ($room->image as $image) {
                Storage::delete("public/$image");
            }
        });
    }
}

