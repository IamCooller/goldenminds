<?php namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App;
class NewsOptions extends Model
{
    /**
     * @var string
     */
    protected $table = 'newsoptions';

    /**
     * @var array
     */
    protected $fillable = [
        'title_en',
        'title_ru',
        'title_oz',
        'description_en',
        'description_ru',
        'description_oz',
        'keywords_en',
        'keywords_ru',
        'keywords_oz',
        'content_en',
        'content_ru',
        'content_oz',
        'rank_ru',
        'rank_en',
        'rank_oz',
        'image_ru',
        'image_en',
        'image_oz'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    /**
     * @var array
     */

    public function getImageAttribute()
    {
        $locale = App::getLocale();
        $column = "image_" . $locale;
        return $this->{$column};
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
    public function getRankAttribute()
    {
        $locale = App::getLocale();
        $column = "rank_" . $locale;
        return $this->{$column};
    }



   

}
