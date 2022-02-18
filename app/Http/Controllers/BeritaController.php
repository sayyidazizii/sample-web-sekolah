<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Komentar;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Berita::paginate(6);
        $News = Berita::latest()->get();
        $galeris = Galeri::latest()->get();

        return view('berita.index', [
            'items' => $items,
            'News'  => $News,
            'galeris'=>$galeris
            
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
        $item = Berita::findOrFail($id);
        // dd($item);
        
        $berita_id = $item->id;
        // dd($berita_id);

        

        $komen = DB::table('komentars')->where('berita_id', '=' ,$berita_id)->get();
        // dd($komen);
     
        // $komen = Komentar::find($id);
        // dd($komen);


        $beritas = Berita::all();
        return view('berita.detail', [
            'item' => $item,
            'beritas'=>$beritas,
            'komen'=>$komen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
