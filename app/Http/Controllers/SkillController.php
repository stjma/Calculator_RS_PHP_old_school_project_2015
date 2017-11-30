<?php

namespace App\Http\Controllers;

use App\XpTb;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listsXp = XpTb::get();

        $lists = Skill::get();

        return view('Skill.index', [
            'ListSkill' => $lists,
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
            'name' => 'required',
        ]);

        // Ajout dans la bade de donnée
        $Skill = new Skill();
        $Skill->nameSkill = $request->post('name');
        $Skill->id_XpTable = $request->post('table');
        $Skill->save();

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
        DB::table('skills')
            ->where('id', $id)
            ->update(['id_XpTable' => $request->post('table')]);

        DB::table('skills')
            ->where('id', $id)
            ->update(['nameSkill' => $request->post('name')]);

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
