<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterController extends Controller
{
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
        return view('parameter');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request, $id)
    // {
    //     dd($id);
    //     $name = $request->input('name');
    //     $password = $request->input('password');

    //     if ($name === 'afaq' && $password === '1234') {
           
    //         return 'Welcome';
    //     } else {
    //         return 'Sorry';
    //     }
    // }

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
    public function edit(Request $request, $id, $name, $password)

    {
     

        dd($id, $name, $password);
        $name = $request->input('name');
        $password = $request->input('password');

        if ($name === 'afaq' && $password === '1234') {
           
            return 'Welcome';
        } else {
            return 'Sorry';
        }
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
