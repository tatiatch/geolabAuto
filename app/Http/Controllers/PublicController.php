<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Service;
use \App\Home;
use \App\Subscriber;
use \App\Link;
use Exception;

class PublicController extends Controller
{
    public function index()
    {
    	$services = Service::all();
    	$sliders = Home::all();
    	$links = Link::all();
    	return view('welcome', ['services'=>$services, 'sliders'=>$sliders, 'links'=>$links]);
    }
}
