<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\regi;

class registerController extends Controller
{
    public function insert(Request $request)
    {
       $subj = $request->input('subject');
       $des = $request->input('description');
       $date = date('Y-m-d');
       $r = rand();
       $data = array('random'=>$r,'subject'=>$subj,'description'=>$des,'date'=>$date);
       DB::table('regis')->insert($data);


    	$record = DB::select("select * from regis where random='$r'");
        return view('show_id',['record'=>$record]);
    }

    /*public function show(Request $request)
    {
    	$id = $request->input('id');
    	$record = DB::select("select * from regis where random='$id'");
    	return view('view_reply',['record'=>$record]);
    }*/

    public function showall(Request $request)
    {
        if($request->session()->has('user'))
        {
          $res = DB::table('regis')->orderby('id','desc')->paginate(3);
          return view('dashboard', ['res' => $res]);
        }
        else
        {
          return redirect('login');
        }
    }
    public function delete($random)
    {
        DB::delete("delete from regis where random='$random'");
        return redirect('show');
    }

    public function reply($random)
    {
      $record = DB::select("select * from regis where random='$random'");
      return view('give_reply',['record'=>$record]);

    }
}
