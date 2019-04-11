<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('Tickets', 'TicketsController');

Route::get('sendemail', function(){
		$data = array(
			'name' => "Muhaddis",
		);

		Mail::send('Emails/welcome', $data, function ($message){
			$message->from('muhaddisshah@gmail.com', 'Learning Laravel');
			$message->to('muhaddisshah@gmail.com')->subject('Learning Laravel test email');	
		});
		return "Your email has been sent successfully";
});