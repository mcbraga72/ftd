<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisciplineRequest;
use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    /**
     * Display discipline's list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplines = Discipline::all();
        return response()->json($disciplines);
    }

    /**
     * Store new discipline in database.
     *
     * @param  App\Http\Requests\DisciplineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DisciplineRequest $request)
    {   
        $discipline = new Discipline();
        $discipline->name = $request->name;
        $discipline->save();
        return response()->json($discipline, 201);
    }

    /**
     * Show specific discipline's data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discipline = Discipline::findOrFail($id);
        return response()->json($discipline);
    }

    /**
     * Update discipline's data on database.
     *
     * @param  App\Http\Requests\DisciplineRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DisciplineRequest $request, $id)
    {
        $discipline = Discipline::findOrFail($id);
        $discipline->name = $request->name;
        $discipline->save();
        return response()->json($discipline);
    }

    /**
     * Remove the discipline from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Discipline::findOrFail($id)->delete();        
        return response()->json($delete);
    }
}
