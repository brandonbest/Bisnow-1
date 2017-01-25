<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:31 PM
 */

use Illuminate\Database\Seeder;
use App\Models\NewsItem;

class NewsItemTableSeeder extends Seeder
{
    public function run()
    {
        $newsItems = [
            [
                'title' => 'Test 1',
                'body' => '<html></html>',
                'date' => '2017-01-25'
            ],
            [
                'title' => 'Test 2',
                'body' => '<html><body>le body</body></html>',
                'date' => '2017-01-24'
            ]
        ];

        foreach($newsItems as $newsItem) {
            NewsItem::create($newsItem);
        }
    }
}