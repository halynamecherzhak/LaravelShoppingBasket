<?php
/**
 * Created by PhpStorm.
 * User: Halyna_Mecherzhak
 * Date: 7/16/2019
 * Time: 10:49 AM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogout(){
        Auth::logout();
        return view('home');
    }

}