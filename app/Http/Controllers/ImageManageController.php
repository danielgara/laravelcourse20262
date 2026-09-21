<?php

namespace App\Http\Controllers;

use App\Utils\ImageLocalStorage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ImageManageController extends Controller
{
    public function index(): View
    {
        return view('imagemanage.index');
    }

    public function save(Request $request): RedirectResponse
    {
        $storeImageLocal = new ImageLocalStorage();
        $storeImageLocal->store($request);

        return back();
    }
}

