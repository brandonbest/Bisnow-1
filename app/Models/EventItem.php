<?php

namespace App\Models;

/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:02 PM
 */
class EventItem extends BaseModel
{
    protected $table = 'event_items';

    protected $fillable = [
        'name',
        'description',
    ];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'event_item_image', 'event_item_id', 'image_id');
    }
}