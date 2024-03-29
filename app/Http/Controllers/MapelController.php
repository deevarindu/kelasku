<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Bab;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mapels.index', ['mapels' => Mapel::all()->sortBy('kelas')]);
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
        'kelas' => 'required',
        'nama_mapel' => 'required|max:255',
      ]);

      $mapel = new Mapel([
        'kelas' => $request->get('kelas'),
        'nama_mapel' => $request->get('nama_mapel'),
      ]);
      $mapel->save();
      return redirect('/mapels')->with('success', 'Mapel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
      return view('mapels.show', ['mapel' => $mapel, 'babs' => Bab::all()->where('id_mapel', $mapel->id)]);
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
    public function destroy(Mapel $mapel)
    {
      Mapel::destroy($mapel->id);

      return redirect('/mapels')->with('success', 'Mapel berhasil dihapus!');
    }
}
