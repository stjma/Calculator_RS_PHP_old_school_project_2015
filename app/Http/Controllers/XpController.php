<?php

namespace App\Http\Controllers;

use App\Xp;
use Illuminate\Http\Request;

class XpController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param $id = null
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if(!$id){
            $lists = Xp::get();

            return view('xp.index', [
                'ListXp' => $lists
            ]);
        }

        $lists = Xp::get()->where('id_XpTable' . '=' . $id);

        return view('xp.index', [
            'ListXp' => $lists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
