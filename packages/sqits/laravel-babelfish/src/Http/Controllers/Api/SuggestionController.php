<?php

namespace Sqits\Babelfish\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sqits\Babelfish\Models\Translation;
use Sqits\Babelfish\Services\Translator;

class SuggestionController extends Controller
{
    public function show(Request $request, Translator $translator)
    {
        try {
            $validated = $this->validate($request, [
                'text' => 'required|string',
                'code' => 'required|string',
            ]);

            $text = $validated['text'];
            $from = config('babelfish.default_language');
            $to = $validated['code'];
            $suggestion = $translator->translate($text, $from, $to);

            return response()->json($suggestion);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Could not fetch suggestion'
            ], 422);
        }
    }
}
