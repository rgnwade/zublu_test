<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HomepageController extends Controller
{

    public function Schedule(Request $request)
    {
        $date        = $request->input('date');
         $diver      = $request->input('divers');
         $nondiver      = $request->input('non-divers');

        $total_guest=$diver+$nondiver;

    
         return view('enquires', array(
            'date' =>  $date,
            'diver' =>  $diver,
            'nondiver' =>  $nondiver,
            'total_guest' =>  $total_guest,
        ));

    }
}
