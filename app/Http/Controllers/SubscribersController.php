<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Subscriber;
use \App\Service;
use \App\Home;
use \App\Link;
use Illuminate\Support\Facades\Input;
use Exception;

class SubscribersController extends Controller
{
    public function index()
    {
    	$subscribers=Subscriber::all();
    	return view('subscribers.index', ['subscribers'=>$subscribers]);
    }

    public function store()
    {
        request()->validate([
            'name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'subject'=>'required',
            'text'=>'required'    
        ]);
        $services = Service::all();
        $sliders = Home::all();
        $links = Link::all();
        $message="You have sucesfully subscribed";
        try{
            $result = Subscriber::create([
            	'name' => request('name'),
            	'email' => request('email'),
                'gender' => request('gender')            
            ]);
        }catch(Exception $e){
            $errorCode = $e->errorInfo[1];
                if($errorCode == 1062){
                    $message="Such email already exists";
                }
        };      
    	return view('/welcome', ['message'=>$message, 'services'=>$services, 'sliders'=>$sliders, 'links'=>$links]);
    }
}