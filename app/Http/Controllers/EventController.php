<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use App\UserEvent;

class EventController extends Controller {
	public function __construct() {
	    $this->middleware('auth');
	}

	public function index(Request $request) {
        $idUser = $request->user()->id;
		$myEvent = User::find($idUser)->events;
		return view('event.index', ['myEvent' => $myEvent]);
	}
	
    public function createEvent() {
    	return view('event.create');
    }

    public function storeEvent(Request $request) {
    	// Validation Form Input
    	$validateData = $request->validate([
    		'nama' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
    		'alamat' => 'required',
            'gambar' => 'required|image',
    		'deskripsi' => 'required',
    	]);

        // Upload File
        $file = $request->file('gambar');
        $file_name = time()."_".$file->getClientOriginalName();
        $folder_name = 'gambar';
        $file->move($folder_name, $file_name);

    	// Store to DB
    	Event::create([
    		'nama' => $request->nama,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
    		'alamat' => $request->alamat,
    		'deskripsi' => $request->deskripsi,
            'gambar' => $file_name,
    		'user_id' => $request->user()->id,
    	]);

    	// Redirect and Set Flash Session Data
    	return redirect()->action('EventController@createEvent')->with('status', 'Event Created');
    }

    public function editEvent($id) {
        $event = Event::find($id);
        return view('event.edit', ['event' => $event]);
    }

    public function updateEvent(Request $request, $id) {
        $event = Event::find($id);

        // Validation Form Input
        $validateData = $request->validate([
            'nama' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ]);

        // Upload File
        $file = $request->file('gambar');
        if($request->hasFile('gambar')) {
            $file_name = time()."_".$file->getClientOriginalName();
            $folder_name = 'gambar';
            $file->move($folder_name, $file_name);
        }
        else {
            $file_name = $event->gambar;
        }

        // Update to DB
        Event::where('id', $id)->update([
            'nama' => $request->nama,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'gambar' => $file_name,
            'user_id' => $request->user()->id,
        ]);

        // Redirect and Set Flash Session Data
        return redirect()->action('EventController@editEvent', ['id' => $id])->with('status', 'Event Updated');
    }

    public function detailEvent($id) {
        $idEvent = $id;
        $userevent = UserEvent::where('event_id', $idEvent)->get();
        $event = Event::where('id', $idEvent)->get();
        return view('event.detail', ['userevent' => $userevent,'event' => $event]);
    }
}
