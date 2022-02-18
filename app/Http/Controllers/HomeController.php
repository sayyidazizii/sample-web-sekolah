<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Ekskul;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $items = Berita::latest()->get();
        $galeris = Galeri::latest()->get();
        $gurus = Guru::all()->count();
        $Ekskul = Ekskul::all()->count();
        $Homes = Home::all();
        // dd($Homes);
        return view('home', [
            'items' => $items,
            'galeris'=> $galeris,
            'Homes' => $Homes,
            'gurus' => $gurus,
            'Ekskul' => $Ekskul
        ]);  
        
    }
}
