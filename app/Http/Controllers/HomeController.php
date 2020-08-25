<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Entities\User;
use Exception;

class HomeController extends Controller
{
    /**Diret to login page */
    public function login(){
        return view('admin.auth.login');
    }

    /**Diret to login page if logout */
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    /**Diret to register page */
    public function register(){
        return view('auth.register');
    }

    public function auth(Request $request ){

        $data =
        [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        try {
            if(env('PASSWORD_HASH')){
                Auth::attempt($data, false);
            }else{
                $user = User::where('email', $request->email)->first();
                if(!$user){
                  return dd('erro', $request);
                    throw new Exception("Email inválido");
                }
                if($user->password != $request->get('password')){
                  return dd('erro senha', $request);
                    throw new Exception("Senha inválida");
                }

                Auth::login($user);
                return redirect()->route('admin.home');

            }
        } catch (Exception $e) {
            //throw $th;
            return redirect()->back()->with(['message'=> $e->getMessage()]);
        }

    }

}
