<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Compagny;
use App\Models\Horaire;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function AjoutCompagny()
    {
        $compagnies = Compagny::all();
        $horaires = Horaire::all();

        return view('AjouterCar', compact('compagnies','horaires'));
    }

    public function traiterFormulaire(Request $request)
    {

        $car = new Car();
        $car ->compagny_id = $request->input('compagny_id');
        $car ->image = $request->input('image');
        $car ->trajet = $request->input('trajet');
        $car ->periode = $request->input('periode');
        $car ->place_dispo = $request->input('place_dispo');
        $car ->prix = $request->input('prix');
        $car ->horaire_id = $request->input('horaire_id');

       

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $file = $request->file('image');

        // Vérifier si le type de fichier est autorisé (PNG, JPEG ou JPG)
        if ($file->getClientOriginalExtension() === 'png' ||
            in_array($file->getClientOriginalExtension(), ['jpeg', 'jpg'])) {

            // Générer un nom de fichier aléatoire pour éviter les conflits
            $randomFileName = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Déplacer le fichier vers le dossier "public/images"
            $file->move(public_path('images'), $randomFileName);
            $FileName= 'images/'. $randomFileName;    
            $car ->image= $FileName; 
        }
     }

      $car->save();
    //   return back()->with('status', 'Car enregistrer avec succès');
      return redirect()->route('admin')->with('status', 'Car enregistrer avec succès');
    }

 
}
