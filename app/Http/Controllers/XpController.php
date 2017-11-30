<?php

namespace App\Http\Controllers;

use App\XpTb;
use App\Xp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class XpController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param $id = null
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $listsXp = XpTb::get();
        if(!$id){
            $id = 1;
            $lists = Xp::get();

            return view('xp.index', [
                'ListXp' => $lists,
                'ListXpTable' => $listsXp
            ]);
        }

        $lists = Xp::get()->where('id_XpTable', '=', $id);

        return view('xp.index', [
            'ListXp' => $lists,
            'ListXpTable' => $listsXp
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
        // valider les données
        $validation = $request->validate([
            'lvl' => 'required',
            'xps' => 'required',
            'dif' => 'required',
            'name' => 'required'
        ]);

        // Ajout dans la base de donnée
        $Xp = new Xp();
        $Xp->lvl = $request->post('lvl');
        $Xp->xp = $request->post('xps');
        $Xp->dif = $request->post('dif');
        $Xp->id_XpTable = $request->post('name');
        $Xp->save();

        // Retourner en arriere
        return redirect()->back();
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
        //Modifier les données
        DB::table('xps')
            ->where('id', $id)
            ->update(['lvl' => $request->post('lvl')]);

        DB::table('xps')
            ->where('id', $id)
            ->update(['xp' => $request->post('xps')]);

        DB::table('xps')
            ->where('id', $id)
            ->update(['dif' => $request->post('dif')]);

        DB::table('xps')
            ->where('id', $id)
            ->update(['id_XpTable' => $request->post('name')]);

        return redirect()->back();
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
