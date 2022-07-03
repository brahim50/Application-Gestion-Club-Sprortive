<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdherentControllers extends Controller
{
    //

    public function index(){
        $listuser = DB::table('users')->get();
        return view('AdherentEdit',compact('listuser'));
    }
    
    
}
