<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;

use Auth;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\TransferMoneyRepositoryInterface;
use DB;
use DateTime;

class ProductController extends Controller
{  protected $CategoryRepository;
   protected $TransferMoneyRepository;

  function __construct(CategoryRepositoryInterface $CategoryRepository,ProductRepositoryInterface $ProductRepository,TransferMoneyRepositoryInterface $TransferMoneyRepository){
      $this->CategoryRepository = $CategoryRepository;
      $this->ProductRepository = $ProductRepository;
      $this->TransferMoneyRepository = $TransferMoneyRepository;
    }

  function addProduct(){
          $this->middleware('auth');
          if(Auth::user()==null){
            return redirect('login');
          }
    if(Request::isMethod('get')){
      $category = $this->CategoryRepository->getAllCategory();
       $data = array(
        'category'=>$category
       );
      return view('addProductPage',$data);
    }else if(Request::isMethod('post')){
          $product_name = Input::get('product_name');
          //$productPicture = Input::get('ani_picture');
          //------upload image and store------
          $temp = Request::file('product_pic')->getPathName();
          $imageName = Request::file('product_pic')->getClientOriginalName();
          $path = base_path().'/public/images/';
          $newImageName = 'product_'.str_random(5).$imageName;
          Request::file('product_pic')->move($path, $newImageName);
          //----------------------------------

          $product_detail= Input::get('product_detail');
          $product_price= Input::get('product_price');
          $number_product=Input::get('number_product');
          $category_id= Input::get('category_id');

//echo $product_name.' '.$newImageName.' '.$product_detail.' '.$product_price.' '.$number_product.' '.$category_id;
        $result = $this->ProductRepository->addProduct($product_name,$category_id,$product_detail,$number_product,$product_price,$newImageName);


          if($result){
              return redirect('/addProductPage');
          }else{
              echo "Failed to add product";
          }
    }
  }

  function editProduct($product_id=0){
      $this->middleware('auth');
          if(Auth::user()==null){
            return redirect('login');
          }

      if(Request::isMethod('post')){
        $product_id = Input::get('product_id');
        $product_name = Input::get('product_name');//
        //------upload image and store------

      //  $productPicture = Input::get('ani_picture');

        $product_detail= Input::get('product_detail');
       $number_product=Input::get('number_product');
      $category_id= Input::get('category_id');
      $product_price= Input::get('product_price');

        if (Input::hasFile('product_pic')) {
        $temp = Request::file('product_pic')->getPathName();
        $imageName = Request::file('product_pic')->getClientOriginalName();
        $path = base_path().'/public/images/';
        $newImageName = 'product_'.str_random(5).$imageName;
        Request::file('product_pic')->move($path, $newImageName);
        //----------------------------------
          $result = $this->ProductRepository->updateProduct($product_id,$product_name,$category_id,$product_detail,$number_product,$product_price,$newImageName);

        }else {
          $result = $this->ProductRepository->updateProduct1($product_id,$product_name,$category_id,$product_detail,$number_product,$product_price);
        }
          if($result){
              return redirect('/addProductPage');
          }else{
              echo "Can not Update"."". $result;
          }
      }elseif(Request::isMethod('get')){
          $product = $this->ProductRepository->findById($product_id);
          //เรียกใช้ method getalldonaationtype ละส่งค่าไปหน้าวิว
          $category = $this->CategoryRepository->getAllCategory();//ใช่ชื่อนี้อ่อ5555
           $data = array(
              'product'=>$product,
              'category'=>$category //เรา เอาอันนี้ไปใช้ในหน้าวิว donationType --คือ key มัน
           );
          return view('editProduct', $data);
          //ในนี้บอกว่า เอาไอดีที่ส่งมาเอาไปหาใน ดีบี ละดึงค่ามาแสดง
          // $product_id=0 ตรงนี้หมายความว่า ถ้าไม่มี anumalid ส่งมา มันจะเปน0
          // พอเวลามึงกดส่งค่า มันจะเป็น url localhost:8000/edit
          //จะเห็นว่า มันไม่มีไอดีาส่งเข้ามาทาง url   $product_id จึงเท่ากับ 0
          // ทีนี้มันมาเข้า post method
          // ละมึงเอา $product_i ส่งไป repo ซึ่งมันมีค่า 0 มันเลย เออเร่อ

          //จอบอ เดวว ๆ
      }

  }
  function deleteProduct($product_id){
    $result = $this->ProductRepository->deleteProduct($product_id);
    if($result){
        return redirect('/listProduct');
    }else{
        echo "Can not delete product";
    }
  }


  function addProductPageVar(){
    $this->middleware('auth');
    if(Auth::user()==null){
  return redirect('login');
  }
    $category = $this->CategoryRepository->getAllCategory();

       $data = array(
          'category'=>$category
       );
     return view('addProductPage',$data);
  }

  function editProductPageVar(){
    $this->middleware('auth');
    if(Auth::user()==null){
  return redirect('login');
  }
    $category = $this->CategoryRepository->getAllCategory();
  $product = $this->ProductRepository->getAllProduct();
       $data = array(
          'category'=>$category,
            'product'=>$product,
       );
     return view('editProduct',$data);
  }

  function listOfProduct(){
    $this->middleware('auth');
    if(Auth::user()==null){
  return redirect('login');
  }
    $category = $this->CategoryRepository->getAllCategory();
    $product = $this->ProductRepository->getAllProduct();
       $data = array(
          'category'=>$category,
            'product'=>$product,
       );
     return view('listProduct',$data);
  }

function transferDocument(){
  $this->middleware('auth');
  if(Auth::user()==null){
return redirect('login');
}
$transferMoney = $this->TransferMoneyRepository->getAllTransferMoney();
$data = array(
   'transferMoney'=>$transferMoney,
);
return view('transferDocument',$data);
}



}
