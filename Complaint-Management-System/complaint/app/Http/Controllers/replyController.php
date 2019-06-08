<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reply;
use DB;
use PDF;

class replyController extends Controller
{
	public function insert(Request $request)
	{
		$random = $request->input('random');
		$date = $request->input('date');
		$subject = $request->input('subject');
		$description = $request->input('description');
		$reply = $request->input('reply');

		$data = array('random'=>$random,'date'=>$date,'subject'=>$subject,'description'=>$description,'reply'=>$reply);
 		DB::table('replies')->insert($data);

 		echo $random;
 		return redirect('delete/'.$random);
	}

	public function show(Request $request)
    {
    	$id = $request->input('id');
    	$record = DB::select("select * from replies where random='$id'");
    	return view('view_reply',['record'=>$record]);
    }

    public function showall(Request $request)
    {
    	if($request->session()->has('user'))
        {	
    		$records = DB::table('replies')->orderby('id','desc')->paginate(5);
    		return view('view_report',['records'=>$records]);
        }
        else
        {
          	return redirect('login');
        }
    }

    public function report(Request $request)
    {
        $date1 = $request->input('date1');
        $date2 = $request->input('date2');
      
        $records = DB::select("select * from replies where date between '$date1' and '$date2'");
        $pdf = PDF::loadView('report',['records'=>$records]);
        return $pdf->stream('report.pdf');
    }
}
