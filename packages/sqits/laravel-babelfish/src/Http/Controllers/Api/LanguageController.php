<?php

namespace Sqits\Babelfish\Http\Controllers\Api;


use Sqits\Babelfish\Http\Controllers\Controller;
use Sqits\Babelfish\Models\Language;
use Sqits\Babelfish\Http\Resources\LanguageResource;
use Sqits\Babelfish\Models\Translation;
use Sqits\Babelfish\Services\LanguageService;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::query()->get();

        return LanguageResource::collection($languages);
    }

    public function show(Language $language)
    {
        $language->load('translations');

        $language->syncTranslations();

        return LanguageResource::make($language);
    }
}
