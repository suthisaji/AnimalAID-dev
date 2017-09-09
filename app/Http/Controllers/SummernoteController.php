<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SummernoteController extends Controller
{
    public function index(){
    return view('summer');
}

    public function insert(Request $request){
      DB::table('blogs')->insert([
        'userid'=>$request['userid'],  /*ชื่อตารางเท่ากับname ของ element ที่เข้ามา*/
        'name'=>$request['name'],
        'topic'=>$request['topic'],
        'content'=>$request['summernote'],
        'created_at' => \Carbon\Carbon::now(),
      'updated_at' => \Carbon\Carbon::now()
      ]);
   return back();
    }

}
