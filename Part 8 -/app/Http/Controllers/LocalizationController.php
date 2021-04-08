<?php

namespace App\Http\Controllers;

class LocalizationController extends Controller
{
    //cara 1
    // public function __invoke($language = 'en')
    // {
    //     request()->session()->put('locale', $language);
    //     return redirect()->back();
    // }

    //cara 2
    public function switch($language = 'en')
    {
        request()->session()->put('locale', $language);
        return redirect()->back();
    }
}
