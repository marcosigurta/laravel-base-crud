<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagante;

class PaganteController extends Controller
{
    public function index(){

        $var = Pagante::all();

    // dd($var);

        return view('paganti',compact('var'));
    }
}
