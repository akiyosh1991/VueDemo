<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function create(Request $data)
    {
        $event = new Event;

        $event->create([
             'user_id' => $data['user_id'],
             'name' => $data['name'],
             'date' => $data['date'],
             'place' => $data['place'],
             'description' => $data['description'],
         ]);

        return response($event['user_id'], 201)->header('Content-Type', 'text/plain');
    }
}
