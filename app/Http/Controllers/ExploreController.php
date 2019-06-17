<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class ExploreController extends Controller {
    public function index() {
    	$event = Event::paginate(6);
    	return view('explore.index', ['event' => $event]);
    }
}
