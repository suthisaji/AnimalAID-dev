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


    public function viewSummernote(){
      $data=DB::table('blogs')->get();
       return view('viewSummernote',compact('data'));//compact คือ??
    }

    public function viewSummer(){
      $data=DB::table('blogs')->get();
       return view('summer',compact('data'));//จะเอาไปใช้ที่หน้า summer
    }
    public function viewAllSummer(){
      $data=DB::table('blogs')->get();
       return view('allQuestions',compact('data'));//จะเอาไปใช้ที่หน้า allQuestions
    }



    public function readSummerInfo($id){
    $data=DB::table('blogs')->where('id',$id)->first();
    return view('readSummer',compact('data'));
    }

    public function adminReadSummerInfo($id){
    $data=DB::table('blogs')->where('id',$id)->first();
    return view('adminReadSummer',compact('data')); //จะเอาไปใช้ที่หน้า AdminreadSummer
    }


    public function deleteSummer($id){
       DB::table('blogs')->where('id',$id)->delete();
       return back();
    }

    public function editSummer($id){
      $data=DB::table('blogs')->where('id',$id)->first();
      return view('editSummer',compact('data'));
    }

    public function updateSummer(Request $request){
    DB::table('blogs')->where('id',$request['id'])->update([
      'name'=>$request['name'],
      'topic'=>$request['topic'],
      'content'=>$request['summernote']
    ]);
    return back();
    }

    public function updateSummerAns(Request $request){
      $summer1=$request['summernote'];
      $summer2=$request['summernote2'];
      $sum = $summer1.'|||'.$summer2;

       DB::table('blogs')->where('id',$request['id'])->update([
      'answer'=>$sum,
      'adminAns_Id'=>$request['userid'],
      'status'=>$request['status']
    ]);
    return back();
    }
/*  function countAllQuestions(){ //นับคำถามที่มีทั้้งหมด เรียกใช้ไงวะลืม
      $countAllQ =DB::table('blogs')->count();
    }*/


}
