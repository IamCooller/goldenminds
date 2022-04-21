<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Guidance extends Model
{
    /**
     * @var string
     */
    protected $table = 'guidance';

    /**
     * @var array
     */
    protected $fillable = [
        'title_en',
        'title_ru',
        'title_oz',
        'name_ru',
        'name_en',
        'name_oz',
        'sketch_ru',
        'sketch_en',
        'sketch_oz',
        'content_ru',
        'content_en',
        'content_oz',
        'rank_ru',
        'rank_en',
        'rank_oz',
        'image_ru',
        'image_en',
        'image_oz',
        'category_ru',
        'category_en',
        'category_oz',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
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
    public function getSketchAttribute()
    {
        $locale = App::getLocale();
        $column = "sketch_" . $locale;
        return $this->{$column};
    }
    public function getRankAttribute()
    {
        $locale = App::getLocale();
        $column = "rank_" . $locale;
        return $this->{$column};
    }
    public function getImageAttribute()
    {
        $locale = App::getLocale();
        $column = "image_" . $locale;
        return $this->{$column};
    }
    public function getCategoryAttribute()
    {
        $locale = App::getLocale();
        $column = "category_" . $locale;
        return $this->{$column};
    }
}
