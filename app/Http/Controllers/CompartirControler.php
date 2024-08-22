<?php

namespace App\Http\Controllers;

use App\Models\NosotrosText;
use App\Models\RedesUser;
use App\Models\Redes;
use App\Models\User;
use Illuminate\Http\Request;

class CompartirControler extends Controller
{
    public function show($login_token)
    {
        $user = User::where('login_token', $login_token)->firstOrFail();

        $redes = RedesUser::where('user_id', $user->id)->get();

        return view('compartir', compact('user', 'redes'));
    }

    public function nosotros($login_token)
    {
        try {
            $user = User::where('login_token', $login_token)->firstOrFail();

            return view('nosotros.compartir', compact('user'));
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }
}
