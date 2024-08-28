<?php

namespace App\Http\Controllers;

use App\Models\NosotrosText;
use App\Models\RedesUser;
use App\Models\Redes;
use App\Models\ServicioUser;
use App\Models\User;
use Illuminate\Http\Request;

class CompartirControler extends Controller
{
    public function show($login_token)
    {
        $user = User::where('login_token', $login_token)->firstOrFail();

        $redes = RedesUser::where('user_id', $user->id)->get();

        $servicios = ServicioUser::where('user_id', $user->id)->get();

        return view('compartir', compact('user', 'redes', 'servicios'));
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

    public function redes($token)
    {
        $user = User::where('login_token', $token)->firstOrFail();
        $redes = RedesUser::where('user_id', $user->id)->get();

        return view('redes.compartir', compact('user', 'redes'));
    }

    public function servicios($token)
    {
        try {
            $user = User::where('login_token', $token)->firstOrFail();
            $servicios = ServicioUser::where('user_id', $user->id)->get();

            return view('servicios.compartir', compact('servicios', 'user'));
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }
}
