<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubBab;

class SubBabController extends Controller
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
        'id_bab' => 'required',
        'judul_sub_bab' => 'required|max:255',
        'isi_sub_bab' => 'required',
      ]);
      $sub_bab = new SubBab([
        'id_bab' => $request->get('id_bab'),
        'judul_sub_bab' => $request->get('judul_sub_bab'),
        'isi_sub_bab' => $request->get('isi_sub_bab'),
      ]);
      $sub_bab->save();
      return redirect(route('babs.show', $sub_bab->id_bab))->with('success', 'Sub Bab berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubBab $subbab)
    {
      return view('mapels.show_materi', ['subbab' => $subbab]);
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
    public function destroy(SubBab $subbab)
    {
      $id_bab = $subbab->id_bab;
      SubBab::destroy($subbab->id);

      return redirect('/babs/'.$id_bab)->with('success', 'Bab berhasil dihapus!');
    }
}
