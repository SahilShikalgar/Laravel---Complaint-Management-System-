<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Comp;

class loginController extends Controller
{
    public function index()
    {
    	return redirect('/');
    }

    public function login(Request $request)
    {
     	$name = $request->input('name');
     	$password = $request->input('password');
        $res = DB::select("select * from comps where name='$name' and password='$password'");
        echo count($res);
        if(count($res)==0)
        {
        	echo "<script>alert('login failed');</script>";
        	return redirect('login');
        }
        else
        {
            $request->session()->put('user',$name);
        	return redirect('show');
        }
    }

    public function changeps(Request $request)
    {
        $old = $request->input('old');
        $new = $request->input('new');
        $cnew = $request->input('confirm');

        if(strcmp($old,$new)==0)
        {
            echo "old password and new password is same";
            return redirect('change_password');
        }
        else
        {
            $rows = DB::select("select * from comps");
            foreach($rows as $row)
            {
                $name=$row->name;
                $password=$row->password;
            }
            if($password==$old)
            {
                DB::update("update comps set password='$new' where name='$name'");   
                return redirect('change_password');
            }
            else
            {
                return redirect('change_password');
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('login');
    }

    public function changepassword(Request $request)
    {
        if($request->session()->has('user'))
        {
            return view('change_password');
        }
        else
        {
            return redirect('login');
        }
    }
}
