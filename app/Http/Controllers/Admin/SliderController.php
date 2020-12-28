<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Request\Admin\SliderRequest;
use App\Services\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    protected $service;

    public function __construct(SliderService $service)
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
            'description' => 'string|max:255|nullable',
            'slug' => 'string|max:255|nullable',
            'status' => 'boolean|nullable',
        ]);


        $data = $this->service->getAll($lang,$request);

        return view('admin.modules.slider.index', [
            'data' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.modules.slider.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param string $lang
     * @param SliderRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(string $locale, SliderRequest $request)
    {
        if (!$this->service->store($locale,$request)) {
            return redirect(route('sliderCreateView',$locale))->with('danger', 'Record does not create.');
        }

        return redirect(route('sliderIndex', $locale))->with('success', 'Record create successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param string $locale
     * @return Application|Factory|View|Response
     */
    public function show(string $locale, int $id)
    {

        $data = $this->service->find($id);
        $localization = $this->service->getlocale($locale);

        return view('pages.slider_details', compact('data', 'localization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @param string $locale
     * @return Application|Factory|View|Response
     */
    public function edit(string $locale, int $id)
    {
        $data = $this->service->find($id);


        return view('admin.modules.slider.update',[
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SliderRequest  $request
     * @param string $locale
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(string $locale, SliderRequest $request, int $id)
    {
        if (!$this->service->update($locale,$id,$request)) {
            return redirect(route('sliderIndex',$locale))->with('danger', 'Record does not update.');
        }

        return redirect(route('sliderIndex', $locale))->with('success', 'Record update successfully.');
    }




    public function destroy(string $locale, int $id)
    {
        if (!$this->service->delete($id)) {
            return redirect(route('sliderIndex', $locale))->with('danger', 'Record does not delete.');
        }
        return redirect(route('sliderIndex', $locale))->with('success', 'Record delete successfully.');
    }

}
