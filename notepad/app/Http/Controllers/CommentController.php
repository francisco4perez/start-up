<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;

class CommentController extends Controller
{

    public function main(Request $request){
    	$name = $request->input('name-input');
    	$email = $request->input('email-input');
    	$telephone = $request->input('telephone-input');
    	$theme = $request->input('theme-input');
    	$comment = $request->get('fake');

    	$data = [
    		'name' => $name,
    		'email' => $email,
    		'telephone' => $telephone,
    		'theme' => $theme,
    		'comment' => $comment
    	];

    	$mail_controller = new MailController();
    	$mail_controller->send($data);
    	return redirect('/');
    }
}
