<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;

class SoalController extends Controller
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
      $request->validate([
        'soal1' => 'required',
        'jawaban1' => 'required',
        'soal2' => 'required',
        'jawaban2' => 'required',
        'soal3' => 'required',
        'jawaban3' => 'required',
        'soal4' => 'required',
        'jawaban4' => 'required',
      ]);
      $soal = new Soal([
        'soal1' => $request->get('soal1'),
        'jawaban1' => $request->get('jawaban1'),
        'soal2' => $request->get('soal2'),
        'jawaban2' => $request->get('jawaban2'),
        'soal3' => $request->get('soal3'),
        'jawaban3' => $request->get('jawaban3'),
        'soal4' => $request->get('soal4'),
        'jawaban4' => $request->get('jawaban4'),
      ]);
      $soal->save();
      return redirect('/mapels')->with('success', 'Soal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
