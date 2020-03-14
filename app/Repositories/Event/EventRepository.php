<?php

namespace App\Repositories\Event;

use Illuminate\Http\Request;
use App\Event;

class EventRepository implements EventRepositoryInterface
{
    public function index()
    {
        try {
            $event = Event::with('user')
                        ->orderBy('date', 'desc')->paginate();
            $responseData = $event->map(function ($event) {
                return [
                    'id' => $event->id,
                    'name' => $event->name,
                    'date' => $event->date
                ];
            })->all();
            
            return $responseData;
        } catch (Exception $e) {
            // TODO: Exception
        }
    }

    public function storeEvent(Request $request)
    {
        try {
            $event = new Event;
            $event->create($request->all());

            return $event;
        } catch (Exception $e) {
            // TODO: Exception
        }
    }
}
