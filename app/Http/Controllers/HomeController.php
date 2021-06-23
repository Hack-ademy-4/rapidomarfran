<?php

namespace App\Http\Controllers;


use App\Models\Category;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Requests\AnnouncementRequest;

class HomeController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
        $categories = Category::all();
        View::share('categories',$categories);
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
    $a->category_id = $request->input('category');
    $a->price = $request->input('price');
    $a->save();
    return redirect('/')->with('announcement.create.success','Anuncio creado con exito');
    
}





}

