<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('User/ListUser', [
            'users' => User::get(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return Inertia::render('User/CreateUser' , [
        'users' => User::get(),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            
            'email' => $request->email,
            'age' => $request->age,
            'no_reg' => $request->no_reg,
            'no_rawat' => $request->no_rawat,
            'unit' => $request->unit,
            'dr' => $request->dr,
        ]);
        return redirect()->route( 'users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return Inertia::render('User/EditUser', [
            'user' => $user,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'gender' => $request->gender,
            
            'email' => $request->email,
            'age' => $request->age,
            'no_reg' => $request->no_reg,
            'no_rawat' => $request->no_rawat,
            'unit' => $request->unit,
            'dr' => $request->dr,
        ]);
        return redirect()->route( 'users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route( 'users.index');
    }
}
