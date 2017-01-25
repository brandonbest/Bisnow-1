<?php

namespace App\Models;

/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:02 PM
 */
class NewsItem extends BaseModel
{
    protected $table = 'news_items';

    protected $fillable = [
        'title',
        'body',
        'date'
    ];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'news_item_image', 'news_item_id', 'image_id');
    }
}