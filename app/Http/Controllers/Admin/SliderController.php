<?php
/**
 *  app/Http/Controllers/Admin/SliderController.php
 *
 * User:
 * Date-Time: 08.02.21
 * Time: 14:42
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\FeatureRequest;
use App\Http\Request\Admin\PageRequest;
use App\Http\Request\Admin\SliderRequest;
use App\Services\PageService;
use App\Services\SliderService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class SliderController extends AdminController
{
    protected $service;

    public function __construct(SliderService $service)
    {
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @param string $lang
     * @param Request $request
     *
     * @return Application|Factory|View|Response
     * @throws Exception
     */
    public function index(string $lang, Request $request)
    {
        $request->validate([
            'id' => 'integer|nullable',
            'title' => 'string|max:255|nullable',
            'description' => 'string|max:255|nullable',
            'status' => 'boolean|nullable',
        ]);
        return view('admin.modules.slider.index', [
            'slider' => $this->service->getAll($lang,$request)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create(string $locale)
    {
        return view('admin.modules.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param string $lang
     * @param FeatureRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(string $locale, SliderRequest $request)
    {
        if (!$this->service->store($locale,$request)) {
            return redirect(route('slideCreateView',$locale))->with('danger', 'Slide does not create.');
        }

        return redirect(route('slideIndex', $locale))->with('success', 'Slide create successfully.');

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
        return view('admin.modules.page.show', [
            'page' => $this->service->find($id)
        ]);
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
        return view('admin.modules.slider.update', [
            'slider' => $this->service->find($id)
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
    public function update(string $locale, SliderRequest $request, int $id)
    {

        if (!$this->service->update($locale, $id, $request)) {
            return redirect(route('slideEditView', $locale))->with('danger', 'Slide does not update.');
        }

        return redirect(route('slideIndex', $locale))->with('success', 'Slide update successfully.');

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
            return redirect(route('slideIndex', $locale))->with('danger', 'Slider does not delete.');
        }
        return redirect(route('slideIndex', $locale))->with('success', 'Slider delete successfully.');

    }
}
