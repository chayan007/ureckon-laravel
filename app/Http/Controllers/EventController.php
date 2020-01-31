<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addParticipant(Request $request)
    {
        $event = new Event;
        $event->event = $request->has('event') ? $request->event : NULL;
        $event->user1 = $request->has('user1') ? $this->get_user_id($request->user1) : NULL;
        $event->user2 = $request->has('user2') ? $this->get_user_id($request->user2) : NULL;
        $event->user3 = $request->has('user3') ? $this->get_user_id($request->user3) : NULL;
        $event->user4 = $request->has('user4') ? $this->get_user_id($request->user4) : NULL;
        $event->user5 = $request->has('user5') ? $this->get_user_id($request->user5) : NULL;
        $event->save();
        return view('event');
    }

    private function get_user_id($username)
    {
        $user = User::where('username', $username)->first()->id;
        return $user;
    }

    public function getEventsPage()
    {
        $users = User::all();
        return view('event', [
            'users' => $users
        ]);
    }
}
