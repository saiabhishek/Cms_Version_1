<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use  Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeveloperController extends Controller
{	
	  public function __construct()
    {
        $this->middleware('auth');
    }
	public function view()
	{	
		//$inp= \App\
		return view('cms/developer');
	}
    public function index()
    {
       	$input=Request::all();
       	\Storage::disk('local')->put('text.html', $input['code']);
	   	return redirect('/home');
    }
}
