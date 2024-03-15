<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function index(User $user){
        $data = User::all();

        return response()->json([

            'results' => [
                'user'=> $data,
            ],
            'success' => true,

        ]);
        
    }
    public function show(User $user){

        
        return response()->json([
            'success'=> true,
            'user'=> $user
        ]);
    }

    public function create(){

    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:users,email',
        ]);
    
        // Creazione del nuovo utente utilizzando il modello User
        $user = User::create($validatedData);
    
        // Restituisci una risposta con il nuovo utente creato
        return response()->json($user, 201);
    }

    public function update(Request $request, User $user)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:users,email',
        ]);

        // Aggiornamento dell'utente
        $user->update($validatedData);

        // Ritorna una risposta con l'utente aggiornato
        return response()->json($user, 200);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'Utente eliminato con successo'], 200);
    }
}