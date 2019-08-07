<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserEvent;

class JoinController extends Controller {
    public function join($id) {
    	$user = Auth::user();
    	$idEvent = $id;

    	UserEvent::create([
    		'user_id' => $user->id,
    		'event_id' => $idEvent,
    	]);

    	return redirect()->action('ExploreController@show', ['id' => $idEvent]);
    }
}