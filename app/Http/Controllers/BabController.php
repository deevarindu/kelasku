<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bab;
use App\Models\SubBab;
use App\Model\Mapel;

class BabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      $validateData = $request->validate([
        'judul_bab' => 'required|max:255',
      ]);
      $bab = new Bab([
        'id_mapel' => $request->get('id_mapel'),
        'judul_bab' => $request->get('judul_bab'),
      ]);
      $bab->save();
      return redirect(route('mapels.show', $bab->id_mapel))->with('success', 'Bab berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bab $bab)
    {
      return view('mapels.show_sub_babs', ['bab' => $bab, 'subbabs' => SubBab::all()->where('id_bab', $bab->id)]);
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
    public function destroy(Bab $bab)
    {
      $id_mapel = $bab->id_mapel;
      Bab::destroy($bab->id);

      return redirect('/mapels/'.$id_mapel)->with('success', 'Bab berhasil dihapus!');
    }
}
