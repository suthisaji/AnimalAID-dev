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
use App\Repositories\Ordering_productRepositoryInterface;
use App\Repositories\OrderingRepositoryInterface;
use App\Repositories\UserUpdateSlipRepositoryInterface;
use App\Ordering;
use App\Product;
use App\UserUpdateSlip;
use Cart;
use DB;
use DateTime;
class ProductController extends Controller
{  protected $CategoryRepository;
   protected $TransferMoneyRepository;
    protected $ShippingRepository;
      protected $Ordering_productRepository;
        protected $OrderingRepository;
        protected $UserUpdateSlipRepository;
  function __construct(CategoryRepositoryInterface $CategoryRepository,ProductRepositoryInterface $ProductRepository,TransferMoneyRepositoryInterface $TransferMoneyRepository,ShippingRepositoryInterface $ShippingRepository,ReserveProductRepositoryInterface $ReserveProductRepository,Product_reserveRepositoryInterface $Product_reserveRepository,Ordering_productRepositoryInterface $Ordering_productRepository ,OrderingRepositoryInterface $OrderingRepository, UserUpdateSlipRepositoryInterface   $UserUpdateSlipRepository){
      $this->CategoryRepository = $CategoryRepository;
      $this->ProductRepository = $ProductRepository;
      $this->TransferMoneyRepository = $TransferMoneyRepository;
      $this->ShippingRepository = $ShippingRepository;
      $this->ReserveProductRepository = $ReserveProductRepository;
      $this->Product_reserveRepository = $Product_reserveRepository;
      $this->Ordering_productRepository=$Ordering_productRepository;
      $this->OrderingRepository=$OrderingRepository;
      $this->UserUpdateSlipRepository=$UserUpdateSlipRepository;
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
       $number_productBe=Input::get('number_product');
      $category_id= Input::get('category_id');
      $product_price= Input::get('product_price');
      $add_num= Input::get('add_num');
      $number_product =$number_productBe+$add_num;
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
        return redirect('/listProductAdminView');
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
      $result1 = $this->TransferMoneyRepository->updateTransferMoneyConfirm($order_number,$checking_status);
      if($result1){
        $ordering_id = Input::get('ordering_id');
        $buyer_id= Input::get('buyer_id');
        $address = Input::get('address');
        $tel = Input::get('tel');
        $email = Input::get('email');
        $checking_status= Input::get('checking_status');
             $result2 = $this->ShippingRepository->addShipping($ordering_id,$buyer_id,$address,$tel,$email);//$animal_id
                 if($result2){
                       $pay_status= Input::get('pay_status');
                          $result3= $this->OrderingRepository->updateOrderingPaid($ordering_id,$pay_status);
                          if($result3){
                          return redirect('/transferDocument');
                            }else{
                            echo "Failed to add adopt";
                           }
              }else{
                echo "Failed to add adopt";
              }
         }else{
         echo "Can not Update";
         }
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
              echo "cannot update".die('query failed'. mysqli_error());
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
  $ordering_product=  $this->Ordering_productRepository->getAllOrdering_product();

  $shipping = $this->ShippingRepository->getAllShipping();
  $data = array(
     'shipping'=>$shipping,
     'ordering_product'=>$ordering_product,
     'ordering' => Ordering::all(),
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
    /*function updateAddressToUser($id=0){
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
*/
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
    function updateSlip2(){//เปลี่ยน checking_status เป็น noConfirm ด้วย
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
              return redirect('/webshop/checkout');
        }else{
            echo "Can not Update";
        }
    }
    }
  }
    /*function addReserveProduct(){//หยิบลงตะกร้า สร้าง table ReserveProduct and Product_reserve
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
    }*/
    function createOrdering($id=0){
          if(Request::isMethod('post')){
            var_dump(Input::all());
            $customer_id = Input::get('id');/*addOrdering*/
            $ordering_id=Input::get('ordering_id');
            $pay_status=Input::get('pay_status');
            $home=Input::get('home');
            $district=Input::get('district');
            $amphoe=Input::get('amphoe');
            $province=Input::get('province');
            $zipcode=Input::get('zipcode');
          //  $number_product = Input::get('minus_product');
            //$product_id=Input::get('product_id');/*addOrdering_product*/
            foreach (Cart::content() as $item){

             $product = $this->ProductRepository->getAllProduct();
                  if( $item->qty == 1 ? 'selected' : '' ) {
                    $product_number=$item->qty;
                     foreach($product as $p){
                       if($item->id==$p->product_id){
                         $minus_product=($p->number_product)-($item->qty);
                         $product_id=$item->id;
                         $amount=$item->subtotal;
                         $number_product  = $minus_product;

                    }
                  }
                }elseif( $item->qty == 2 ? 'selected' : '' )  {
                    $product_number=$item->qty;
                    foreach($product as $p){
                      if($item->id==$p->product_id){
                         $minus_product=($p->number_product)-($item->qty);
                            $product_id=$item->id;
                            $amount=$item->subtotal;
                              $number_product  = $minus_product;
                      }
                   }

               }elseif( $item->qty == 3 ? 'selected' : '' ) {
                      $product_number=$item->qty;
                    foreach($product as $p){
                      if($item->id==$p->product_id){
                      $minus_product=($p->number_product)-($item->qty);
                         $product_id=$item->id;
                         $amount=$item->subtotal;
                           $number_product  = $minus_product;
                   }
                 }

               }elseif( $item->qty == 4 ? 'selected' : '' )  {
              $product_number=$item->qty;
                    foreach($product as $p){
                      if($item->id==$p->product_id){
                        $minus_product=($p->number_product)-($item->qty);
                           $product_id=$item->id;
                           $amount=$item->subtotal;
                             $number_product  = $minus_product;
                  }
                }
                } elseif( $item->qty == 5 ? 'selected' : '' )   {
                    $product_number=$item->qty;
                  foreach($product as $p){
                      if($item->id==$p->product_id){

                        $minus_product=($p->number_product)-($item->qty);
                           $product_id=$item->id;
                           $amount=$item->subtotal;
                          $number_product  = $minus_product;
                   }
                 }

                  }
                    $result3 = $this->ShippingRepository->addOrdering_product($ordering_id,$product_id,$product_number,$amount);
                     $result4= $this->ProductRepository->updateNumber_product($product_id,$number_product);

             }


          //  $product_number=Input::get('product_number');
          //  $amount = Input::get('amount');
            $Bank_name=Input::get('Bank_name');/*addTransferMoney*/
            $order_number= Input::get('order_number');/*ไป addOrderingด้วย*/
            $amountOfTransfer=Input::get('amountOfTransfer');

            $result1 = $this->ShippingRepository->addTransferMoney2($order_number,$Bank_name,$amountOfTransfer);
            $result2= $this->ShippingRepository->addOrdering2($ordering_id,$order_number,$customer_id,$pay_status,$home,$district,$amphoe,$province,$zipcode);


             $result5=Cart::destroy();
            if($result1){
                  return redirect('/webshop/checkout');
              }elseif($result2){
                  return redirect('/webshop/checkout');
              }elseif($result3){
                  return redirect('/webshop/checkout');
              }elseif($result4){
                  return redirect('/webshop/checkout');
              }elseif($result5){
                    return redirect('/webshop/checkout');
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
              return view('shop.checkout', $data);
          }
      }



      function checkoutDocument(){//จะแสดงข้อมูลหน้า Shipping_status
        $this->middleware('auth');
        if(Auth::user()==null){
      return redirect('login');
        }
      $shipping = $this->ShippingRepository->getAllShipping();
      $transferMoney = $this->TransferMoneyRepository->getAllTransferMoney();
      $ordering_product=  $this->Ordering_productRepository->getAllOrdering_product();
      $data = array(
        'shipping'=>$shipping,
        'transferMoney'=>$transferMoney,
        'ordering_product'=>$ordering_product,
        'ordering' => Ordering::all(),
        'product'=>Product::all(),
      );
      return view('shop.checkout',$data);
      }
      function updateSlip3(){

      
        if(Request::isMethod('get')){
          $category = $this->CategoryRepository->getAllCategory();
           $data = array(
            'category'=>$category
           );
          return view('userupdateslip',$data);
        }else if(Request::isMethod('post')){
              $name = Input::get('name');
              //$productPicture = Input::get('ani_picture');
              //------upload image and store------
              $temp = Request::file('picture_slip')->getPathName();
              $imageName = Request::file('picture_slip')->getClientOriginalName();
              $path = base_path().'/public/images/';
              $newImageName = 'picture_slip_'.str_random(5).$imageName;
              Request::file('picture_slip')->move($path, $newImageName);
              //----------------------------------
              $dateTimeTransfer= Input::get('dateTimeTransfer');
              $status_check_yet=Input::get('status_check_yet');
              $amount=Input::get('amount');
    //echo $product_name.' '.$newImageName.' '.$product_detail.' '.$product_price.' '.$number_product.' '.$category_id;
            $result = $this->UserUpdateSlipRepository->addUserUpdateSlip($name,$dateTimeTransfer,$newImageName,$status_check_yet,$amount);
              if($result){
                  return redirect('/userupdateslip');
              }else{
                  echo "Failed to update Slip";
              }
        }
      }
      function adminCheckSlipDocument(){
        $this->middleware('auth');
        if(Auth::user()==null){
      return redirect('login');
        }
      $userUpdateSlip = $this->UserUpdateSlipRepository->getAllUserUpdateSlip();
      $data = array(
         'userUpdateSlip'=>$userUpdateSlip,
      );
      return view('adminCheckSlip',$data);
      }
      public function productsInfo($id){
        $data=DB::table('products')->where('product_id',$id)->get();
        return view('productDetail',compact('data'));
      }





      function checkRigthSlip(){//สร้างตาราง shipping และเปลี่ยน checking_status เป็น confirm ด้วย
        if(Request::isMethod('post')){
          $id = Input::get('id');
          $status_check_yet= Input::get('status_check_yet');
          $admin_id= Input::get('admin_id');
          $status_slip= Input::get('status_slip');
          $result1 = $this->UserUpdateSlipRepository->checkRigthSlip($id,$status_check_yet,$admin_id,$status_slip);
          if($result1){
            return redirect('/adminCheckSlip');
          }else{
            echo "Failed to Update Rigth";
          }
        }else{
          echo "Can not Update";
        }
      }

      function checkCancelSlip(){//สร้างตาราง shipping และเปลี่ยน checking_status เป็น confirm ด้วย
        if(Request::isMethod('post')){
          $id = Input::get('id');
          $status_check_yet= Input::get('status_check_yet');
          $admin_id= Input::get('admin_id');
          $status_slip= Input::get('status_slip');
          $result1 = $this->UserUpdateSlipRepository->checkCancelSlip($id,$status_check_yet,$admin_id,$status_slip);
          if($result1){
            return redirect('/adminCheckSlip');
          }else{
            echo "Failed to Update Rigth";
          }
        }else{
          echo "Can not Update";
        }
      }

      function checkWrongSlip(){//สร้างตาราง shipping และเปลี่ยน checking_status เป็น confirm ด้วย
        if(Request::isMethod('post')){
          $id = Input::get('id');
          $status_check_yet= Input::get('status_check_yet');
          $admin_id= Input::get('admin_id');
          $status_slip= Input::get('status_slip');
          $result1 = $this->UserUpdateSlipRepository->checkWrongSlip($id,$status_check_yet,$admin_id,$status_slip);
          if($result1){
            return redirect('/adminCheckSlip');
          }else{
            echo "Failed to Update Rigth";
          }
        }else{
          echo "Can not Update";
        }
      }





    }
