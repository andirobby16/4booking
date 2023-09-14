<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\kirimEmail;


class MailController extends Controller
{
    public function index(){
        Mail::to("andirobby09@gmail.com")->send(new kirimEmail());

        return '<h1>Email Sukses</h1>';
    }
}
