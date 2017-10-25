<?php
use App\Mail\KryptoniteFound;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/sub', function () {
  $str =  DB::table('blogs')->select('answer')->get();
  $str2=  json_encode($str);
  $_str = explode('|||', $str2);
  foreach($_str as $text){
  echo $text.'</br>';
  echo '$str= '.$str2 ;  echo '$str = '.$_str ;
  }
  return view('test2');
});

Route::get('/', function () {
    return view('welcome');
});

use App\Animal;
Route::get('/delete99', function(){
    $result = Animal::all();
    foreach ($result as $val) {
      if($val->doType_id==3 || (!empty($val->join_Adoption) && $animal->join_Adoption->status=="Recipient"))
        echo $val->animal_id.'<br>';
    }
});

Auth::routes();
use App\Adoption;
Route::get('test99', function(){
    $animals = Animal::all();
    foreach($animals as $animal){
      if(empty($animal->join_Adoption->animal_id)){
        echo $animal->animal_id.'<br>';
      }
    }
});

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index')->middleware('auth')->middleware('checkadmin');




Route::get('/delete/{id}', 'AdminController@delete');
Route::get('/add','AnimalController@addAnimal')->middleware('auth')->middleware('checkadmin');
Route::post('/add','AnimalController@addAnimal')->middleware('auth')->middleware('checkadmin');
Route::get('/animal', 'AnimalController@animal')->middleware('auth')->middleware('checkadmin');
Route::post('/animal', 'AnimalController@animal')->middleware('auth')->middleware('checkadmin');
Route::get('/edit/{animal_id}','AnimalController@editAnimal')->middleware('checkadmin');
Route::post('/edit','AnimalController@editAnimal')->middleware('auth')->middleware('checkadmin');
Route::get('/edit', 'AnimalController@badEditRequest');
Route::get('/deleteAnimal/{id}', 'AnimalController@deleteAnimal')->middleware('checkadmin');

//เวลามึงเข้าแบบไม่ส่ง ไอดีเข้าไปมันจะเออเร่อ เพราะมันไม่มีเร้า
//เราต้องบอกว่าเวลาจะแก้ไข ให้ส่ง ไอดีไปด้วย ส่งมาแบบนี้ไม่ได้
//ก็สร้างเร้าดักเลย ถ้าส่งมา edit แบบไม่มีไอดีมาด้วย ให้เด้งกลับไปหน้าเดิมอ

//เวลามึง แก้ไข มึงมาพาทนี้ิ Route::get('/edit/{animal_id}','AnimalController@editAnimal');

///โดยที่ส่ง ไอดีมาทาง url
//ทีนี้ มันจะเปนงี้ localhost: 8000/edit/5
//มันจะไปทำ get method
Route::get('/all', 'AnimalController@animalAll')->name('all');
Route::get('/', 'AnimalController@animalAll');
Route::get('/ยัง', function () {
    // send an email to "batman@batcave.io"
    Mail::to('asihtus10@gmail.com')->send(new KryptoniteFound);

    return view('welcome');
});

Route::get('/dm', 'AnimalController@animalMoney');
Route::get('/db', 'AnimalController@animalBlood');
Route::get('/da', 'AnimalController@animalAdoption');
Route::get('/testmail','EmailController@sendEmail');



Route::get('/addNews','AnimalController@addNews')->middleware('auth')->middleware('checkadmin');
Route::post('/addNews','AnimalController@addNews')->middleware('auth')->middleware('checkadmin');
//Route::get('/new','AnimalController@NewsAniAll');

Route::get('/animalhasnews','AnimalController@animalhasnews');
Route::post('/animalhasnews','AnimalController@animalhasnews');


Route::get('/n','AnimalController@newsPage');
Route::post('/n','AnimalController@newsPage');




Route::get('/deleteNews/{news_id}', 'AnimalController@deleteNews')->middleware('auth')->middleware('checkadmin');
Route::post('/deleteNews/{news_id}', 'AnimalController@deleteNews')->middleware('auth')->middleware('checkadmin');



/*Route::get('/userProfile', 'HomeController@userDetail');
Route::post('/userProfile', 'HomeController@userDetail');
*/

Route::get('/addAdoption', 'AnimalController@addAdoption');
Route::post('/addAdoption', 'AnimalController@addAdoption');

Route::get('/checkAdoption', 'AnimalController@checkAdoption')->middleware('auth')->middleware('checkadmin');
Route::post('/checkAdoption', 'AnimalController@checkAdoption')->middleware('auth')->middleware('checkadmin');

