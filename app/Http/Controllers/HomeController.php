<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function index(){
        $role=Auth::user()->role;
        $listuser = DB::table('users')->get();
        $listplanning = DB::table('plannings')->get();
        if($role=='admin'){
            return view('admin',compact('listuser'));
        }
        if($role=='responsable'){
            return view('responsable',compact('listuser'),compact('listplanning'));
        }
        if($role=='adherent'){
            return view('adherent',compact('listplanning'),compact('listuser'));
        }
        else{
            return view('coach',compact('listplanning'));
        }

    }
}
