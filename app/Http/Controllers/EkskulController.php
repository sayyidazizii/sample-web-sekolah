<?php

namespace App\Http\Controllers;
use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
     
    public function __invoke(Request $request)
    {
        // $items =
        //  dd($items);
        return view('ekskul',[
            'items' =>  Ekskul::all()
        ]); 
        
    }
}
