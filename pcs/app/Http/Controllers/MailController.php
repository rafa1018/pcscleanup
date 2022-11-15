<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use App\Http\Requests\CorreoRequest;
use App\Http\Requests\SendCorreoRequest;
use Mail;

class MailController extends Controller
{


    public function sendMail(CorreoRequest $request)
    {

        $data = [
            'name' => $request->name,
            'correo' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject
        ];

        try {
            Mail::to('mpedraza@pcscleanup.com')->send(new TestMail($data));
            //output
            $titulo = "Success";
            $icono = "success";
            $tipo = "success";
            $msj = "Message sent successfully";

            return response()->json(['titulo' => $titulo, 'icono' => $icono, 'mensaje' => $msj, 'tipo' => $tipo]);
        } catch (\Exception $e) {
            return response()->json(['titulo' => "error", 'icono' => "error", 'mensaje' => "Error with the message server, please try again later", 'tipo' => "error"]);
            DB::rollback();
        }
    }

}
