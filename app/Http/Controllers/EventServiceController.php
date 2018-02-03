<?php

use App\EventService;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\EventService;

class EventServiceController extends Controller
{
    public function getAllServices()
    {
    	return response()->json(EventService::all());
    }

    public function getById($id)
    {
    	return EventService::find($id);
    }

    public function addEventService(Request $request)
    {
        $event_id = $request->input('event_id');
        $svc_id = $request->input('service_id');

        $svc = new EventService;
        $svc->event_id = $event_id;
        $svc->svc_id = $svc_id;

        $svc->save();

        return response()->json($svc);
    }

    public function getByEventId($event_id)
    {
    	$services = EventService::where('event_id', '=', $event_id)->get();

    	return response()->json($services);
    }

    public function removeEventService(Request $request)
    {
    	$id = $request->input('id');
    	$svc = EventService::find($id);

    	$svc->delete();

    	return 'Deleted event service!';
    }
}
