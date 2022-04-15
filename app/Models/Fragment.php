<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Fragment extends Model
{
    use HasTranslations;
    public $attributes = ['lang' => ''];
    protected $translatable = ['text'];

    public static function getGroup(string $group, string $locale): array
    {
        return static::query()->where('key', 'LIKE', "{$group}.%")->get()
            ->map(function (Fragment $fragment) use ($locale, $group) {

                $key = preg_replace("/{$group}\\./", '', $fragment->key, 1);
                $text = $fragment->translate('text', $locale);

                return compact('key', 'text');

            })
            ->pluck('text', 'key')
            ->toArray();
    }
    
    public function getLangAttribute()
    {
        return array_keys(json_decode($this->attributes['text'], true))[0];
    }

    public function save(array $options = array()) {
        $this->setTranslation('text', $this->lang, $this->text);
        unset($this->attributes['lang']);
        return parent::save($options);
    }
}