Route::get('/checkAdoption2', 'AnimalController@checkAdoption2')->middleware('auth')->middleware('checkadmin');
Route::post('/checkAdoption2', 'AnimalController@checkAdoption2')->middleware('auth')->middleware('checkadmin');

Route::get('/deleteAdoptionTable/{id}', 'AnimalController@deleteAdoptionTable');
Route::post('/deleteAdoptionTable/{id}', 'AnimalController@deleteAdoptionTable');

Route::get('/closeAnimal/{animal_id}','AnimalController@closeAnimal');
Route::post('/closeAnimal/{animal_id}','AnimalController@closeAnimal');

Route::get('/userProfile','AdminController@userProfile2');
Route::post('/userProfile','AdminController@userProfile2');

Route::get('/adminProfile','AdminController@adminProfile')->middleware('auth')->middleware('checkadmin'); //เรียกใช้ middleware checkAdmin ทุกเร้าที่ต้องการสิทแอดมินเลยนะ
Route::post('/adminProfile','AdminController@adminProfile')->middleware('auth')->middleware('checkadmin');

Route::get('/addAdoptionAllPage', 'AnimalController@addAdoptionAllPage');
Route::post('/addAdoptionAllPage', 'AnimalController@addAdoptionAllPage');

Route::get('/donate', function () {
    return view('donate');
});



Route::get('/checkout', function () {
    return view('checkout');
});

Route::post('/checkout', function () {
    return view('checkout');
});


Route::get('/gridtest', function () {
    return view('gridtest');
});

Route::get('/newsUser','AnimalController@newsUser');
Route::post('/newsUser','AnimalController@newsUser');

Route::get('/newsAll','AnimalController@newsAll');
Route::post('/newsAll','AnimalController@newsAll');




Route::get('/news2','AnimalController@news2');
Route::post('/news2','AnimalController@news2');


Route::post('/charge', 'DonateController@charge');

Route::post('/webhook', 'DonateController@webhook');

Route::get('/add_activity','AnimalController@addActivity');
Route::post('/add_activity','AnimalController@addActivity');




Route::get('/allQuestions','SummernoteController@viewAllSummer');
Route::get('/write','SummernoteController@viewSummer')->middleware('auth');
Route::get('/summer','SummernoteController@viewSummer');
Route::post('/insert','SummernoteController@insert');
Route::get('/viewSummernote','SummernoteController@viewSummernote');
Route::get('/readSummer/{id}','SummernoteController@readSummerInfo');
Route::get('/deleteSummer/{id}','SummernoteController@deleteSummer')->middleware('auth');
Route::get('/editSummer/{id}','SummernoteController@editSummer')->middleware('auth')->middleware('checkadmin');
Route::get('/editSummerByMember/{id}','SummernoteController@editSummerByMember');
Route::post('/updateSummer','SummernoteController@updateSummer')->middleware('auth');
Route::post('/updateSummer2','SummernoteController@updateSummer2');
Route::get('/adminReadSummer/{id}','SummernoteController@adminReadSummerInfo')->middleware('auth')->middleware('checkadmin');

Route::post('/updateSummerAns','SummernoteController@updateSummerAns');
Route::get('/testP', function () {
    return view('testP');
});



Route::get('/ADEFhome', function () {
    return view('ADEFhome');
});

Route::get('/ADEFfoundation', function () {
    return view('ADEFfoundation');
});

Route::get('/ADEFdonation', function () {
    return view('ADEFdonation');
});

Route::get('/ADEFnews', function () {
    return view('ADEFnews');
});

Route::get('/ADEFproduct', function () {
    return view('ADEFproduct');
});


Route::get('/listOfDonor','DonateController@listOfDonor');




Route::get('/addProductPage','ProductController@addProductPageVar')->middleware('auth')->middleware('checkadmin');
Route::post('/addProductPage','ProductController@addProductPageVar')->middleware('auth')->middleware('checkadmin');

Route::get('/add_product','ProductController@addProduct')->middleware('auth')->middleware('checkadmin');
Route::post('/add_product','ProductController@addProduct')->middleware('auth')->middleware('checkadmin');

Route::get('/edit_Product/{product_id}','ProductController@editProduct')->middleware('checkadmin');

Route::get('/edit_Product','ProductController@editProductPageVar')->middleware('auth')->middleware('checkadmin');
Route::post('/edit_Product','ProductController@editProduct')->middleware('auth')->middleware('checkadmin');


Route::get('/listProduct','ProductController@listOfProduct');
Route::post('/listProduct','ProductController@listOfProduct');

Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct')->middleware('checkadmin');
