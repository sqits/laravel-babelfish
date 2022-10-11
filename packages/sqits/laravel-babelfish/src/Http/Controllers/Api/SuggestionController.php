<?php

namespace Sqits\Babelfish\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sqits\Babelfish\Model\Translation;
use Sqits\Babelfish\Service\Translator;

class SuggestionController extends Controller
{
    public function show(Request $request, $id, Translator $translator)
    {
        try {
            $translation = Translation::query()->findOrFail($id);
            $validated = $this->validate($request, [
                'value' => 'required|string',
            ]);

            $text = $validated['value'];
            $from = 'NL';
            $to = $translation->language->code;
            $suggestion = $translator->translate($text, $from, $to);

            $translation->update([
                'suggestion' => $suggestion,
            ]);

            return response()->json([
                'suggestion' => $suggestion
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Could not fetch suggestion'
            ], 422);
        }
    }
}
