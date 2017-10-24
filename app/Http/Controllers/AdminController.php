<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\AnimalRepositoryInterface;
use App\Adoption;
use Auth;
use DB;
class AdminController extends Controller


{
    protected $UserRepository;
        protected $AnimalRepository;
    public function __construct(UserRepositoryInterface $UserRepository,AnimalRepositoryInterface $AnimalRepository)
    {
    	  $this->middleware('auth');
        $this->AnimalRepository = $AnimalRepository;
        $this->UserRepository = $UserRepository;
    }

    function index(){
        $admin = Auth::user()->id;
        $countRecipientEachAdmin = $this->AnimalRepository->countRecipientEachAdmin($admin);
    	  $data = array(
    		 'all_users'=>$this->UserRepository->getAllUser(),
         'countRecipientEachAdmin'=>$countRecipientEachAdmin,
         'admin'=>true ,
         'da'=>  DB::table('blogs')->orderBy('created_at','DESC')->get()
    	  );

    	return view('admin',$data);
    }





    function delete($id){
    	 $result = $this->UserRepository->deleteUser($id);
    	 if($result){
    	  	return redirect('admin');
    	 }else{
    	  	echo "Can not Delete this user";
      	}
    }






    function userProfile2(){
      $userId  =   Auth::user()->id;
      $name    =   Auth::user()->name;
      $username=   Auth::user()->username;
      $email   =   Auth::user()->email;
      $tel     =   Auth::user()->tel;
      $created =   Auth::user()->created_at;
        $everAdoption = $this->AnimalRepository->countEverAdoption($userId);
        $countUserDonate = $this->AnimalRepository->countUserDonate($tel);
        $sumAmountUserDonate = $this->AnimalRepository->sumAmountUserDonate($tel);
        $data = array(
          'userId'=>$userId ,
          'name' =>$name ,
          'username' =>$username,
          'email' =>$email,
          'tel' =>$tel,
          'created' =>$created,
          'everAdoption'=>$everAdoption,
          'countUserDonate'=>$countUserDonate,
          'sumAmountUserDonate'=>$sumAmountUserDonate
        );
      return view('userProfile2',$data);
    }




        function AdminProfile(){
          $userId  =   Auth::user()->id;
          $countAdminAction = $this->AnimalRepository->countAdminAction($userId);
          $name    =   Auth::user()->name;
          $username=   Auth::user()->username;
          $email   =   Auth::user()->email;
          $tel     =   Auth::user()->tel;
          $created =   Auth::user()->created_at;
                    $everAdoption = $this->AnimalRepository->countEverAdoption($userId);
                    $admin = Auth::user()->id;
                    $countRecipientEachAdmin = $this->AnimalRepository->countRecipientEachAdmin($admin);
                    $admins = $this->AnimalRepository ->getAllAdmin();
                    $countAdminCreateNews = $this->AnimalRepository->countAdminCreateNews($userId);
                    $countAdminCreateAct = $this->AnimalRepository->countAdminCreateAct($userId);
                    $countAdminAnsQues = $this->AnimalRepository->countAdminAnsQues($userId);
                    $sumAmountUserDonate = $this->AnimalRepository->sumAmountUserDonate($tel);
                    $countUserDonate = $this->AnimalRepository->countUserDonate($tel);
            $data = array(
              'userId'=>$userId ,
              'name' =>$name ,
              'username' =>$username,
              'email' =>$email,
              'tel' =>$tel,
              'created' =>$created,
              'everAdoption'=>$everAdoption,
              'all_users'=>$this->UserRepository->getAllUser(),
              'countRecipientEachAdmin'=>$countRecipientEachAdmin,
              'admin'=>true,
              'admins'=>$admins,
              'countAdminAction'=>$countAdminAction,
              'countAdminCreateNews'=>$countAdminCreateNews,
              'countAdminCreateAct'=>$countAdminCreateAct,
              'countAdminAnsQues'=>$countAdminAnsQues,
              'countUserDonate'=>$countUserDonate,
              'sumAmountUserDonate'=>$sumAmountUserDonate
              );

            return view('adminProfile',$data);
        }



  }
