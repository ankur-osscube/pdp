<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customer/{id?}', function (Request $request) {
    
    if(!$request->id){
        $data=  [
                    [
                        'northgateId'=>987654321,
                        'firstName'=>"firstName",
                        'middleName'=>"middleName",
                        'lastName'=>"lastName",
                        'secondLastName'=>"secondLastName",
                        'birthday'=>"2018-05-01",
                        'gender'=>"male",
                        'emailList'=>[["email"=>"pulkitarun@gmail.com","isPrimary"=>1],["email"=>"pulkitarun@gmail.com","isPrimary"=>0]],
                        'phoneList'=>[[ "type"=>"home","number"=>"8802698368","dialCode"=>"","source"=>"" ,"isPrimary"=>"1"]],
                         'addressList'=>[["title"=>"", "street"=>"", "country"=>"", "state"=>"", "city"=>"", "zipCode"=>"", "source"=>"", "yearAtGiveAdderss"=>"", "monthAtGiveAdderss"=>"","isPrimary"=>"1"]]
                    ],
                    [
                        'northgateId'=>987654322,
                        'firstName'=>"firstName",
                        'middleName'=>"middleName",
                        'lastName'=>"lastName",
                        'secondLastName'=>"secondLastName",
                        'birthday'=>"2018-05-01",
                        'gender'=>"male",
                        'emailList'=>[["email"=>"pulkitarun@gmail.com","isPrimary"=>1],["email"=>"pulkitarun@gmail.com","isPrimary"=>0]],
                        'phoneList'=>[[ "type"=>"home","number"=>"8802698368","dialCode"=>"","source"=>"" ,"isPrimary"=>"1"]],
                        'addressList'=>[["title"=>"", "street"=>"", "country"=>"", "state"=>"", "city"=>"", "zipCode"=>"", "source"=>"", "yearAtGiveAdderss"=>"", "monthAtGiveAdderss"=>"","isPrimary"=>"1"]]
                    ],
                    [
                        'northgateId'=>987654323,
                        'firstName'=>"firstName",
                        'middleName'=>"middleName",
                        'lastName'=>"lastName",
                        'secondLastName'=>"secondLastName",
                        'birthday'=>"2018-05-01",
                        'gender'=>"male",
                        'emailList'=>[["email"=>"pulkitarun@gmail.com","isPrimary"=>1],["email"=>"pulkitarun@gmail.com","isPrimary"=>0]],
                        'phoneList'=>[[ "type"=>"home","number"=>"8802698368","dialCode"=>"","source"=>"" ,"isPrimary"=>"1"]],
                        'addressList'=>[["title"=>"", "street"=>"", "country"=>"", "state"=>"", "city"=>"", "zipCode"=>"", "source"=>"", "yearAtGiveAdderss"=>"", "monthAtGiveAdderss"=>"","isPrimary"=>"1"]]
                    ]
                ];
       
    }else{
        $data= [
            'northgateId'=>789456123,
            'firstName'=>"firstName",
            'middleName'=>"middleName",
            'lastName'=>"lastName",
            'secondLastName'=>"secondLastName",
            'birthday'=>"2018-05-01",
            'gender'=>"male",
            'emailList'=>[["email"=>"pulkitarun@gmail.com","isPrimary"=>1],["email"=>"pulkitarun@gmail.com","isPrimary"=>0]],
            'phoneList'=>[[ "type"=>"home","number"=>"8802698368","dialCode"=>"","source"=>"" ,"isPrimary"=>"1"]],
            'addressList'=>[["title"=>"", "street"=>"", "country"=>"", "state"=>"", "city"=>"", "zipCode"=>"", "source"=>"", "yearAtGiveAdderss"=>"", "monthAtGiveAdderss"=>"","isPrimary"=>"1"]]
         ];
       
    }
    
    $responseArray=[
        "data"=>$data,
        "status"=>true
       ];

   return response()->json($responseArray);
 
});

Route::post('/customer-submit', function (Request $request) {
     $data=[
             "data"=>[
                    'northgateId'=>789456123,
                    'firstName'=>"firstName",
                    'middleName'=>"middleName",
                    'lastName'=>"lastName",
                    'secondLastName'=>"secondLastName",
                    'birthday'=>"2018-05-01",
                    'gender'=>"male",
                    'emailList'=>[["email"=>"pulkitarun@gmail.com","isPrimary"=>1],["email"=>"pulkitarun@gmail.com","isPrimary"=>0]],
                    'phoneList'=>[[ "type"=>"home","number"=>"8802698368","dialCode"=>"","source"=>"" ,"isPrimary"=>"1"]],
                    'addressList'=>[["title"=>"", "street"=>"", "country"=>"", "state"=>"", "city"=>"", "zipCode"=>"", "source"=>"", "yearAtGiveAdderss"=>"", "monthAtGiveAdderss"=>"","isPrimary"=>"1"]],
                    'licenceFrontImageUrl'=>"https://s.driving-tests.org/img/license/pennsylvania-drivers-license.jpg",
                    'licenceBackImageUrl'=>"https://s.driving-tests.org/img/license/pennsylvania-drivers-license.jpg"
             ],
             "status"=>true
            ];

        return response()->json($data);
});
