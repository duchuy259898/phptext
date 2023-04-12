<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Users01;
class Users01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('users01.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('users01.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        //
    }
}
