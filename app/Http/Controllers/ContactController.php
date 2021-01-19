<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('pages.contact');
    }

    public function sendForm(Request $request) {
        try {
            $this->validate($request, [
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'phone' => 'required',
                'message' => 'required|max:2000'
            ], [
                'firstname.required' => 'Numele de familie nu a fost introdus',
                'firstname.max'      => 'Numele de familie nu trebuie sa treaca de 255 de caractere',
                'lastname.required'  => 'Prenumele nu a fost introdus',
                'lastname.max'       => 'Prenumele nu trebuie sa treaca de 255 de caractere',
                'phone.required'     => 'Numarul de telefon nu a fost introdus!',
                'message.required'   => 'Nu poti trimite un mesaj gol!',
                'message.max'        => 'Mesajul nu trebuie sa fie mai mare de 2000 de caractere!'
            ]);
        }  catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        ContactForm::create([
            'firstname' => $request->input('firstname'),
            'lastname' =>  $request->input('lastname'),
            'phone' =>     $request->input('phone'),
            'email' =>     $request->input('email'),
            'message' =>   $request->input('message')
        ]);

        return redirect()->back()->with('success', 'Mesajul tau a fost trimis si urmeaza sa primesti un raspuns din partea noastra!');
    }
}
