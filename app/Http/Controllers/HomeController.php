<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;

class HomeController extends Controller {	
    public function index() {
    	// $event = Event::all();
    	$event = DB::table('events')->orderBy('created_at', 'desc')->get();
    	return view('home', ['event' => $event]);
    }
}
