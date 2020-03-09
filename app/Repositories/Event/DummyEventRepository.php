<?php

namespace App\Repositories\Event;

use Illuminate\Http\Request;
use App\Event;

class DummyEventRepository implements EventRepositoryInterface
{
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
