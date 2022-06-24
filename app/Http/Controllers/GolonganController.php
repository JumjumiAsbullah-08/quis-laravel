<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $golongan = Golongan::All();
        return view('golongan.index', compact(['golongan']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->except(['_token']));
        Golongan::create($request->except(['_token']));
        return redirect('/golongan');
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
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       //$golongan = Golongan::where('id', '=', $id)->first();
       $golongan = Golongan::find($id);
       return view('golongan.edit', compact(['golongan']));
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
        $golongan = Golongan::find($id);
        $golongan->update($request->except(['_token']));
        return redirect(('/golongan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $golongan = Golongan::find($id);
        $golongan->delete();
        return redirect(('/golongan'));
    }
}
