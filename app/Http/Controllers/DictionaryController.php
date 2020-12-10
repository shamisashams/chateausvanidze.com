<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use App\Models\Localization;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        $langs = Localization::all();

        $dictionaries = new Dictionary();
        $search = '';
        if (request('search') !== null) {
            $dictionaries = $dictionaries->where('key', 'LIKE', '%'.strval(request('search')).'%');
            $search = strval(request('search'));
        }
        $dictionaries = $dictionaries->paginate(15);
        return view('admin.modules.dictionary.index', compact('langs', 'locale', 'dictionaries', 'search'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $locale)
    {
        $this->validate($request, [
            'key' => 'required',
            'module' => 'required'
        ]);

        $dictionary = Dictionary::create([
            'key' => $request->key,
            'module' => $request->module
        ]);
        foreach (Localization::all() as $key => $lang) {
        
            $dictionary->language()->create([
                'language_id' => $lang->id,
                'value' => $request->translates[$key] ?? ''
            ]);
            
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $locale, $id)
    {
        $dictionary = Dictionary::findOrFail($id);
        foreach (Localization::all() as $key => $lang) {
        
            $language = $dictionary->language()->where('language_id', $lang->id)->first();
            $language->value = $request->translates[$key] ?? '';
            $language->save();
            
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $id)
    {
        $dictionary = Dictionary::findOrFail($id);
        $dictionary->delete();
        return redirect()->back();
    }
}
