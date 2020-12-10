<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\AnswerRequest;
use App\Models\Answer;
use App\Models\Feature;
use App\Models\Localization;
use App\Services\AnswerService;
use Illuminate\Http\Request;

class AnswerController extends AdminController
{
    protected $service;

    public function __construct(AnswerService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale, Request $request)
    {
        $request->validate([
            'key' => 'string|max:255|nullable',
        ]);

        $features = Feature::all();
        $localization = Localization::where('abbreviation',$locale)->first()->id;
        return view('admin.modules.answer.index', ['dictionaries' => $this->service->getAll($locale, $request), 'locale'=>$locale,'features'=>$features, 'localization' => $localization]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnswerRequest $request, $locale)
    {
        $data = $request->only([
            'slug',
            'feature',
            'status',
            'position',
            'title'
        ]);
        $this->service->store($locale, $data);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
