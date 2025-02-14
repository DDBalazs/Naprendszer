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
            'result'    =>  holdak::select('bolygok_id','holdak_id','nev','felfedezes')
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

    public function EditData(Request $req, $id){
        $req->validate([
            'nev'               =>  'required',
            'felfedezes'        =>  'required'
        ],[
            'nev.required'              =>  'A név nem lehet üres',
            'felfedezes.required'       =>  'A felfedezés nem lehet üres'
        ]);

        $data                   = holdak::find($id);
        $data->nev              = $req->nev;
        $data->felfedezes       = $req->felfedezes;
        $data->Save();

        return view('succes',[
            'sv'    => 'Sikeresen módosítóttad a(z) '.$req->nev.' holdat!'
        ]);
    }

    public function Search($search){
        return view('search', [
            'result'        =>  holdak::where('nev', 'LIKE', '%'.$search.'%')
                                ->get()
        ]);
    }
}
