<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($Comics);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|min:5 | max:100',
        //     'description' => 'required',
        //     'thumb' => 'required',
        //     'price' => 'required | max:10',
        //     'series' => 'required | max: 100',
        //     'sale_date' => 'required',
        //     'type' => 'required',
        // ]);
        // dd($request->all());
        $formData = $this->Validation($request->all());
        // $formData = $request->all();
        $newComic = new Comic();
        $newComic->fill($formData);
        // dd($newComic);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        // $comic = Comic::find($id);
        // dd($comic);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // $request->validate([
        //     'title' => 'required|min:5 | max:100',
        //     'description' => 'required',
        //     'thumb' => 'required',
        //     'price' => 'required | max:10',
        //     'series' => 'required | max: 100',
        //     'sale_date' => 'required',
        //     'type' => 'required',
        // ]);
        // $comic = Comic::find($id);
        $formData = $this->Validation($request->all());
        // $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validationResult = Validator::make(
            $data,
            [
                'title' => 'required|min:5 | max:100',
                'description' => 'required',
                'thumb' => 'required',
                'price' => 'required | max:10',
                'series' => 'required | max: 100',
                'sale_date' => 'required',
                'type' => 'required',
            ],
            [
                'title.required' => 'Questo campo ?? obbligatorio, non superare i 100 caratteri',
                'description.required' => 'Questo campo ?? obbligatorio',
                'thumb.required' => 'Questo campo ?? obbligatorio',
                'price.required' => 'Questo campo ?? obbligatorio',
                'series.required' => 'Questo campo ?? obbligatorio, non superare i 100 caratteri',
                'sale_date.required' => 'Questo campo ?? obbligatorio, inseriscilo in formato americano',
                'type.required' => 'Questo campo ?? obbligatorio',
            ]
        )->validate();
        return $validationResult;
    }
}
