<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller {
	public function index() {
		return "All Event";
	}
	
    public function createEvent() {
    	return view('event.create');
    }

    public function storeEvent(Request $request) {
    	$validateData = $request->validate([
    		'nama' => 'required',
    		'alamat' => 'required',
    		'deskripsi' => 'required',
    	]);

    	Event::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'deskripsi' => $request->deskripsi,
    		'user_id' => $request->user()->id,
    	]);

    	return redirect()->action('EventController@createEvent')->with('status', 'Event Created');
    }
}
