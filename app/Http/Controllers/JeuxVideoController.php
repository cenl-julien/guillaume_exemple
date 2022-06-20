<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JeuxVideo;
use App\Models\Console;
use Illuminate\Support\Facades\Validator;


class JeuxVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux_videos = JeuxVideo::orderby('nom', 'asc')->get();
        return view('jeux_videos.index', compact('jeux_videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consoles = Console::orderby('nom', 'asc')->get();
        return view('jeux_videos.create', compact('consoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'console_id' => 'required|numeric|exists:consoles,id',
            'nom' => 'required|string|max:150|unique:jeux_videos,nom',
        ]);
 
        if ($validator->fails()) {
            return redirect(route('jeux_videos.create'))->withErrors($validator)->withInput();
        }

        // $jeux = JeuxVideo::create([
        //     'nom' => $request->nom,
        //     'console_id' => $request->console_id
        // ]);

        $jeux = JeuxVideo::create($request->all());

        return redirect(route('jeux_videos.index'));

        // JeuxVideo
        // $console = $request->console;
        // $jeux = $request->jeux;

        // var_dump($console, $jeux);



        // return var_dump('Enregistrement du form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return var_dump('vue show de lid : '.$id);
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
