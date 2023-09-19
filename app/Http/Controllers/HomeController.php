<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Compagny;
use App\Models\Horaire;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function accueilPage(){
        return view('home.accueil');
    }
    public function clienPage(){
        $cars = Car::all();
        return view('home.clientPage', compact('cars'));
    }

    public function adminPage()
    {
        // Récupérez toutes les réservations (peut être utile pour une autre section)
        $reservations = Reservation::all();

        // Récupérez les réservations en attente avec un statut de 0 depuis la base de données
        $reservationsEnAttente = Reservation::where('statut', 0)->get();

        // Récupérez les utilisateurs et les voitures (peut être utile pour d'autres sections)
        $users = User::all();
        $cars = Car::all();

        // Passez les réservations en attente à la vue 'admin'
        return view('admin', compact('cars', 'users', 'reservationsEnAttente'));
    }


    public function listePage(){
        $user = User::all();

        $compagnies = Compagny::all();
        $horaires = Horaire::all();
        return view('Liste_taches', compact('compagnies','horaires', 'user'));
    }




}
