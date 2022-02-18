<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Berita;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $slug)
    {
        $item = Page::where('slug', $slug)->firstOrFail();
        $beritas = Berita::latest()->get();

        return view('page', [
            'item' => $item,
            'beritas'=> $beritas
        ]);
    }
}
