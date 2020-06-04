<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelWarga;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use DB;
use Redirect;

class AuthController extends Controller
{
//proses login
    public function postlogin(Request $request)
    {
      $email = $request->email;
        $password = $request->password;

        $data = ModelWarga::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/dashboard');
            }
            else{
                return redirect('/')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/')->with('alert','Password atau Email, Salah!');
        }
    }
//proses logout
    public function logout()
    {
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }
//proses create data
    public function registerpost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'nik' => 'min:16|unique:tb_warga',
            'email' => 'required|min:4|email|unique:tb_warga',
            'password' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required'
        ]);

        $data =  new ModelWarga();
        $data->name = $request->name;
        $data->nik = $request->nik;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->tgl_lahir = $request->tgl_lahir;
        $data->gender = $request->gender;
        $data->role = $request->role;
        $data->save();
        return redirect('/')->with('alert','Akun selesai. Silahkan Login');
    }

}
