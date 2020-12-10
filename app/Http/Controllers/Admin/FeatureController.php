<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\FeatureRequest;
use App\Http\Request\Admin\LocalizationRequest;
use App\Models\Feature;
use App\Models\Localization;
use App\Services\FeatureService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class FeatureController extends AdminController
{
    protected $service;

    public function __construct(FeatureService $service)
    {
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     * @param string $lang
     * @return Application|Factory|View|Response
     */
    public function index(string $lang, Request $request)
    {
        $request->validate([
            'id' => 'integer|nullable',
            'title' => 'string|max:255|nullable',
            'type' => 'string|max:255|nullable',
            'position' => 'string|max:255|nullable',
            'slug' => 'string|max:255|nullable',
            'status' => 'boolean|nullable',
        ]);
        return view('admin.modules.feature.index', [
            'features' => $this->service->getAll($lang,$request)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.modules.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param string $lang
     * @param FeatureRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(string $lang, FeatureRequest $request)
    {
        $data = $request->only([
            'title',
            'position',
            'slug',
            'type',
            'status'
        ]);

        if (!$this->service->store($lang,$data)) {
            return redirect(route('featureCreateView',app()->getLocale()))->with('danger', 'Feature does not create.');
        }

        return redirect(route('featureIndex', app()->getLocale()))->with('success', 'Feature create successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param Feature $feature
     * @param string $locale
     * @return Application|Factory|View|Response
     */
    public function show(string $locale, Feature $feature)
    {
        return view('admin.modules.feature.show', [
            'feature' => $feature
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Feature $feature
     * @param string $locale
     * @return Application|Factory|View|Response
     */
    public function edit(string $locale, Feature $feature)
    {
        return view('admin.modules.feature.update', [
            'feature' => $feature
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param FeatureRequest $request
     * @param string $locale
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(string $locale, FeatureRequest $request, int $id)
    {
        $data = $request->only([
            'title',
            'position',
            'slug',
            'type',
            'status'
        ]);


        if (!$this->service->update($locale, $id, $data)) {
            return redirect(route('featureEditView', app()->getLocale()))->with('danger', 'Feature does not update.');
        }

        return redirect(route('featureIndex', app()->getLocale()))->with('success', 'Feature update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $locale
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(string $locale, int $id)
    {
        if (!$this->service->delete($id)) {
            return redirect(route('featureIndex', app()->getLocale()))->with('danger', 'Feature does not delete.');
        }
        return redirect(route('featureIndex', app()->getLocale()))->with('success', 'Feature delete successfully.');

    }
}
