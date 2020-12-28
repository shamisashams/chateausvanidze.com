<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Request\Admin\NewsRequest;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends AdminController
{
    protected $service;

    public function __construct(NewsService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $lang, Request $request)
    {

        $request->validate([
            'id' => 'integer|nullable',
            'title' => 'string|max:255|nullable',
            'description' => 'string|max:255|nullable',
            'slug' => 'string|max:255|nullable',
            'status' => 'boolean|nullable',
        ]);


        $data = $this->service->getAll($lang,$request);

        return view('admin.modules.news.index', [
            'data' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(string $locale, NewsRequest $request)
    {
        if (!$this->service->store($locale,$request)) {
            return redirect(route('newsCreateView',$locale))->with('danger', 'Record does not create.');
        }

        return redirect(route('newsIndex', $locale))->with('success', 'Record create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(string $locale, int $id)
    {
        $data = $this->service->find($id);

        return view('admin.modules.news.update',[
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(string $locale, NewsRequest $request, int $id)
    {

        if (!$this->service->update($locale,$id,$request)) {
            return redirect(route('newsIndex',$locale))->with('danger', 'Record does not update.');
        }

        return redirect(route('newsIndex', $locale))->with('success', 'Record update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $locale, int $id)
    {
        if (!$this->service->delete($id)) {
            return redirect(route('newsIndex', $locale))->with('danger', 'Record does not delete.');
        }
        return redirect(route('newsIndex', $locale))->with('success', 'Record delete successfully.');
    }
}
