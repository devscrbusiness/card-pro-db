<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RedesUser;
use Illuminate\Support\Facades\Auth;

class RedesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $redes = RedesUser::where('user_id', $user->id)->pluck('descripcion', 'red_id');

        return view('redes.index', compact('redes'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $redIds = [
            'instagram' => 1,
            'facebook' => 2,
            'youtube' => 3,
            'twitter' => 4,
        ];

        foreach ($redIds as $key => $redId) {
            if ($request->has($key) && !empty($request->input($key))) {
                RedesUser::updateOrCreate(
                    [
                        'red_id' => $redId,
                        'user_id' => $user->id,
                    ],
                    [
                        'descripcion' => $request->input($key),
                    ]
                );
            } else {
                RedesUser::where('red_id', $redId)
                    ->where('user_id', $user->id)
                    ->delete();
            }
        }

        return redirect()->route('redes.index')->with('success', 'Recursos actualizados exitosamente.');
    }

    public function destroy($id)
    {
        $red = RedesUser::findOrFail($id);
        $red->delete();

        return redirect()->route('redes.index')->with('success', 'Recurso eliminado exitosamente.');
    }
}
