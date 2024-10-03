<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RedesUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        
        $redes = RedesUser::where('user_id', $user->id)->get();
        
        if(!isset($user->nickname)){
            $user->update(
                ['nickname' => $this->generateNickname($user)]
            );
        }

        return view('card_default', [
            'user' => $user,
            'redes' => $redes,
            'profilePicture' => $user->photos ? $user->photos->profile_picture : null,
        ]);
    }

    public function generateNickname($user){
        return str_replace(' ', '', ucwords($user->name)).
        str_replace(' ', '', ucwords($user->last_name)).
        str_replace(' ', '', ucwords($user->ocupacion));
    }
}
