<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\mail\email;

class PagesController extends Controller
{

	public function SendEmail(){
		Mail::send(new Email());
	}

	public function SendEmailPost(){
		Mail::send(new Email());
	}

	public function MailPost(){
		return view('tickets/Mailer');

	}
}
