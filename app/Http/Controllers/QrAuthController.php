<?php

namespace App\Http\Controllers;

use App\Models\RedesUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class QrAuthController extends Controller
{
    public function verQR($token)
    {
        $user = User::where('nickname', $token)->first();
        $redes = RedesUser::where('user_id', $user->id)->get();

        return view('compartir', compact('user', 'redes'));
    }
}
