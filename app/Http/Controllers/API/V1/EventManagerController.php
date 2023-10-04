<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminatte\Support\Facades\Hash;
use App\Models\EventManager;
use App\Http\Controllers\Controller;

class EventManagerController extends Controller
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

        $admin = EventManager::create([
            'first_name' =>$fields['first_name'],
            'last_name' =>$fields['last_name'],
            'birthday' =>$fields['birthday'],
            'gender' =>$fields['gender'],
            'email' =>$fields['email'],
            'phone' =>$fields['phone'],
            'password' =>$fields['password'],
            'Cpassword'=>$fields['Cpassword']
        ]);

        $token = $EventManager->createToken('apptoken')->plainTextToken;

        $response = [
            'EventManager' => $EventManager,
            'token' => $token,
        ];

        return response($response, 201);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
