<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function indax(){
        return view('home');
    }

    public function index(){
        $datas=Membre::all();
        return view('membre', compact('datas'));
    }

    public function store(Request $request){

        $newEntry = new Membre;

        $newEntry->nom=$request->nom;
        $newEntry->age=$request->age;
        $newEntry->genre=$request->genre;
        
        $newEntry->save();

        return redirect()->back();
    }
    public function show($id){
        $data=Membre::find($id);
        return view('show',compact('data'));
    }
    public function delete($datadel){

        $profil = Membre::find($datadel);
        $profil->delete();
        return redirect('/membre');

    }
    public function update($id, Request $request){

        $user=Membre::find($id);

        $user->nom=$request->nom;
        $user->age=$request->age;
        $user->genre=$request->genre;
        
        $user->save();

        return redirect('/elem'.'/'.$user->id);
    }
    public function edit($id){
        $edit=Membre::find($id);
        return view('edit',compact('edit'));
    }
    public function destroy(){
        Membre::truncate();
        return redirect()->back();
    }
}
