<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\FeatureRequest;
use App\Http\Request\Admin\ProductRequest;
use App\Models\Answer;
use App\Models\Feature;
use App\Services\ProductService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ProductController extends AdminController
{
    protected $service;

    public function __construct(ProductService $service)
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
        return view('admin.modules.product.index', [
            'products' => $this->service->getAll($lang,$request)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $features = Feature::where('status',true)->get();

        return view('admin.modules.product.create',[
            'features' => $features
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param string $lang
     * @param ProductRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(string $lang, ProductRequest $request)
    {
        $data = $request->only([
            'title',
            'position',
            'slug',
            'price',
            'description',
            'content',
            'status',
            'release_date',
            'features'
        ]);

        if (!$this->service->store($lang,$data)) {
            return redirect(route('productCreateView',app()->getLocale()))->with('danger', 'Product does not create.');
        }

        return redirect(route('producIndex', app()->getLocale()))->with('success', 'Product create successfully.');

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


    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest  $request
     * @param string $locale
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(string $locale, ProductRequest $request, int $id)
    {

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
            return redirect(route('productIndex', app()->getLocale()))->with('danger', 'Product does not delete.');
        }
        return redirect(route('productIndex', app()->getLocale()))->with('success', 'Product delete successfully.');


    }
}
