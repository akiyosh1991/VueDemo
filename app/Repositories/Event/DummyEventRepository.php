<?php

namespace App\Repositories\Event;

use Illuminate\Http\Request;
use App\Event;

class DummyEventRepository implements EventRepositoryInterface
{
    public function index()
    {
        try {
            $dummyEvent = Event::with('user')
                        ->orderBy('date', 'desc')->paginate();
            $responseData = $dummyEvent->map(function ($event) {
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
            $dummyEvent = new Event;
            $response = $dummyEvent->create($request->all());
            return $response;
        } catch (Exception $e) {
            // Exception
        }
    }
}
