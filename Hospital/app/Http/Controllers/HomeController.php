<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirectdd(){
        if(Auth::id()){
            if(Auth::user()->usertype == '1'){
                return view('admin.home');
            }
            else{
                return view('user.home');
            }

        }
        else{

            return redirect()->back();
        }
    }

    public function indexa(){
        return view('user.home');

    }
}
