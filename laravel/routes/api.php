<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/customer', function (Request $request) {
  
    if(0==0){
        $json='{
            "success": true,
            "msg": "Customer Inserted Successfully.",
            "data": {
                "customer": {
                    "id": 61670,
                    "northgateId": "NG00061670",
                    "profilePictureUrl": "http://pdp.local/profilePicture/1073530299.gif",
                    "firstName": "Laxman",
                    "middleName": "K",
                    "secondLastName": "",
                    "lastName": "Parnar"
                }
            }
        }';
      }else{
        $json='{
            "success": false,
            "msg": "Invalid data"
        }';
      }
     
    return response($json);
});

Route::put('/customer', function (Request $request) {
  
   
    if(0==0){
        $json='{
            "success": true,
            "msg": "Customer Updated Successfully",
            "data": {
                "customer": {
                    "id": 61665,
                    "northgateId": "NG00061659",
                    "profilePictureUrl": "http://pdp.local/profilePicture/1400749335.gif",
                    "firstName": "Piyussh",
                    "middleName": "V",
                    "secondLastName": "",
                    "lastName": "sutariya"
                }
            }
        }';
      }else{
        $json='{
            "success": false,
            "msg": "No Record Found."
        }';
      }
     
    return response($json);
});



