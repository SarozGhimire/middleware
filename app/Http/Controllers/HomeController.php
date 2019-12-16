<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $request->session()->put(['edwin'=>'master instructor']);

         // $request->session()->get('edwin');

        // session(['edwin2'=>'best teacher']);

        // return session('edwin2');

        // $request->session()->forget('edwin2');

        // $request->session()->flush();

        // return $request->session()->all();

        // $request->session()->flash('message', 'Post has been created');

        // return $request->session()->get('message'); 

        // $request->session()->reflash();

        // $request->session()->keep('message');


        // return view('home');
    }
}
