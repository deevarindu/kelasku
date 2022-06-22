<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;
use App\Helpers\ApiFormatter;
use Exception;

class SoalApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Soal::all();

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
          'id_sub_bab' => 'required',
          'soal' => 'required',
          'jawaban' => 'required',
        ]);

        $soal = Soal::create([
          'id_sub_bab' => $request->id_sub_bab,
          'soal' => $request->soal,
          'jawaban' => $request->jawaban,
        ]);

        $data = Soal::where('id','=',$soal->id)->get();

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
      $data = Soal::where('id','=',$id)->get();

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
          'id_sub_bab' => 'required',
          'soal' => 'required',
          'jawaban' => 'required',
        ]);

        $soal = Soal::findOrFail($id);

        $soal->update([
          'id_sub_bab' => $request->id_sub_bab,
          'soal' => $request->soal,
          'jawaban' => $request->jawaban,
        ]);

        $data = Soal::where('id','=',$soal->id)->get();

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
        $soal = Soal::findOrFail($id);

        $data = $soal->delete();

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
