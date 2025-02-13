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
            'data'      => bolygok::find($id),
            'db'        => holdak::where('bolygok_id',$id)
                        ->count('nev')
        ]);
    }

    public function Holdak($id){
        return view('holdak', [
            'menu'      =>  holdak::select('bolygok.nev','holdak.bolygok_id')
                                    ->join('bolygok', 'bolygok.bolygok_id','holdak.bolygok_id')
                                    ->groupBy('bolygok.nev','holdak.bolygok_id')
                                    ->orderBy('holdak.bolygok_id')
                                    ->get(),
            'h1'        =>  bolygok::find($id),
            'result'    =>  holdak::select('bolygok_id','nev','felfedezes')
                                    ->where('bolygok_id',$id)
                                    ->orderBy('nev')
                                    ->get(),
            'sorszam'   =>  1
        ]);
    }

    public function Edit($id){
        return view('edit', [
            'result'    => holdak::find($id)
        ]);
    }
}
