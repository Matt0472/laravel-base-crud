<?php

namespace App\Http\Controllers;

use App\Wine;

use Illuminate\Http\Request;

class WineController extends Controller
{
    private $validationShoe = [
        'cantina' => 'required|string|max:40',
        'etichetta' => 'required|string|max:100',
        'annata' => 'required|string|max:4',
        'vitigno' => 'required|char|max:100',
        'descrizione' => 'required|longText',
        'prezzo' => 'required|numeric|min:1|max:9999.99'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();
        return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate($this->validationWine);

        $wine = new Wine;

        $wine->fill($data);
        
        $saved = $wine->save();
        if($saved) {
            $wine = Wine::orderBy('id', 'desc')->first();
            return redirect()->route('wines.show', compact('wine'));
        }
        dd('Vino non salvato correttamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        if (empty($wine)) {
            abort('404');
        }
        
        return view('wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        if (empty($wine)) {
            abort('404');
        }

        return view('wines.create', compact('wine'));
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
        $wine = Wine::find($id);
        
        if (empty($wine)) {
            abort('404');
        }

        $data = $request->all();
        $request->validate($this->validationWine);
        $updated = $wine->update($data);
        if ($updated) {
            $wine = Wine::find($id);
            return redirect()->route('wines.show', compact('wine'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        // $id = $shoe->id;
        // $deleted = $shoe->delete();
        // $data = [
        //     'id' => $id,
        //     'shoes' => Shoe::all()
        // ];

        // return view('shoes.index', $data);
    }
}
