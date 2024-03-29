<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function login(Request $req)
    {
        $user = User::where(['email' => $req->email, 'password' => $req->password]); 
        // return $user;
        if($user->exists()){
            config(['session.lifetime' => 60]);
            Auth::login($user->first());
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function dashboard()
    {
        $currentTime = now(); // Get the current timestamp
        $startTime = $currentTime->subMinutes(5);
        $activeSessions = Session::where('last_active', '>=', $startTime)->count();
        $allSessions = Session::count();
        $user = auth()->user();
        $data = compact('user', 'activeSessions', 'allSessions');
        return view('admin.dashboard', $data);
    }

    public function sessions($type)
    {
        if($type == 'active'){
            $currentTime = now(); // Get the current timestamp
            $startTime = $currentTime->subMinutes(5);
            $sessions = Session::where('last_active', '>=', $startTime)->orderBy('id','desc')->paginate(10);
        }else{
        
            $sessions = Session::orderBy('id','desc')->paginate(20);
        }
       
        $data = compact('sessions', 'type');
        // return $data;
        return view('admin.sessions', $data);
    }

    public function session(Session $session)
    {
        $data = compact('session');
        return view('admin.session', $data);
    }

    public function session_action(Session $session, $action)
    {
        $session->action = $action;
        $session->save();
        return redirect()->route('admin.session', ['session' => $session->id]) ;
    }
}
