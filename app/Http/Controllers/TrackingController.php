<?php
/**
 * Created by PhpStorm.
 * User: SammyMohamed
 * Date: 1/25/17
 * Time: 3:35 PM
 */
namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function store(Request $request)
    {
        $trackingRow = [
            'ip' => $request->ip(),
            'url' => $request->url,
            'item_type' => $request->item_type,
            'item_id' => $request->item_id
        ];

        Tracking::create($trackingRow);
    }
}