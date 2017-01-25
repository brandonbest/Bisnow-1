<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 1:59 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventItem;

class EventItemsController extends Controller
{
    public function show($id)
    {
        $eventItem = EventItem::find($id);
        if($eventItem) {
            return view('events')->with('event_items', [$eventItem]);
        } else {
            return view('events');
        }
    }

    public function index()
    {
        $newsItems = EventItem::paginate(3);
        return view('events')->with('event_items', $newsItems);
    }
}