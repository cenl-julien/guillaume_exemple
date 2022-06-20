<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JeuxVideo;

class AccueilController extends Controller
{
    public function accueil()
    {
        // $jeux_videos = [
        //     [
        //         'nom' => 'Mario',
        //         'console' => 'nintendo'
        //     ],
        //     [
        //         'nom' => 'Halo',
        //         'console' => 'xbox'
        //     ],
        //     [
        //         'nom' => 'Lara croft',
        //         'console' => 'Playstation'
        //     ]
        // ];
        $jeux_videos = JeuxVideo::all();

        $test = ['1', '2'];

        $texte = 'Toto tata';


        // return view('accueil.index', ['jv' => $jeux_videos, 'chiffres' => $test]);
        return view('accueil.index', compact('jeux_videos', 'test', 'texte'));
    }


    public function test()
    {
        return var_dump('test');
    }
}
