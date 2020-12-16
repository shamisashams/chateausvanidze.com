<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends AdminController
{
    protected $service;

    public function __construct(FileService $service)
    {
        $this->service = $service;
    }
    public function index(Request $request, $locale)
    {
        return view('admin.modules.file.index', ['files' => $this->service->getAll($locale, $request), 'locale'=>$locale]);
    }
    public function remove($locale, File $file)
    {   
        Storage::disk('public')->delete($file->path.'/'.$file->name);
        $file->delete();
        return redirect()->back();
    }
}
