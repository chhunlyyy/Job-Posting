<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('user_tb')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = DB::table('user_tb')->select('*')->where('email','=',$request->email)->get();
        
        if($user->isEmpty()){
            $request->validate(
                [
                  'name' => 'required',
                  'date_of_birth'=> 'required',
                  'phone'=> 'required',
                  'email'=> 'required',
                  'status'=> 'required',
                  'password_hash'=> 'required'
                ]
              );
      
              $request->merge([
                  'password_hash' => hash('sha256',  $request->password_hash)
              ]);
      
              return AuthModel::create($request->all());
        }
        return response()->json([
            [
                'Message' => ['Email is already been used']
            ]], 422);;
        
    }

    /**
     * check login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password_hash'=>'required'
        ]);
        
        $password = hash('sha256',  $request->password_hash);
        $result = DB::table('user_tb')->select('password_hash')->where('email','=',$request->email)->get();
            
        if($result[0]->password_hash == $password){
            return DB::table('user_tb')->select('*')->where('email','=',$request->email)->get();
        }
          return response()->json([
            [
                'Message' => ['Wrong user name and password']
            ]], 422);;
    
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
