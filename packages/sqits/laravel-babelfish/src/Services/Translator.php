<?php

namespace Sqits\Babelfish\Services;

use Illuminate\Support\Facades\Http;

class Translator
{
    public function translate($text, $from, $to)
    {
        $url = 'https://api-free.deepl.com/v2/translate';
        $apiKey = config('babelfish.api_key');

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
    }
}
