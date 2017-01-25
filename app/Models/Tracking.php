<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 2:04 PM
 */

namespace App\Models;

class Tracking extends BaseModel
{
    protected $table = 'tracking';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public $fillable = [
        'url',
        'ip',
        'item_type',
        'item_id',
    ];

    public $dates = [
        'created_at'
    ];
}