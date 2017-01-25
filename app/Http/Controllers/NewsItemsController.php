<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:59 PM
 */

namespace App\Http\Controllers;

use App\Models\NewsItem;

class NewsItemsController extends Controller
{
    public function show($id)
    {
        $newsItem = NewsItem::find($id);
        if($newsItem) {
            return view('news')->with('news_items', [NewsItem::find($id)]);
        } else {
            return view('news');
        }
    }

    public function index()
    {
        $newsItems = NewsItem::paginate(3);
        return view('news')->with('news_items', $newsItems);
    }
}