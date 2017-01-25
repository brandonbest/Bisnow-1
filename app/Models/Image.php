<?php

namespace App\Models;

/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:03 PM
 */
class Image extends BaseModel
{
    protected $table = 'images';

    protected $fillable = [
        'address'
    ];

    public function newsItems()
    {
        return $this->belongsToMany(NewsItem::class, 'news_item_image', 'image_id', 'news_item_id');
    }

    public function eventItems()
    {
        return $this->belongsToMany(EventItem::class, 'event_item_image', 'image_id', 'event_item_id');
    }
}