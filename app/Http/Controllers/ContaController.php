<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContaController extends Controller
{
    public function index()
    {
        $contas = DB::table('contas')->get();
        return view('index');
    }
}