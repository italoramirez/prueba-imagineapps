<?php

namespace App\Http\Controllers;

use App\Mail\EnvioMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{

    public function index ()
    {
        return view('emails.mail');
    }
   public function enviar_correo ()
   {
       $message = request()->validate([
           'name' => ['required', 'string', 'max:255'],
           'message' => ['required', 'string', 'max:255']
        ],
       [
           'name.required' => 'El nombre es requerido',
           'message.required' => 'El mensaje es obligatorio'
       ]);

        Mail::to('italoramirezp@gmail.com')->queue(new EnvioMail($message));
        return new EnvioMail($message);

        return 'Mensaje enviado';
   }
}
