<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('userguard', ['except' => ['logout']]);
        
    }


    public function getSignin(){
            self::$data['page_title'] = 'Sign in Page';
            return view('site.forms.signin', self::$data);
        }

    public function postSignin(SigninRequest $request){
        $redirect_to = !empty($request['redirect']) ? $request['redirect'] : '';
        if (User::signin($request['email'], $request['password'])){
            return redirect($redirect_to);
        } else {
            self::$data['page_title'] = 'Sign in Page';
            self::$data['signin_error'] = 'Wrong email or password';
            return view('site.forms.signin', self::$data);
        }
        
    }

    public function getSignup(){

        self::$data['page_title'] = 'Signup Page';
        return view('site.forms.signup', self::$data);

    }

    public function postSignup(SignupRequest $request)
    {
        User::save_new($request);
        return redirect('');
    }

    public function logout(){
        Session::flush();
        // Session::forget(['user_id', 'user_name', 'is_admin']);
        return redirect('user/signin');
    }

}
