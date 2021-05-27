<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\User\IndexRequest;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:sanctum');
    }

    public function index(IndexRequest $request){
       // $user = User::all();

        // return  response()->json([
        //     'users'=>$user
        // ]);

        return  UserResource::collection(User::all());
    }
}
