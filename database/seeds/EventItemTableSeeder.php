<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:31 PM
 */

use Illuminate\Database\Seeder;
use App\Models\EventItem;

class EventItemTableSeeder extends Seeder
{
    public function run()
    {
        $eventItems = [
            [
                'name' => 'Some Exciting Event',
                'description' => 'You haven\'t seen this one before'
            ],
            [
                'name' => 'Some Other Exciting Event',
                'description' => 'If you enjoyed \'Some Exciting Event\', you\'re gonna get a kick out of this one'
            ]
        ];

        foreach($eventItems as $eventItem) {
            EventItem::create($eventItem);
        }
    }
}