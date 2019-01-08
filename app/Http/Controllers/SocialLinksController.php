<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Link;
use Illuminate\Support\Facades\Input;

class SocialLinksController extends Controller
{
    public function links()
    {
    	$social_links=Link::all();
    	return view('social_links.index', ['social_links'=>$social_links]);
    }

    public function edit($id)
    {
    	$social_link=Link::findOrFail($id);
    	return view('social_links.edit', ['social_link'=>$social_link]);
    }

    public function update($id)
    {
    	request()->validate(['link'=>'required']);
    	$social_link = Link::findOrFail($id);
    	if(Input::hasFile('icon')){
    		unlink(public_path() . '\pics\social_links\\' . $social_link->icon);
            $icon = Input::file('icon');
            $icon->move('pics/social_links', request('icon')->getClientOriginalName());
    	    $social_link->update(['link'=>request('link'), 'icon'=>request('icon')->getClientOriginalName()]);
    	}
    	$social_link->update(['link'=>request('link')]);
    	return redirect('/links');
    }
}
