<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
          'email' => 'required|email|max:255',
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

    public function register(Request $req)
    {
        $data = [
            'nama' => 'required',
            'kelas' => 'required',
            'email' => 'required|email|unique:siswas|max:255',
            'password' => 'required|min:6'
        ];
        $validator = Validator::make($req->all(), $data);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $user = Siswa::create([
          'nama' => $req->nama,
          'kelas' => $req->kelas,
          'email' => $req->email,
          'password' => Hash::make($req->password)
        ]);
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response()->json($response, 200);
    }

    public function login(Request $req)
    {
        $data = [
          'email' => 'required',
          'password' => 'required'
        ];
        $req->validate($data);
        $user = Siswa::where('email', $req->email)->first();
        if ($user && Hash::check($req->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['user' => $user, 'token' => $token];
            return response()->json($response, 200);
        }
        $response = ['message' => 'Incorrect email or password'];
        return response()->json($response, 400);
    }
}
