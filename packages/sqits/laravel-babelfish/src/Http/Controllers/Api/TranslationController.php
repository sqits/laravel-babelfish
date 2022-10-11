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
            $this->validate($request, [
                'key' => 'required',
                'value' => 'required',
            ]);

            $translation = Translation::query()
                ->create()
            ([
                'key' => $request->input('key'),
                'language_id' => $request->input('language_id'),
            ]);
        } catch(\Exception $e) {
             return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }


//        $translation = Translation::firstOrNew([
//            'key' => $request->input('key'),
//            'language_id' => $request->input('language'),
//        ]);
//
//        $translation->translation = $request->input('translation');
//        $translation->save();
//
//        return $translation;
    }
}
