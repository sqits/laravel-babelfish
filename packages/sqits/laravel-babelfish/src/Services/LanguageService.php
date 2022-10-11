<?php

namespace Sqits\Babelfish\Services;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;

class LanguageService
{

    public function getDefaultTranslationKeys() : array
    {
        $files = File::allFiles(
            lang_path(
                Config::get('app.locale')
            )
        );

        $keys = [];

        foreach($files as $file) {

            $basename = $file->getFilenameWithoutExtension();

            $values = Lang::get($basename);

            $keys = array_merge(
                $keys,
                $this->handleTranslationKeysRecursive($basename, $values)
            );
        }

        return $keys;
    }

    protected function handleTranslationKeysRecursive(string $basename, array $values)
    {
        $keys = [];

        foreach ($values as $key => $value) {

            if (is_array($value)) {
                $keys = array_merge(
                    $keys,
                    $this->handleTranslationKeysRecursive($basename.'.'.$key, $value)
                );
            } else {
                $keys[$basename.'.'.$key] = $value;
            }
        }

        return $keys;
    }

}
