<?php

namespace App\Http\Controllers;

use App\Models\coba;
use Illuminate\Http\Request;

class cobaController extends Controller
{
    public function index(){
        $coba = coba::all();
        return view ('coba',['coba' => $coba]);
    }
}