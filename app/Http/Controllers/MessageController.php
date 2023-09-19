<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer la classe User correcte
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageGoogle;

class MessageController extends Controller
{
    // Le formulaire du message
    public function formMessageGoogle()
    {
        return view("emails.message-google");
    }

    // Envoi du mail aux utilisateurs
    public function sendMessageGoogle(Request $request)
    {
        // Validation de la requête avec un message d'erreur personnalisé
        $this->validate($request, [
            'message' => 'required'
        ], [
            'message.required' => 'Le champ message est requis.'
        ]);
        $message = $request->input('message');

        // Récupération des utilisateurs
        $users = User::all(); // Utilisez le modèle User approprié

        // Envoi du mail
        Mail::to($users)->bcc("wilo.ahadi@gmail.com")
            ->queue(new MessageGoogle($request->all()));

        // Retour à la page précédente avec un message flash
        return back()->with('success', 'Message envoyé');
    }
}
