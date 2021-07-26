<?php

namespace App\Http\Controllers;

use App\Models\list_passwords;
use Illuminate\Http\Request;

class ListPasswordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passwords = list_passwords::all();

        return view('allPasswords',compact('passwords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPassword');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);


        list_passwords::create($request->all());
   
        return redirect()->route('passwords.index')
                        ->with('success','Password added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\list_passwords  $list_passwords
     * @return \Illuminate\Http\Response
     */
    public function show(list_passwords $list_passwords)
    {
   //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\list_passwords  $list_passwords
     * @return \Illuminate\Http\Response
     */
    public function edit(list_passwords $password)
    {
        return view('editPassword',compact('password'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\list_passwords  $list_passwords
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, list_passwords $password)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $password->update($request->all());
  
        return redirect()->route('passwords.index')
                        ->with('success','Password updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\list_passwords  $list_passwords
     * @return \Illuminate\Http\Response
     */
    public function destroy(list_passwords $password)
    {
        $password->delete();
  
        return redirect()->route('passwords.index')
                        ->with('success','password deleted successfully');
    }
}
