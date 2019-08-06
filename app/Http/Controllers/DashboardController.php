<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $latestEvent = Event::orderBy('created_at', 'desc')->take(4)->get();
        $closerEvent = Event::orderBy('nama', 'asc')->take(4)->get();
        $event = array($latestEvent, $closerEvent);
        return view('dashboard', ['event' => $event]);
    }
}
