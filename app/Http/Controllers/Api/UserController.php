<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class UserController extends Controller
{
     /**
     * @OA\Get(
     *     path="/users",
     *     tags={"user"},
     *     summary="Liste todos os Usu'rios",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="index",
     *    
     *     @OA\Response(
     *         response=200,
     *         description="successful operation", 
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ) 
     * )
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        dd($request->all());
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
    }
}
