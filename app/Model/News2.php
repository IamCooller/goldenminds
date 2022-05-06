<?php namespace App\Model;
use App;
use Carbon\Carbon;
class News2 extends News
{
    protected $fillable = [
       
        'published',

        'title_en',
        'title_ru',
        'title_oz',
        'content_en',
        'content_ru',
        'content_oz',

        'author_en',
        'author_ru',
        'author_oz',
        'date_en',
        'date_ru',
        'date_oz',
        'image_en',
        'image_ru',
        'image_oz',
        'images_en',
        'images_ru',
        'images_oz',
        
    ];





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

            public function getAuthorAttribute()
            {
                $locale = App::getLocale();
                $column = "author_" . $locale;
                return $this->{$column};
            }

            public function getDateAttribute()
            {
                $locale = App::getLocale();
                $column = "date_" . $locale;
                return Carbon::parse($this->{$column})->format('d.m.Y');

            }

            public function getImageAttribute()
            {
                $locale = App::getLocale();
                $column = "image_" . $locale;
                return $this->{$column};
            }

            public function getImagesAttribute()
            {
                $locale = App::getLocale();
                $column = "images_" . $locale;
                return $this->{$column};
            }


            public function setFixImagesAttribute($value)
            {
                return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
            }
        
            public function setImagesRuAttribute($images_ru)
            {
                $this->attributes['images_ru'] = implode(',', $images_ru);
            }
            public function setImagesOzAttribute($images_oz)
            {
                $this->attributes['images_oz'] = implode(',', $images_oz);
            }
            public function setImagesEnAttribute($images_en)
            {
             
                $this->attributes['images_en'] = implode(',', $images_en);
            }
}
