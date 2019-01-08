<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Service;
use Illuminate\Support\Facades\Input;

class ServicesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$services = Service::all();
    	return view("services.services", ["services"=>$services]);
    }

    public function create()
    {
    	return view("services.create");
    }

    public function store()
    {
        //dd(Input::file('photo')->getMimeType());
        request()->validate([
            'title'=>'required|min:3',
            'photo'=>'required|mimes:svg,svgz,html'
        ]);
        $photo = Input::file('photo');
        $photo->move('pics/services', request('photo')->getClientOriginalName('1'));
    	Service::create(['title'=>request('title'), 'photo'=>request('photo')->getClientOriginalName()]);
    	return redirect('/services');
    }

    public function show($id)
    {
    	$service = Service::findOrFail($id);
    	return view('services.show', ['service'=>$service]);
    }

    public function edit($id)
    {
    	$service = Service::findOrFail($id);
    	return view("services.edit", ["service"=>$service]);
    }

    public function update($id)
    {
    	request()->validate(['title'=>['required', 'min:3']]);
    	$service = Service::findOrFail($id);
        if(Input::hasFile('photo')){
            request()->validate([
                'title'=>'required|min:3',
                'photo'=>'mimes:svg,svgz,html'
            ]);
            unlink(public_path() . '\pics\services\\' . $service->photo);
            $photo = Input::file('photo');
            $photo->move('pics/services', request('photo')->getClientOriginalName());
            $service->update(['title'=>request('title'), 'photo'=>request('photo')->getClientOriginalName()]);
        }
        $service->update(['title'=>request('title')]);
    	return redirect('/services');			
    }

    public function destroy($id)
    {
    	$service = Service::findOrFail($id);
        unlink(public_path() . '\pics\services\\' . $service->photo);
    	$service->delete();
    	return redirect('/services');
    }
}
