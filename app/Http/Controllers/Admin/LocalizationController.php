<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\LocalizationRequest;
use App\Models\Localization;
use App\Services\LocalizationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocalizationController extends AdminController
{
    protected $service;

    public function __construct(LocalizationService $service)
    {
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'id' => 'integer|nullable',
            'title' => 'string|max:255|nullable',
            'abbreviation' => 'string|max:255|nullable',
            'native' => 'string|max:255|nullable',
            'locale' => 'string|max:255|nullable',
            'status' => 'boolean|nullable',
        ]);
        return view('admin.modules.localization.index', [
            'localizations' => $this->service->getAll($request)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.modules.localization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(LocalizationRequest $request)
    {
        $data = $request->only([
           'title',
           'abbreviation',
           'native',
           'locale',
           'status',
            'default'
        ]);


        $data['status'] = isset($data['status']) ? 1 : 0;
        $data['default'] = isset($data['default']) ? 1 : 0;

        if (!$this->service->store($data)) {
            return redirect(route('localizationCreateView'))->with('danger', 'Localization does not create.');
        }

        return redirect(route('localizationIndex'))->with('success', 'Localization create successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param Localization $localization
     * @return Application|Factory|View|Response
     */
    public function show(Localization $localization)
    {
        return view('admin.modules.localization.show',[
            'localization' => $localization
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Localization $localization
     * @return Application|Factory|View|Response
     */
    public function edit(Localization $localization)
    {
        return view('admin.modules.localization.update',[
            'localization' => $localization
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param LocalizationRequest $request
     * @param int $id
     * @return Application|\Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function update(LocalizationRequest $request, Localization $localization)
    {
        $data = $request->only([
            'title',
            'abbreviation',
            'native',
            'locale',
            'status',
            'default'
        ]);
        $data['status'] = isset($data['status']) ? 1 : 0;
        $data['default'] = isset($data['default']) ? 1 : 0;

        if (!$this->service->update($localization,$data)) {
            return redirect(route('localizationEditView'))->with('danger', 'Localization does not update.');
        }

        return redirect(route('localizationIndex'))->with('success', 'Localization update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Localization $localization
     * @return Response
     */
    public function destroy(Localization $localization)
    {
        if (!$this->service->delete($localization)) {
            return redirect(route('localizationIndex'))->with('danger', 'Localization does not delete.');
        }
        return redirect(route('localizationIndex'))->with('success', 'Localization delete successfully.');

    }
}
