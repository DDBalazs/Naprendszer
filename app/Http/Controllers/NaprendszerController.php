<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bolygok;
use App\Models\holdak;

class NaprendszerController extends Controller
{
    public function Bolygok($id){
        return view('bolygok', [
            'menu'      => bolygok::all(),
            'data'      => bolygok::find($id)
        ]);
    }
}
