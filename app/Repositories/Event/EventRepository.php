<?php

namespace App\Repositories\Event;

use Illuminate\Http\Request;
use App\Event;

class EventRepository implements EventRepositoryInterface
{
    public function storeEvent(Request $request)
    {
        try {
            $event = new Event;
            $event->create($request->all());

            return $event;
        } catch (Exception $e) {
            // Exception
        }
    }
}
