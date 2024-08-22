<?php

namespace App\Http\Controllers;

use App\Models\NosotrosText;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NosotrosTextController extends Controller
{
    /**
     * Mostrar una lista de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $nosotrosTexts = NosotrosText::where('user_id', $user->id)->first();
        return view('nosotros.index', compact('nosotrosTexts'));
    }

    /**
     * Almacenar un nuevo recurso en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        NosotrosText::updateOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'texto' => $request->input('nosotros'),
                'nombre_de_la_empresa' => $request->input('nombre_empresa'),
            ]
        );

        return redirect()->route('nosotros.index')->with('success', 'Registro creado con éxito.');
    }
}
