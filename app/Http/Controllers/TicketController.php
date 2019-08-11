<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEvent;
use PDF;

class TicketController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
    	$idUser = $request->user()->id;

    	// get all my event joined
    	$myEventJoined = UserEvent::where('users_events.user_id', $idUser)->leftJoin('events', 'users_events.event_id', '=', 'events.id')
    	->select('users_events.id', 'users_events.created_at', 'users_events.user_id', 'events.id as event_id', 'events.nama', 'events.alamat', 'events.deskripsi', 'events.gambar', 'events.tanggal_mulai', 'events.tanggal_selesai')->get();
    	
    	return view('ticket.index', ['myEventJoined' => $myEventJoined]);
    }

    public function pdf(Request $request, $id) {
        $user = $request->user();
        $idUser = $request->user()->id;
        $idEvent = $id;
        
        // get my event joined, one event
        $myEventJoined = UserEvent::where('users_events.user_id', $idUser)->where('users_events.event_id', $idEvent)->leftJoin('events', 'users_events.event_id', '=', 'events.id') ->select('users_events.id', 'users_events.created_at', 'users_events.user_id', 'events.id as event_id', 'events.nama', 'events.alamat', 'events.deskripsi', 'events.gambar', 'events.tanggal_mulai', 'events.tanggal_selesai') ->get();

        // print to pdf
        if ($myEventJoined == '[]') {
            return abort(404);
        }
        else {
            $pdf = PDF::loadView('ticket.pdf', ['myEventJoined' => $myEventJoined, 'user' => $user]);
            return $pdf->stream();
        }
    }
}
