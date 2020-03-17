<?php

namespace App\Http\Controllers; /* namespace means this class belongs to App\Http\Controllers  */
Use App\Message; /*Message is the model name*/

use Illuminate\Http\Request; /* use means we wanna pull something out and use it and  Illuminate\Http\Request or were gonna take it from laravel out of http request*/

class MessagesController extends Controller
{
   public function submit(Request $request){ /*(Request $request) -> is used inorder to access the input fields */
   	/*return $request->input('name');/*('name') is a form name*/
   	$this->validate($request, [
   		'name' => 'required',
   		'email' => 'required'

   	]);

   	/*$validator = Validator::make($request->input() , [
    'name' => 'required',
    'email' => 'required',
    
]);*/

   	return 'SUCCESS';

   	//Create a new message

   	/*$message = new Message; /*Message is the model name
   	$message->name = $request->input('name');
   	$message->email = $request->input('email');
   	$message->message = $request->input('message');*/


   	//Save message to the db
   	//$message->save();

   	// Redirect
   	return redirect('/');
   }

   /*To create an alert message, go to app.blade.php*/
}
