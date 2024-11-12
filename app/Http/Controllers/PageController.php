<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function index()
    {
        return redirect()->route('cv', ['locale' => App::getLocale()]);
    }

    public function cv(Request $request, $locale = null)
    {
        if ($locale) {
            if (!App::isLocale($locale)) {
                App::setLocale($request->getPreferredLanguage());
            }
            App::setLocale($locale);
        }

        return view('cv.index');
    }
}
