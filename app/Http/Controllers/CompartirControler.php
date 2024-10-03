<?php

namespace App\Http\Controllers;

use App\Models\LocationUser;
use App\Models\NosotrosText;
use App\Models\RedesUser;
use App\Models\Redes;
use App\Models\ServicioUser;
use App\Models\User;
use Illuminate\Http\Request;

class CompartirControler extends Controller
{
    public function show($nickname)
    {
        $user = User::where('nickname', $nickname)->firstOrFail();
        $redes = RedesUser::where('user_id', $user->id)->get();
        $servicios = ServicioUser::where('user_id', $user->id)->get();
        $location = LocationUser::where('user_id', $user->id)->first();

        return view('compartir', [
            'user' => $user,
            'redes' => $redes,
            'servicios' => $servicios,
            'location' => $location,
            'profilePicture' => $user->photos ? $user->photos->profile_picture : null
        ]);
    }

    public function nosotros($nickname)
    {
        try {
            $user = User::where('nickname', $nickname)->firstOrFail();
            $redes = RedesUser::where('user_id', $user->id)->get();
            $servicios = ServicioUser::where('user_id', $user->id)->get();
            $location = LocationUser::where('user_id', $user->id)->first();

            return view('nosotros.compartir', [
                'user' => $user,
                'redes' => $redes,
                'servicios' => $servicios,
                'location' => $location,
                'profilePicture' => $user->photos ? $user->photos->profile_picture : null
            ]);
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }

    public function redes($nickname)
    {
        $user = User::where('nickname', $nickname)->firstOrFail();
        $redes = RedesUser::where('user_id', $user->id)->get();
        $servicios = ServicioUser::where('user_id', $user->id)->get();
        $location = LocationUser::where('user_id', $user->id)->first();

        return view('redes.compartir', [
            'user' => $user,
            'redes' => $redes,
            'servicios' => $servicios,
            'location' => $location,
            'profilePicture' => $user->photos ? $user->photos->profile_picture : null
        ]);
    }

    public function servicios($nickname)
    {
        try {
            $user = User::where('nickname', $nickname)->firstOrFail();
            $redes = RedesUser::where('user_id', $user->id)->get();
            $servicios = ServicioUser::where('user_id', $user->id)->get();
            $location = LocationUser::where('user_id', $user->id)->first();

            return view('servicios.compartir', [
                'user' => $user,
                'redes' => $redes,
                'servicios' => $servicios,
                'location' => $location,
                'profilePicture' => $user->photos ? $user->photos->profile_picture : null
            ]);
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }

    public function ubicacion($nickname)
    {
        try {
            $user = User::where('nickname', $nickname)->firstOrFail();
            $redes = RedesUser::where('user_id', $user->id)->get();
            $servicios = ServicioUser::where('user_id', $user->id)->get();
            $location = LocationUser::where('user_id', $user->id)->first();

            return view('ubicacion.compartir', [
                'user' => $user,
                'redes' => $redes,
                'servicios' => $servicios,
                'location' => $location,
                'profilePicture' => $user->photos ? $user->photos->profile_picture : null
            ]);
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }
}
