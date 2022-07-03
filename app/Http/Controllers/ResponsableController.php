<?php

namespace App\Http\Controllers;

use App\Models\Plannings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponsableController extends Controller
{
    //
    public function savesTables(Request $request){
        DB::table('plannings')->insert([
            'date' => $request->date,
            'Startime' => $request->Startime,
            'Endtime' => $request->Endtime,
            'coach' => $request->coach,
        ]);
         return back()->with('/redirects','Planning insert success');
    }
    public function delete($id){
        $plannig = Plannings::where('id',$id)->first();
        $plannig->delete();
        return redirect('/redirects')->with([
            'Success' => 'Planning supprimer'
        ]);
    }
}
