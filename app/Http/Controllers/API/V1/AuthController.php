<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminatte\Support\Facades\Hash;
use App\Models\Admin;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function register(Request $request){

        $fields = $request->validate([
            'first_name' =>'required|string',
            'last_name' => 'required|string',
            'birthday' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'Cpassword'=> 'required'
        ]);

        $admin = Admin::create([
            'first_name' =>$fields['first_name'],
            'last_name' =>$fields['last_name'],
            'birthday' =>$fields['birthday'],
            'gender' =>$fields['gender'],
            'email' =>$fields['email'],
            'phone' =>$fields['phone'],
            'password' =>$fields['password'],
            'Cpassword'=>$fields['Cpassword']
        ]);

        $token = $admin->createToken('apptoken')->plainTextToken;

        $response = [
            'admin' => $admin,
            'token' => $token,
        ];

        return response($response, 201);
    }
}
//how to let this api response a json file?