<?php

namespace Sqits\Babelfish\Http\Controllers;


use Illuminate\Http\Client\Request;
use Sqits\Babelfish\Model\Language;
use Sqits\Babelfish\Resources\LanguageResource;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();

        return LanguageResource::collection($languages);
    }
}
