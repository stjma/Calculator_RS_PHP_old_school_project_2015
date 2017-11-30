<?php

namespace App\Http\Controllers;

use App\Xp;
use App\Skill;
use App\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @param $skill
     * @return \Illuminate\Http\Response
     */
    public function index($id, $skill)
    {
        //Tous les données de la table Compétence
        $listSkill = Skill::get();

        //Tous les compétence qui a un certain id
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

        // valider les données
        $validation = $request->validate([
            'lvl' => 'required|numeric',
            'xp' => 'required|numeric',
        ]);

        $lvl = $request->post('lvl');
        $xp = $request->post('xp');


        //COnvertir le lvl en xp
        $xpLvl = Xp::get()->where('lvl', '=', $lvl)->where('id_XpTable', '=', $id);

        $xpVoulu = 0;
        foreach($xpLvl as $xp1){
            $xpVoulu = $xp1->xp;
        }

        $maxXp = DB::table('xps')->max('xp');

        //Valider si le xp n'est pas trop grand
        if($xp >= $maxXp){
            return Redirect()->back()->withInput()->with("erreurForm", "lvl Trop grand");
        }

        //L'expérience voulu doit être plus grand que le xp (Niveau couverti en xp)
        if($xp <= $xpVoulu){
            return Redirect()->back()->withInput()->with("erreurForm", "lvl trop grand pour xp");
        }

        //Rechercher le lvl si il est dans la base de donnée.
        $lvlMax = Xp::get()->where('lvl', '=', $lvl);

        //Valider pour savoir si le lvl est trop grand par rapport a la bade de donnée
        $LvlTropGrand = 0;
        foreach($lvlMax as $xp2){
            $LvlTropGrand = $xp2->lvl;
        }
        if($LvlTropGrand == 0){
            return Redirect()->back()->withInput()->with("erreurForm", "Xp trop grand");
        }

        //Calcul de la différence d'expérience
        $difXp = $xp - $xpVoulu;

        return Redirect()->back()->withInput()->with("calculateur", $difXp);
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
