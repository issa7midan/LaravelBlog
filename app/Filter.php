<?php
namespace App;
use Response;

class filter {
    public static function customizedResponse($reponse, $responseCode)
    {
        // $newResp = Response::json(["responseCode"=>$responseCode],$reponse);
        return response()->json([
            'responseCode' => $responseCode,
            'data' =>  $reponse
                ]
            ); 
    }   
}