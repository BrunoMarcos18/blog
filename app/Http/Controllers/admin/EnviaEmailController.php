<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviaEmailController extends Controller
{
    public function index(){
        $result = Mail::to('travessiniheloisa@gmail.com')->send(new SendMail('mensagem de teste', 'Bruno'));

        return ($result) ? 'E-mail enviado' : 'Erro';
    }
}
