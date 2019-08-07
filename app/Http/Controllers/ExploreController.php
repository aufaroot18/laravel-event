<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\User;
use App\UserEvent;

class ExploreController extends Controller {
    public function index() {
    	$event = Event::paginate(6);
    	return view('explore.index', ['event' => $event]);
    }

    public function show($id) {
    	// status join
    	$statusJoin =  UserEvent::where('event_id', $id)->where('user_id', Auth::id())->first();

    	// get event and creator of event
    	$event = Event::where('id', $id)->first();
    	$user = User::where('id', $event->user_id)->first();
    	return view('explore.show', ['event' => $event, 'user' => $user, 'statusJoin' => $statusJoin]);
    }
}
