<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App;
class News extends Model
{

    protected $table = 'news';

    protected $fillable = [
        'date',
        'published',
        'published_oz',
        'published_ru',
        'published_en',
        'text',
        'title_en',
        'title_ru',
        'title_oz',
        'content_en',
        'content_ru',
        'content_oz'
    ];

    public function scopeLast($query)
    {
        $query->orderBy('date', 'desc')->limit(4);
    }
    public function getTitleAttribute()
            {
                $locale = App::getLocale();
                $column = "title_" . $locale;
                return $this->{$column};
            }
            public function getDescriptionAttribute()
            {
                $locale = App::getLocale();
                $column = "description_" . $locale;
                return $this->{$column};
            }
            public function getKeywordsAttribute()
            {
                $locale = App::getLocale();
                $column = "keywords_" . $locale;
                return $this->{$column};
            }
            public function getContentAttribute()
            {
                $locale = App::getLocale();
                $column = "content_" . $locale;
                return $this->{$column};
            }
            public function getNameAttribute()
            {
                $locale = App::getLocale();
                $column = "name_" . $locale;
                return $this->{$column};
            }

            public function getPublishedAttribute()
            {
           
                $locale = App::getLocale();
                $column = "published_" . $locale;
                return $this->{$column};
            }
}
