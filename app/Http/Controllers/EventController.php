<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Services\Event\EventService;

class EventController extends Controller
{
    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function index()
    {
        return $response = $this->eventService->index();
    }

    public function create(Request $request)
    {
        $response = $this->eventService->storeEvent($request);

        return response($response['user_id'], 201)->header('Content-Type', 'text/plain');
    }
}
