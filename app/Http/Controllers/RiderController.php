<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riders = Rider::all();



        return view('riders.index',compact('riders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riders.create');
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

            'cislo' => ['required','integer','digits_between:1,999'],

            'meno' => ['required','string'],

            'priezvisko' => ['required','string'],

            'team' => ['required','string'],

            'motorka' => ['required','string'],

        ]);



        Rider::create($request->all());



        return redirect()->route('riders.index')

            ->with('success','Rider created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function show(Rider $rider)
    {
        return view('riders.show',compact('rider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function edit(Rider $rider)
    {
        return view('riders.edit',compact('rider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rider $rider)
    {
        $request->validate([

            'cislo' => ['required','integer', 'digits_between:1,999'],

            'meno' => ['required','string'],

            'priezvisko' => ['required','string'],

            'team' => 'string',

            'motorka' => ['required','string'],


        ]);



        $rider->update($request->all());


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rider $rider)
    {
        $rider->delete();



        return redirect()->route('riders.index')

            ->with('success','Rider deleted successfully');
    }
}
