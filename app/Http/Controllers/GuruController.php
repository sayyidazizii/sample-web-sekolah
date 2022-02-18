<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Galeri;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $items = Guru::get();
        $galeris = Galeri::latest()->get();

        return view('guru', [
            'items' => $items,
            'galeris'=> $galeris,
        ]);
    }
}
