<?php

namespace App\Http\Controllers;

use App\Models\drive;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }



    public function projects()
    {
        return view('projects');
    }

    public function finish()
    {
        return view('finishes');
    }
    public function about()
    {
        return view('about');
    }

    public function create()
    {
        return view('contact');
    }


    public function store(Request $request)
    {
        $request->validate(
            [

                'name' => 'required|min:3|max:20|string',
                'number' => 'required|min:11|string',
                'email' => 'required',

            ]
        );

        $drive=new drive();
        $drive->name=$request->name;
        $drive->email=$request->email;
        $drive->number=$request->number;
        $drive->message=$request->message;

        $drive->save();

        return redirect()->back()->with("done", "Message Sent");
    }


    public function show(drive $drive)
    {
        //
    }


    public function edit(drive $drive)
    {
        //
    }


    public function update(Request $request, drive $drive)
    {
        //
    }



}
