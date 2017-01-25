<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:31 PM
 */

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\NewsItem;
use App\Models\EventItem;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        $images = [
            [
                'address' => '/images/woah.jpg'
            ],
            [
                'address' => '/images/noah.jpg'
            ]
        ];

        foreach($images as $image) {
            $newImageRow = Image::create($image);

            //TEST 'MANY TO MANY'-NESS
            $newImageRow->newsItems()->save(NewsItem::find(1));
            $newImageRow->eventItems()->save(EventItem::find(1));
        }
    }
}