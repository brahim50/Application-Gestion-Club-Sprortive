<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index($id){
        $user =  User::find($id);
        return view('adminEdit',['user' => $user]);
       
    }

    public function createTable(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'pre' => $request->pre,
            'email' => $request->email,
            'role' => $request->role,
            'tel' => $request->tel,
            'dateN' => $request->dateN,
            'password' => Hash::make($request->password)

        ]);
         return back()->with('/redirects','User Ajouter success');
    }
    public function delete($id){
        $user = User::where('id',$id)->first();
        $user->delete();
        return redirect('/redirects')->with([
            'Success' => 'User supprimer'
        ]);
    }

    public function update(Request $request){
        $user =  User::find($request->id);
           $user->name = $request->name;
           $user->pre = $request->pre;
           $user->email = $request->email;
           $user->tel = $request->tel;
           $user->dateN = $request->dateN;
           $user->save();
           return redirect('/redirects');

    }

}
