<?php

namespace App\Services\Event;

use App\Repositories\Event\EventRepositoryInterface;
use Illuminate\Http\Request;

class EventService
{
    protected $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        return $this->eventRepository->index();
    }

    public function storeEvent(Request $request)
    {
        return $this->eventRepository->storeEvent($request);
    }
}
