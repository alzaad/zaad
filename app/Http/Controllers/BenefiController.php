<?php

namespace App\Http\Controllers;

use App\Models\Benefi;
use Illuminate\Http\Request;

class BenefiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Directory.blade

        return view('benefis.index' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('benefis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['first_name' => 'required']
        );
        //model name
        Benefi::create($request->all());

        return redirect()->route('benefis.index')
            ->with('success','Data entered successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Benefi  $benefi
     * @return \Illuminate\Http\Response
     */
    public function show(Benefi $benefi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Benefi  $benefi
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefi $benefi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Benefi  $benefi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benefi $benefi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Benefi  $benefi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefi $benefi)
    {
        //
    }
}
