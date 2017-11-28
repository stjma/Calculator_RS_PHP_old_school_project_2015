<?php

namespace App\Http\Controllers;

use App\Xp;
use App\Skill;
use App\Competence;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function index($id, $skill)
    {

        $listSkill = Skill::get();

        $lists = Competence::get()->where('id_skill', '=', $id);

        return view('calculator.index', [
            'ListSC' => $lists,
            'listSkill' => $listSkill,
            'listId' => $skill,
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
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //, 'and' , 'lvl', '=', $request->post('lvl')
        //'id_XpTable', '=', $id

        $xpLvl = Xp::get()->where('lvl', '=', $request->post('lvl'))->where('id_XpTable', '=', $id);

        $xpVoulu = 0;
        foreach($xpLvl as $xp){
            $xpVoulu = $xp->xp;
        }

        //$XpVoulu = $xpLvl->xp;

        //$dif = $request->post('xp') - $XpVoulu;

        //Xps
        //erreurForm


        return Redirect()->back()->withInput()->with("calculateur", $xpVoulu);

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
