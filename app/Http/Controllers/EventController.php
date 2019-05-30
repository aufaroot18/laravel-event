<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;

class EventController extends Controller {
	public function __construct() {
	    $this->middleware('auth');
	}

	public function index(Request $request) {
		$myEvent = User::find($request->user()->id);
		return view('event.index', ['myEvent' => $myEvent]);
	}
	
    public function createEvent() {
    	return view('event.create');
    }

    public function storeEvent(Request $request) {
    	// Validation Form Input
    	$validateData = $request->validate([
    		'nama' => 'required',
    		'alamat' => 'required',
    		'deskripsi' => 'required',
    	]);

    	// Store to DB
    	Event::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'deskripsi' => $request->deskripsi,
    		'user_id' => $request->user()->id,
    	]);

    	// Redirect and Set Flash Session Data
    	return redirect()->action('EventController@createEvent')->with('status', 'Event Created');
    }
}
