<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Home;
use Illuminate\Support\Facades\Input;
use App\File;

class HomepageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$content = Home::all();
    	return view("homepage.home", ["content"=>$content]);
    }

    public function create()
    {
    	return view("homepage.create");
    }

    public function store()
    {   
        request()->validate([
            'title'=>'required|min:3',
            'photo'=>'required|mimes:jpg,jpeg,png',
            'date'=>'required|date'
        ]);
        $photo = Input::file('photo');
        $photo->move('pics/slider', request('photo')->getClientOriginalName());
    	Home::create(['title'=>request('title'), 'photo'=>request('photo')->getClientOriginalName(), 'updated_at'=>request('date')]);
    	return redirect("homepage");
    }

    public function show($id)
    {
    	$content = Home::findOrFail($id);
    	return view("homepage.show", ["content"=>$content]);
    }

    public function edit($id)
    {
    	$content = Home::findOrFail($id);
    	return view("homepage.edit", ["content"=>$content]);
    }

    public function update($id)
    {
        //dd(request()->date);
    	request()->validate([
            'title'=>'required|min:3',
            'date'=>'required|date'
        ]);
    	$home = Home::findOrFail($id);
        if(Input::hasFile('photo')){
            request()->validate([
                'photo'=>'mimes:jpg,png,jpeg'
            ]);
            unlink(public_path() . '\pics\slider\\' . $home->photo);
            $photo = Input::file('photo');
            $photo->move('pics/slider', request('photo')->getClientOriginalName());
    	    $home->update(['title'=>request('title'), 
                           'photo'=>request('photo')->getClientOriginalName(),
                            'updated_at'=>request('date')]);
        }
        $home->update(['title'=>request('title'), 'updated_at'=>request('date')]);
    	return redirect("/homepage");
    }

    public function destroy($id)
    {
        $home = Home::findOrFail($id);
        unlink(public_path() . '\pics\slider\\' . $home->photo);
    	$home->delete();
    	return redirect("/homepage");
    }
}