<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    public function adminStore(Request $request){
        $request->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            'email'=>['required', 'email'],
            'phone_number'=> ['required'],
            'password'=> ['required'],
        ]);

     User::create([
           
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'email'=>$request->email,
                'phone_number'=> $request->phone_number,
                'password' => Hash::make( $request->password),
                'role_id'=> 1
            
        ]);
    }
    public function clientRegister(){
        return view('register');
    }

    public function clientStore(Request $request){
        $request->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            'email'=>['required', 'email'],
            'phone_number'=> ['required'],
            'password'=> ['required'],
        ]);

     User::create([
           
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'email'=>$request->email,
                'phone_number'=> $request->phone_number,
                'password' => Hash::make( $request->password),
                'role_id'=> 2
        ]);
        // return redirect()->route('home');
        return redirect()->route('login')->with('status', 'Inscription reussie! tu peux te connecter');
    
    }


    public function loginPage(){
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role_id === 1) {
                $request->session()->regenerate();
                return redirect()->route('admin');
            } elseif ($user->role_id === 2) {
                $request->session()->regenerate();
                return redirect()->route('client');
            }
        }
    
        return back()->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }


    public function doLogout()
    {
        Auth::logout();
        return redirect()->route('login'); // Redirection vers la page de connexion après déconnexion
    }
}
