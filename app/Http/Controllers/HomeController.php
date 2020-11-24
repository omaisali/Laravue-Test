<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Log;
use DB;

class HomeController extends Controller
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
    public function index()
    {
      $name = auth()->user()->name;

      $logs = DB::table('logs')->where('user_name', $name)->get();

      return view('home', ['logs' => $logs]);
    }

    public function profile()
    {
        $id = auth()->user()->id;

        $currentuser = User::find($id);

        return view('profile', ['user' => $currentuser]);
    }

    public function update(Request $request){

      $id = auth()->user()->id;

      $user = User::where('id', '=', $id)->first();
      $user->name = $request->name;
      $user->age = $request->age;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      // Add Change Log
      $log = new Log();
      $log->user_name = auth()->user()->name;
      $log->event_name = "Profile Updated";
      $log->save();


      return redirect('/profile')->with('message', 'User has been updated!!');

    }
}
