<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('resep', ['user' => $user]);
    }
}
