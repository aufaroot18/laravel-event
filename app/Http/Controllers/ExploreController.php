<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\Event;
use App\User;
use App\UserEvent;

class ExploreController extends Controller {
    public function index() {
        // today
        $from = date('Y-m-d');

        // // get 1 week later
        $to = new DateTime($from);
        $to = $to->modify('+1 week');
        $to = $to->format('Y-m-d');

    	// $event = Event::paginate(6);
        $event = Event::whereBetween('tanggal_mulai', [$from, $to])->paginate(6);


        // get event this month if this week not exist
        if (count($event) == 0) {
            $event = Event::whereMonth('tanggal_mulai', date('m'))->paginate(6);
            $status = "bulan ini";
        }

        // get all event if this month not exist
        if (count($event) == 0) {
            $event = Event::paginate(6);
            $status = "semua";
        }

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
