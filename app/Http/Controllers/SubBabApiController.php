<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubBab;
use App\Helpers\ApiFormatter;
use Exception;

class SubBabApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = SubBab::all();

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
          'id_bab' => 'required',
          'judul_sub_bab' => 'required|max:255',
          'isi_sub_bab' => 'required',
        ]);

        $subbab = SubBab::create([
          'id_bab' => $request->id_bab,
          'judul_sub_bab' => $request->judul_sub_bab,
          'isi_sub_bab' => $request->isi_sub_bab,
        ]);

        $data = SubBab::where('id','=',$subbab->id)->get();

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
      $data = SubBab::where('id','=',$id)->get();

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
          'id_bab' => 'required',
          'judul_sub_bab' => 'required|max:255',
          'isi_sub_bab' => 'required',
        ]);

        $subbab = SubBab::findOrFail($id);

        $subbab->update([
          'id_bab' => $request->id_bab,
          'judul_sub_bab' => $request->judul_sub_bab,
          'isi_sub_bab' => $request->isi_sub_bab,
        ]);

        $data = SubBab::where('id','=',$subbab->id)->get();

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
        $subbab = SubBab::findOrFail($id);

        $data = $subbab->delete();

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
