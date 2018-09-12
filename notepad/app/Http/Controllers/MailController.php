<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send($data)
    {
        $objDemo = new \stdClass();
        $objDemo->name = $data['name'];
        $objDemo->email = $data['email'];
        $objDemo->telephone = $data['telephone'];
        $objDemo->theme = $data['theme'];
        $objDemo->comment = $data['comment'];
 
        Mail::to("onecrowd.aqualert@gmail.com")->send(new DemoEmail($objDemo));
    }
}