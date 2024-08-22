<?php

namespace App\Http\Controllers;

use App\Models\RedesUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $redes = RedesUser::where('user_id', $user->id)->get();

        return view('card_default', compact('user', 'redes'));
    }
}
