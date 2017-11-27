<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param id = null
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $listSkill = Skill::get();
        if(!$id){
            $lists = Competence::get();

            return view('competence.index', [
                'ListSC' => $lists,
                'listSkill' => $listSkill
            ]);
        }

        $lists = Competence::get()->where('id_skill', '=', $id);

        return view('competence.index', [
            'ListSC' => $lists,
            'listSkill' => $listSkill
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

        // Ajouter l'item
        $Competence = new Competence();
        $Competence->name = $request->post('name');
        $Competence->xp = $request->post('xp');
        $Competence->id_skill = $request->post('id_skill');
        $Competence->save();

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
        DB::table('competences')
            ->where('id', $id)
            ->update(['name' => $request->post('name')]);

        DB::table('competences')
            ->where('id', $id)
            ->update(['xp' => $request->post('xp')]);

        DB::table('competences')
            ->where('id', $id)
            ->update(['id_skill' => $request->post('table')]);

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
