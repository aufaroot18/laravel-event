<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;

class ExploreController extends Controller {
    public function index() {
    	$event = Event::paginate(6);
    	return view('explore.index', ['event' => $event]);
    }

    public function show($id) {
    	$event = Event::where('id', $id)->first();
    	$user = User::where('id', $event->user_id)->first();
    	return view('explore.show', ['event' => $event, 'user' => $user]);
    }
}
