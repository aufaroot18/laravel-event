<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEvent;

class TicketController extends Controller {
    public function index(Request $request) {
    	$idUser = $request->user()->id;
    	// get my event joined
    	// $myEventJoined = UserEvent::where('users_events.user_id', $idUser)->join('events', 'event_id', '=', 'events.id')->get();
    	$myEventJoined = UserEvent::where('users_events.user_id', $idUser)->leftJoin('events', 'users_events.event_id', '=', 'events.id')
    	->select('users_events.id', 'users_events.created_at', 'users_events.user_id', 'events.id as event_id', 'events.nama', 'events.alamat', 'events.deskripsi', 'events.gambar', 'events.tanggal_mulai', 'events.tanggal_selesai')
    	->get();
    	
    	return view('ticket.index', ['myEventJoined' => $myEventJoined]);
    }
}
