<?php

namespace Sqits\Babelfish;

use Illuminate\Support\Facades\Http;

class Translator
{
    public function translate($text, $from, $to)
    {
        try {
            // $apiKey = config('babelfish.api_key');
            $url = 'https://api-free.deepl.com/v2/translate';
            $apiKey = "DeepL-Auth-Key eaef726e-0ce1-6174-cfab-26793c9c6cec:fx";

            $requestData = [
                'text' => $text,
                'source_lang' => $from,
                'target_lang' => $to,
            ];

            return Http::withHeaders([
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $apiKey
            ])
                ->get($url, $requestData)
                ->throw()
                ->json();
        } catch (\Exception $e) {
            return "Could not translate the text";
        }
    }
}
