<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
{
    return view('home');
}

public function newAnnouncement() 
{
    return view('announcement.new'); 
}
public function createAnnouncement(AnnouncementRequest $request)
{
    $a = new Announcement();
    $a->title = $request->input('title');
    $a->body = $request->input('body');
    $a->save();
    return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');
    
}



}

