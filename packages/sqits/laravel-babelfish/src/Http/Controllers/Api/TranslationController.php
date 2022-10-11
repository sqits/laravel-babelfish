<?php

namespace Sqits\Babelfish\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sqits\Babelfish\Models\Language;
use Sqits\Babelfish\Models\Translation;

class TranslationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $this->validate($request, [
                'key' => 'required|string',
                'value' => 'required|string',
            ]);

            $language = Language::query()->firstOrCreate([
                'name' => 'Nederlands',
                'code' => 'nl'
            ]);

            Translation::query()
                ->updateOrCreate([
                    'key' => $validated['key'],
                ], [
                    'key' => $validated['key'],
                    'value' => $validated['value'],
                    'language_id' => $language->id
                ]);

            return response()->json();
        } catch (\Exception $e) {
            dd($e);
            return response()->json([
                'message' => 'Something when wrong while saving the translation'
            ], 422);
        }
    }
}
