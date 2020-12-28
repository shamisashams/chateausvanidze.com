<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Services\NewsService;
use App\Services\PageService;
use App\Services\ProductService;
use App\Services\SliderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $sliderServices;
    protected $productServices;
    protected $newsService;
    protected $pageService;

    public function __construct(
        SliderService $sliderServices,
        ProductService $productServices,
        PageService $pageService,
        NewsService $newsService
        )
    {
        $this->sliderServices = $sliderServices;
        $this->productServices = $productServices;
        $this->pageService = $pageService;
        $this->newsService = $newsService;
    }


    /**
     * Display a listing of the resource.
     *
     * @param string $lang
     *
     * @return Application
     */
    public function index(string $lang, Request $request)
    {


        $slides = $this->sliderServices->getAll($lang,$request);
        $partners = $this->productServices->getAll($lang,$request);
        $about = $this->pageService->getPageBySlug('about-us');
        $rewards = $this->pageService->getPageBySlug('rewards');
        $taste = $this->pageService->getPageBySlug('best-taste');
        $quality = $this->pageService->getPageBySlug('best-quality');
        $news = $this->newsService->getAll($lang,$request);


        return view('holding.index', [
            'slides' => $slides,
            'partners' => $partners,
            'about' => $about,
            'rewards' => $rewards,
            'taste' => $taste,
            'quality' => $quality,
            'news' => $news,
        ]);

        // $page = Page::where(['status' => true, 'slug' => 'home'])->first();
        // if (!$page) {
        //     return abort('404');
        // }

        // $vipProducts = Product::inRandomOrder()->where('vip',true)->limit(15)->get();
        // $popularProducts = Product::inRandomOrder()->limit(10)->get();


        // return view('pages.home.home',[
        //     'page' => $page,
        //     'vipProducts' => $vipProducts,
        //     'popularProducts' => $popularProducts
        // ]);
    }

    public function getSlide($lang , $id){

        $data = $this->sliderServices->getByID($lang , $id);

        return response()->json([
            'id' => $id,
            'lang' => $lang,
            'data' => $data
        ]);
    }

    public function getNews($lang , $id){

        $data = $this->newsService->getByID($lang , $id);

        return response()->json([
            'id' => $id,
            'lang' => $lang,
            'data' => $data
        ]);
    }


    public function getPartners($lang , $id){

        $data = $this->productServices->getByID($lang , $id);

        return response()->json([
            'id' => $id,
            'lang' => $lang,
            'data' => $data
        ]);
    }
}
