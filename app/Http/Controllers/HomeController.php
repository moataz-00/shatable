<?php

namespace App\Http\Controllers;

use App\Models\drive;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        $drive = drive::all();
        return view('home')->with('drives', $drive);

    }

    public function destroy($id){
        $drive = drive::find($id);
        $drive->delete();
        return redirect()->route('admin')->with("delete", 'delete');
    }

    public function show($id){
        $drive = drive::find($id);

        return view('show')->with("drive", $drive);
    }
}
