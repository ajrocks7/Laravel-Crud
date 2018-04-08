<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use App\form;
class Formcontroller extends Controller {
    public function form()
    {
return view('form');
	 }
public function add()
{

	            	$entry=array(
                      'uname'=>Input::get('uname'),
                      'age'=>Input::get('age'),
                      'gender'=>Input::get('gender'),
                      'city'=>Input::get('city'),
                      'address'=>Input::get('address'),
                       'hobby'=>Input::get('hobby'),
                        'image'=>Input::get('image'),
                        'pno'=>Input::get('pno'),
		            	);
               
		            	 form::form_submit($entry);
		            	echo"success";
		                         return view('form');
	                  }
	
}


