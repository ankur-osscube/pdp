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
                        'dob'=>"2018-05-01",
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
                        'dob'=>"2018-05-01",
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
                        'dob'=>"2018-05-01",
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
            'dob'=>"2018-05-01",
            'gender'=>"male",
            'emailList'=>[["email"=>"pulkitarun@gmail.com","isPrimary"=>1],["email"=>"pulkitarun@gmail.com","isPrimary"=>0]],
            'phoneList'=>[[ "type"=>"home","number"=>"8802698368","dialCode"=>"2123","isPrimary"=>1 ],[ "type"=>"home","number"=>"8802698368","dialCode"=>"","isPrimary"=>0]],
            'addressList'=>[["title"=>87987, "street"=>"amaze", "country"=>"india", "state"=>"", "city"=>"", "zipCode"=>"", "yearAtGiveAdderss"=>"", "monthAtGiveAdderss"=>"","isPrimary"=>1, "source"=>""]]
         ];
       
    }
    
    $responseArray=[
        "data"=>$data,
        "status"=>1
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
             "status"=>1
            ];

        return response()->json($data);
});



 
Route::post('/save-assets', function (Request $request) {
    
    
    
    $responseArray=[
        "data"=>[
                "licenceFrontImageUrl"=>"https://image.ibb.co/gF3SQL/Divya-USA-Back.jpg",
                "licenceBackImageUrl"=>"https://wabr.inliteresearch.com/SampleImages/drvlic.ca.jpg"
            ],
        "status"=>1
       ];

   return response()->json($responseArray);
 
});
Route::post('/licence', function (Request $request) {
    
    
    
    $responseArray=[
        "data"=>[
                "licenceFrontImageUrl"=>"https://via.placeholder.com/300/09f.png",
                "licenceFrontImageUrl"=>"https://via.placeholder.com/300/09f.png"
            ],
        "status"=>1
       ];

   return response()->json($responseArray);
 
});



Route::post('/search-customer', function (Request $request) {

    $data = [
        'northgateId' => 789456123,
        'firstName' => "firstName",
        'middleName' => "middleName",
        'lastName' => "lastName",
        'secondLastName' => "secondLastName",
        'dob' => "2018-05-01",
        'gender' => "male",
        'emailList' => [["email" => "pulkitarun@gmail.com", "isPrimary" => 1], ["email" => "pulkitarun@gmail.com", "isPrimary" => 0]],
        'phoneList' => [["type" => "home", "number" => "8802698368", "dialCode" => "2123", "isPrimary" => 1], ["type" => "home", "number" => "8802698368", "dialCode" => "", "isPrimary" => 0]],
        'addressList' => [["title" => 87987, "street" => "amaze", "country" => "india", "state" => "", "city" => "", "zipCode" => "", "yearAtGiveAdderss" => "", "monthAtGiveAdderss" => "", "isPrimary" => 1, "source" => ""]]
    ];

    $responseArray = [
        "data" => $data,
        "status" => 1
    ];

    return response()-〉json($responseArray);
});


Route::post('/group-a-data', function (Request $request) {

    if((mt_rand(1,10)%2)==0){
        $responseArray = [
            "msg"=>"data inserted",
            "status" => 1
        ];
      }else{
        $responseArray = [
            "msg"=>"caim validation error string",
            "status" => 0
        ];
      }
     
    return response()->json($responseArray);
});



Route::post('/realtime', function (Request $request) {

    if((mt_rand(1,10)%2)==0){
        $responseArray = [
            "msg"=>"data inserted",
            "status" => 1
        ];
      }else{
        $responseArray = [
            "msg"=>"validation error",
            "status" => 0
        ];
      }
     
    return response()->json($responseArray);
});



Route::post('/issuer-register', function (Request $request) {

    if((mt_rand(1,10)%2)==0){
        $responseArray = [
            "data"=>$request->toArray(),
            "msg"=>"data inserted",
            "status" => 1
        ];
      }else{
        $responseArray = [
            "msg"=>"validation error",
            "status" => 0
        ];
      }
     
    return response()->json($responseArray);
});