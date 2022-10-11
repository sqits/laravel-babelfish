<?php

namespace Sqits\Babelfish\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Config;
use Sqits\Babelfish\Services\LanguageService;

class Language extends Model
{

    protected $guarded = ['id'];

    /**
     * Get translations of the language.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations() : HasMany
    {
        return $this->hasMany(Translation::class)
            ->orderBy('key');
    }

    /**
     * Sync the translations of the language from the database
     * with the language file of the default language
     *
     * @return void
     */
    public function syncTranslations() : void
    {
        $this->load('translations');

        // TODO get default language to show the overwritten fallback value
//        $defaultLocale = Config::get('app.locale');
//        $defaultLanguage = null;
//
//        if ($defaultLocale !== $this->code) {
//            $defaultLanguage = Language::where('code', $defaultLocale)->first();
//            $defaultLanguage->syncTranslations();
//        }

        $service = new LanguageService();

        $defaultKeys = $service->getDefaultTranslationKeys();

        foreach($defaultKeys as $key => $value) {
            $existingTranslation = $this->translations->where('key', $key)->first();

            if ($existingTranslation) {
                $existingTranslation->fallback = $value;
            } else {
                $translation = Translation::make([
                    'key' => $key,
                    'fallback' => $value,
                    'value' => null,
                    'language_id' => $this->id
                ]);

                $this->translations->push($translation);
            }
        }
    }
}
