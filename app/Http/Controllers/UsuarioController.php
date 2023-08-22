<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('usuarios')->get();
        return view('index');
    }
}