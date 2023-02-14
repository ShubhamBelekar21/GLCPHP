<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{
    function login()
    {
        return view('Account.login');
    }

    public function checkLogin(Request $request)
    {
        //Validate Request
//        $request->validate([
//            'username'=>'required|username',
//            'password'=>'required|min:5|max:12'
//        ]);

        $userInfo = AccountModel::where('UserName', $request->username)->get()->first();

        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your Username');
        } else {
            if ($request->password == $userInfo->PasswordText) {

                $dbName = 'mysql';
                Session::put('Database', $dbName);
                //DB::statement('UPDATE currentDB SET DB =?',array($dbName));
                //$request->session()->put('Database',$dbName);

                Session::put('LoggedUser', $userInfo->Name);

                return \redirect('/Testtt');

            } else {
                return back()->with('fail', 'Incorrect Password');
            }
        }
    }

    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/');
        }
        return redirect('/');
    }



}
