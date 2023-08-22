<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EndereçoController extends Controller
{
    public function index()
    {
        $endereços = DB::table('endereços')->get();
        return view('index');
    }
}