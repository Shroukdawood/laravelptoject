<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('users.user',['name'=>"shrouk","phone"=>"015155"]);==
        return view('users.user')->with('name','phone');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
          return view('users.create');
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
        if ($id==1) {
            return view('users.showuser',['name' =>'shrouk']);
        }
        else{
            return view("users.showuser",['name'=>'judi']);
        }
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
