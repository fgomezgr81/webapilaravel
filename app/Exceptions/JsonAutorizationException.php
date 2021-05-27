<?php

namespace App\Exceptions;

use Exception;

class JsonAutorizationException extends Exception
{
    public function report(){
        return false;
    }

    public function render($request){
        return  response()->json([
            'message'=>'No esta autorizado'
        ],403);
    }
}
