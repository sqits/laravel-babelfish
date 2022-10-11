<?php

namespace Sqits\Babelfish\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sqits\Babelfish\Model\Translation;

class TranslationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $this->validate($request, [
                'key' => 'required|string',
                'value' => 'required|string',
                'language_id' => 'required|exists:languages,id',
            ]);

            Translation::query()
                ->updateOrCreate([
                    'key' => $validated['key'],
                    'language_id' => $validated['language_id'],
                ], [
                    'key' => $validated['key'],
                    'value' => $validated['value'],
                    'language_id' => $validated['language_id'],
                ]);

            return response()->json();
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 422);
        }
    }
}
