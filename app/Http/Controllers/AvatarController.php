<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verif');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => ['required', 'min:3', 'max:35'],
        ]);
        if (Avatar::all()->count()===6) {
            return redirect()->back()->with('warning', "LE CLAN D'AVATAR EST COMPLET");
        } else {
            $photo = new Avatar();
            $photo->nom = $request->nom;
            $photo->src = $request->file("src")->hashName();
            Storage::put("public/img", $request->file("src"));
            $photo->save();
            return redirect('/avatars')->with('success', "IT'S REGISTERED!");
        
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        Storage::delete("public/img/".$avatar->src);
        $users=User::all()->where('avatar_id',$avatar->id);
        foreach ($users as $user){
            $user->avatar_id=2;
            $user->save();
        };
        $avatar->delete();
        return redirect('/avatars')->with('warning', "IT'S DELETED!");
    }

    public function download($id){
        // $download = Avatar::find($id);
        // // return Storage::download('/public/assets/img/portfolio/'.$download->img_portfolio);
        // $path=public_path('/storage/img/'.$download->src);
        // return response()->download($path);
    }
}
