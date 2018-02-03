<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Event;

class EventController extends Controller
{
    public function getAllEvents()
    {
    	return response()->json(Event::all());
    }

    public function getById($id)
    {
    	return Event::find($id);
    }

    public function addEvent(Request $request)
    {
        $name = $request->input('event_name');
        $owner_id = $request->input('owner_id');
        $description = $request->input('description');
        $budget = $request->input('budget');
        $actual_funds = $request->input('actual_funds');

        $event = new Event;
        $event->event_name = $name;
        $event->owner_id = $owner_id;
        $event->description = $description;
        $event->budget = $budget;
        $event->actual_funds = $actual_funds;

        $event->save();

        return response()->json($event);
    }
}
