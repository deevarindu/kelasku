<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Models\Nilai;
use Exception;

class NilaiApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Nilai::all();

      if($data){
        return ApiFormatter::createApi(200, 'Success', $data);
      }else{
        return ApiFormatter::createApi(400, 'Failed', $data);
      }
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
      try{
        $request->validate([
          'id_siswa' => 'required',
          'id_soal' => 'required',
        ]);

        $nilai = Nilai::create([
          'id_siswa' => $request->id_siswa,
          'id_soal' => $request->id_soal,
          'nilai' => $request->nilai,
        ]);

        $data = Nilai::where('id','=',$nilai->id)->get();

        if($data){
          return ApiFormatter::createApi(200, 'Success', $data);
        }else{
          return ApiFormatter::createApi(400, 'Failed', $data);
        }
      }catch (Exception $error){
        return ApiFormatter::createApi(400, 'Failed', $data);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = Nilai::where('id','=',$id)->get();

      if($data){
        return ApiFormatter::createApi(200, 'Success', $data);
      }else{
        return ApiFormatter::createApi(400, 'Failed', $data);
      }
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
      try{
        $request->validate([
          'id_siswa' => 'required',
          'id_soal' => 'required',
        ]);

        $nilai = Nilai::findOrFail($id);

        $nilai->update([
          'id_siswa' => $request->id_siswa,
          'id_soal' => $request->id_soal,
          'nilai' => $request->nilai,
        ]);

        $data = Nilai::where('id','=',$nilai->id)->get();

        if($data){
          return ApiFormatter::createApi(200, 'Success', $data);
        }else{
          return ApiFormatter::createApi(400, 'Failed', $data);
        }
      }catch (Exception $error){
        return ApiFormatter::createApi(400, 'Failed', $data);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try{
        $nilai = Nilai::findOrFail($id);

        $data = $nilai->delete();

        if($data){
          return ApiFormatter::createApi(200, 'Success Delete');
        }else{
          return ApiFormatter::createApi(400, 'Failed', $data);
        }
      } catch (Exception $error){
        return ApiFormatter::createApi(400, 'Failed', $data);
      }
    }
}
