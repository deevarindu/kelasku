<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Helpers\ApiFormatter;
use Exception;

class SiswaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Siswa::all();

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
          'nama' => 'required',
          'kelas' => 'required',
          'email' => 'required|email|unique:siswas|max:255',
          'password' => 'required|min:6',
        ]);
        $siswa = Siswa::create([
          'nama' => $request->nama,
          'kelas' => $request->kelas,
          'email' => $request->email,
          'password' => $request->password,
        ]);
        $data = Siswa::where('id','=',$siswa->id)->get();

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
      $data = Siswa::where('id','=',$id)->get();

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
          'nama' => 'required',
          'kelas' => 'required',
          'email' => 'required|email|unique:siswas|max:255',
          'password' => 'required|min:6',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
          'nama' => $request->nama,
          'kelas' => $request->kelas,
          'email' => $request->email,
          'password' => $request->password,
        ]);
        $data = Siswa::where('id','=',$siswa->id)->get();

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
        $siswa = Siswa::findOrFail($id);

        $data = $siswa->delete();

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
