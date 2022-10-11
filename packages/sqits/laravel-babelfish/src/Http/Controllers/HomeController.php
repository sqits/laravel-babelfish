<?php

namespace Sqits\Babelfish\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Single page application catch-all route.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('babelfish::layout', []);
    }
}
