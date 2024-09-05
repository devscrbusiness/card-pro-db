<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocationUser;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $location = LocationUser::where('user_id', $user->id)->first();

        return view('ubicacion.index', compact('user', 'location'));
    }

    public function updateLocation(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'detalle' => 'nullable|string|max:255',
        ]);

        LocationUser::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'detalle' => $request->detalle,
            ]
        );

        return redirect()->back()->with('success', 'Ubicación actualizada');
    }
}
