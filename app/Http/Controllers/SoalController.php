<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;
use App\Models\SubBab;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        'id_sub_bab' => 'required',
        'soal' => 'required',
        'jawaban' => 'required',
      ]);
      $soal = new Soal([
        'id_sub_bab' => $request->get('id_sub_bab'),
        'soal' => $request->get('soal'),
        'jawaban' => $request->get('jawaban'),
      ]);
      $soal->save();
      return redirect(route('soals.show', $soal->id_sub_bab))->with('success', 'Soal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('soals.index', ['id_sub_bab' => $id, 'soals' => Soal::all()->where('id_sub_bab', $id)]);
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
    public function destroy(Soal $soal)
    {
      $id_sub_bab = $soal->id_sub_bab;
      Soal::destroy($soal->id);

      return redirect(route('soals.show', $id_sub_bab))->with('success', 'Soal berhasil dihapus!');
    }
}
