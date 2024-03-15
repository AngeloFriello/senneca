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
}