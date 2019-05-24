<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller {
    public function index(Request $request) {
    	$user = User::find($request->user()->id);
    	return view('profile.index', ['user' => $user]);
    }

    public function update(Request $request) {
        // Validation Form Input
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'numeric',
        ]);

        // Update to Database
    	$user = User::where('id', $request->user()->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Redirect and Set Flash Session Data
    	return redirect()->action('ProfileController@index')->with('status', 'Profile Updated');
    }

    public function password() {
    	return view('profile.password');
    }
}
