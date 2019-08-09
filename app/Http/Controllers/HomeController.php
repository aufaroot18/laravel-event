<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DateTime;
use DB;

class HomeController extends Controller {	
    public function index() {
    	// today
    	$from = date('Y-m-d');

    	// // get 1 week later
    	$to = new DateTime($from);
    	$to = $to->modify('+1 week');
    	$to = $to->format('Y-m-d');

    	// get event this week
    	$event = Event::whereBetween('tanggal_mulai', [$from, $to])->take(9)->get();
    	$status = "minggu ini";

    	// get event this month if this week not exist
    	if (count($event) == 0) {
    		$event = Event::whereMonth('tanggal_mulai', date('m'))->take(9)->get();
    		$status = "bulan ini";
    	}

    	// get all event if this month not exist
    	if (count($event) == 0) {
    		$event = Event::take(9)->get();
    		$status = "semua";
    	}

    	return view('home', ['event' => $event]);
    }
}