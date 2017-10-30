<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;

use Auth;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\TransferMoneyRepositoryInterface;
use App\Repositories\ShippingRepositoryInterface;
use App\Repositories\ReserveProductRepositoryInterface;
use App\Repositories\Product_reserveRepositoryInterface;
use DB;
use DateTime;

class ProductController extends Controller
{  protected $CategoryRepository;
   protected $TransferMoneyRepository;
    protected $ShippingRepository;

  function __construct(CategoryRepositoryInterface $CategoryRepository,ProductRepositoryInterface $ProductRepository,TransferMoneyRepositoryInterface $TransferMoneyRepository,ShippingRepositoryInterface $ShippingRepository,ReserveProductRepositoryInterface $ReserveProductRepository,Product_reserveRepositoryInterface $Product_reserveRepository){
      $this->CategoryRepository = $CategoryRepository;
      $this->ProductRepository = $ProductRepository;
      $this->TransferMoneyRepository = $TransferMoneyRepository;
      $this->ShippingRepository = $ShippingRepository;
      $this->ReserveProductRepository = $ReserveProductRepository;
      $this->Product_reserveRepository = $Product_reserveRepository;
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
        return redirect('/shop.listProductAdminView');
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


function changeStatusToConfirmTransferMoney($order_number=0){

      if(Request::isMethod('post')){
        $order_number = Input::get('order_number');
        $checking_status= Input::get('checking_status');
        $result = $this->TransferMoneyRepository->updateTransferMoneyConfirm($order_number,$checking_status);

          if($result){
              return redirect('/transferDocument');
          }else{
              echo "Can not Update";
          }
      }elseif(Request::isMethod('get')){
        $transferMoney = $this->TransferMoneyRepository->getAllTransferMoney();
         $data = array(
              'transferMoney'=>$transferMoney
          );
          return view('transferDocument', $data);

      }

  }
function confirmTransferMoney(){//สร้างตาราง shipping และเปลี่ยน checking_status เป็น confirm ด้วย

  if(Request::isMethod('post')){

    $order_number = Input::get('order_number');
    $checking_status= Input::get('checking_status');
    $result = $this->TransferMoneyRepository->updateTransferMoneyConfirm($order_number,$checking_status);
    if($result){
      $ordering_id = Input::get('ordering_id');
      $buyer_id= Input::get('buyer_id');
      $address = Input::get('address');
      $tel = Input::get('tel');
      $email = Input::get('email');
      $checking_status= Input::get('checking_status');

      $result = $this->ShippingRepository->addShipping($ordering_id,$buyer_id,$address,$tel,$email);//$animal_id

      if($result){
          return redirect('/transferDocument');
      }else{
          echo "Failed to add adopt";
      }
    }else{
        echo "Can not Update";
    }


          }else{

            return redirect('/transferDocument');
          }

}

function noConfirmTransferMoney(){//เปลี่ยน checking_status เป็น noConfirm ด้วย

  if(Request::isMethod('post')){

    $order_number = Input::get('order_number');
    $checking_status= Input::get('checking_status');
    $result = $this->TransferMoneyRepository->updateTransferMoneyConfirm($order_number,$checking_status);


      if($result){
          return redirect('/transferDocument');

    }else{
        echo "Can not Update";
    }


}
}
function cancelTransferMoney(){//เปลี่ยน checking_status เป็น noConfirm ด้วย

  if(Request::isMethod('post')){

    $order_number = Input::get('order_number');
    $checking_status= Input::get('checking_status');
    $result = $this->TransferMoneyRepository->updateTransferMoneyConfirm($order_number,$checking_status);


      if($result){
          return redirect('/transferDocument');

    }else{
        echo "Can not Update";
    }


}
}
/*เปลี่ยน สเตตัสการจัดส่ง เป็นยกเลิก*/
function statusShippingToCancel($ordering_id=0){

      if(Request::isMethod('post')){
        $ordering_id = Input::get('ordering_id');
        $shipping_status= Input::get('shipping_status');
        $result = $this->ShippingRepository->updateShippingCancel($ordering_id,$shipping_status);

          if($result){
              return redirect('/transferDocument');
          }else{
              echo "cannot update";
          }
      }elseif(Request::isMethod('get')){
        $shipping = $this->ShippingRepository->getAllShipping();
         $data = array(
              'shipping'=>$shipping
          );
          return view('transferDocument', $data);

      }

  }
  function shippingDocument(){//จะแสดงข้อมูลหน้า Shipping
    $this->middleware('auth');
    if(Auth::user()==null){
  return redirect('login');
    }
  $shipping = $this->ShippingRepository->getAllShipping();
  $data = array(
     'shipping'=>$shipping,
  );
  return view('shippings',$data);
  }

  /*เปลี่ยน สเตตัสการจัดส่ง เป็นยกเลิก*/
  function shippingAfterDelivery($ordering_id=0){

        if(Request::isMethod('post')){
          $ordering_id = Input::get('ordering_id');
          $dateTimeShipping= Input::get('dateTimeShipping');
          $package_id= Input::get('package_id');
          $shipping_status=Input::get('shipping_status');
          $result = $this->ShippingRepository->updateShippingAfterDelivery($ordering_id, $shipping_status,$dateTimeShipping, $package_id);

            if($result){
                return redirect('/shippings');
            }else{
                echo "cannot update";
            }
        }elseif(Request::isMethod('get')){
          $shipping = $this->ShippingRepository->getAllShipping();
           $data = array(
                'shipping'=>$shipping
            );
            return view('shippings', $data);

        }

    }

    function shipping_statusDocument(){//จะแสดงข้อมูลหน้า Shipping_status
      $this->middleware('auth');
      if(Auth::user()==null){
    return redirect('login');
      }
    $shipping = $this->ShippingRepository->getAllShipping();
    $data = array(
       'shipping'=>$shipping,
    );
    return view('shipping_status',$data);
    }

    function updateAddressToUser($id=0){

          if(Request::isMethod('post')){
            $id = Input::get('id');
            $customer_id = Input::get('id');
            $address= Input::get('address');
            $Bank_name=Input::get('Bank_name');
            $pay_status=Input::get('pay_status');

            $order_number= Input::get('order_number');
            $ordering_id=Input::get('ordering_id');
            $amountOfTransfer=Input::get('amountOfTransfer');

            $result1 = $this->ProductRepository->updateAddress($id,$address);
            $result2 = $this->ShippingRepository->addTransferMoney($order_number,$Bank_name,$amountOfTransfer);
            $result3= $this->ShippingRepository->addOrdering($ordering_id,$order_number,$customer_id,$pay_status);
              if($result1){
                  return redirect('/userPurchase');
              }elseif($result2){
                  return redirect('/userPurchase');
              }elseif($result3){
                  return redirect('/userPurchase');
                }else{
                  echo "Can not Update".mysqli_error();
              }

          }elseif(Request::isMethod('get')){
            $transferMoney = $this->TransferMoneyRepository->getAllTransferMoney();
                $shipping = $this->ShippingRepository->getAllShipping();
             $data = array(
                  'transferMoney'=>$transferMoney,
                    'shipping'=>$shipping,
              );
              return view('userPurchase', $data);

          }

      }



      function userPurchase(){//จะแสดงข้อมูลหน้า Shipping_status
        $this->middleware('auth');
        if(Auth::user()==null){
      return redirect('login');
        }
      $shipping = $this->ShippingRepository->getAllShipping();
        $transferMoney = $this->TransferMoneyRepository->getAllTransferMoney();
      $data = array(
         'shipping'=>$shipping,
               'transferMoney'=>$transferMoney,
      );
      return view('userPurchase',$data);
      }


      function updateSlip(){//เปลี่ยน checking_status เป็น noConfirm ด้วย

        if(Request::isMethod('post')){
        $checking_status=Input::get('checking_status');

        $order_number= Input::get('order_number');
          $dateTimeOfTransfer = Input::get('dateTimeOfTransfer');
          if (Input::hasFile('picture_slip')) {
          $temp = Request::file('picture_slip')->getPathName();
          $imageName = Request::file('picture_slip')->getClientOriginalName();
          $path = base_path().'/public/images/';
          $newImageName = 'slip_'.str_random(5).$imageName;
          Request::file('picture_slip')->move($path, $newImageName);

          $result = $this->TransferMoneyRepository->updateTransferMoneySlip($newImageName,$dateTimeOfTransfer,$order_number,$checking_status);


            if($result){
                return redirect('/userPurchase');

          }else{
              echo "Can not Update";
          }


      }
      }
    }


    function addReserveProduct(){//หยิบลงตะกร้า สร้าง table ReserveProduct and Product_reserve
            $this->middleware('auth');
            if(Auth::user()==null){
              return redirect('login');
            }
      if(Request::isMethod('get')){
        $reserveProduct = $this->ReserveProductRepository->getAllReserveProduct();
        $Product_reserve = $this->Product_reserveRepository->getAllProduct_reserve();
         $data = array(
          'resserveProduct'=>$reserveProduct,
          'Product_reserve'=>  $Product_reserve
         );
        return view('shop.index',$data);
      }else if(Request::isMethod('post')){

            $customer_id = Input::get('customer_id');
            $reserve_status= Input::get('reserve_status');
            $product_id= Input::get('product_id');
            $product_number= Input::get('product_number');
          $result = $this->ReserveProductRepository->addReserveProduct($customer_id,$reserve_status);

            if($result){
              $reserve_id = DB::table('reserveProducts')
                ->where('customer_id','=',$customer_id)
                ->value('reserve_id');
              $result2= $this->Product_reserveRepository->addproduct_reserve($reserve_id,$product_id,$product_number);

                  if($result2){
                    return redirect('/webshop');
                  }
            }else{
                echo "Failed to add Reserve product";
            }
      }
    }


   


}
