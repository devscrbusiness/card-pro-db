<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicioUser;
use Illuminate\Support\Facades\Auth;

class ServicioUserController extends Controller
{
    /**
     * Obtener todos los servicios.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $servicios = ServicioUser::where('user_id', $user->id)->get();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Obtener un servicio específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = ServicioUser::find($id);

        if (!$servicio) {
            return response()->json(['message' => 'Servicio no encontrado'], 404);
        }

        return response()->json($servicio);
    }

    /**
     * Crear un nuevo servicio.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $request->validate([
            'servicio' => 'required|string|max:255',
        ]);

        $servicioCreado = ServicioUser::create([
            'user_id' => $userId,
            'servicio' => $request->input('servicio'),
        ]);

        $servicios = ServicioUser::where('user_id', $userId)->get();

        return view('servicios.index', compact('servicios'));
    }

    /**
     * Actualizar un servicio existente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userId = Auth::user()->id;
        $servicio = ServicioUser::find($id);

        if (!$servicio) {
            return response()->json(['message' => 'Servicio no encontrado'], 404);
        }

        $request->validate([
            'servicio' => 'required|string|max:255',
        ]);

        $servicio->update([
            'user_id' => $userId,
            'servicio' => $request->input('servicio'),
        ]);

        return response()->json($servicio);
    }

    /**
     * Eliminar un servicio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = ServicioUser::find($id);

        if (!$servicio) {
            return response()->json(['message' => 'Servicio no encontrado'], 404);
        }

        $servicio->delete();

        $servicios = ServicioUser::where('user_id', Auth::user()->id)->get();

        return view('servicios.index', compact('servicios'));
    }
}
