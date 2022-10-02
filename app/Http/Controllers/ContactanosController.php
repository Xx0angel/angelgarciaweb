<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'comentario' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('angeliux.jossue@gmail.com')->send($correo);

        return redirect()->route('inicio')->with('Info', 'Informacion de contacto enviada correctamente.');
    }
}
