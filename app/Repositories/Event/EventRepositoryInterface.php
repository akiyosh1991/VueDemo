<?php

namespace App\Repositories\Event;

use Illuminate\Http\Request;

interface EventRepositoryInterface
{
    public function index();
    public function storeEvent(Request $request);
}
