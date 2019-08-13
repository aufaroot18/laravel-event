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

        // get this week
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

    public function search(Request $request) {
        $validateData = $request->validate([
            'search' => 'required',
        ]);
        $searchEvent = $request->input('search');
        $event = Event::where('nama', 'like', '%'.$searchEvent.'%' )->paginate(6);
        
        return view('explore.index', ['event' => $event]);
    }

    // get event this week
    public function week() {
        // statusDropdown
        $statusDropdown = 'This Week';

        // today
        $from = date('Y-m-d');

        // // get 1 week later
        $to = new DateTime($from);
        $to = $to->modify('+1 week');
        $to = $to->format('Y-m-d');

        // get this week
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

        return view('explore.index', ['event' => $event, 'statusDropdown' => $statusDropdown]);
    }

    public function month() {
        $statusDropdown = 'This Month';

        // get event this month
        $event = Event::whereMonth('tanggal_mulai', date('m'))->paginate(6);
        $status = "bulan ini";

        // get all event if this month not exist
        if (count($event) == 0) {
            $event = Event::paginate(6);
            $status = "semua";
        }

        return view('explore.index', ['event' => $event, 'statusDropdown' => $statusDropdown]);
    }

    public function all() {
        $statusDropdown = 'This Month';
        
        // get all event
        $event = Event::paginate(6);
        $status = "semua";

        return view('explore.index', ['event' => $event, 'statusDropdown' => $statusDropdown]);
    }

    public function show($id) {
        // get event
        $event = Event::where('id', $id)->first();

        if ($event) {
            // get status join: is user joined or not joined
            $statusJoin =  UserEvent::where('event_id', $id)->where('user_id', Auth::id())->first();

            // get creator of event
            $user = User::where('id', $event->user_id)->first();
            return view('explore.show', ['event' => $event, 'user' => $user, 'statusJoin' => $statusJoin]);
        }
        else {
            return abort(404, 'Event Not Found');
        }
    }

}
