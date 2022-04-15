<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Virtual extends Model
{
    /**
     * @var string
     */
    protected $table = 'virtual';

    /**
     * @var array
     */
    protected $fillable = [
        'title_en',
        'title_oz',
        'description_en',
        'description_ru',
        'description_oz',
        'title_ru',
        'keywords_en',
        'keywords_ru',
        'keywords_oz',
        'content_en',
        'content_ru',
        'content_oz',
        'service_en',
        'service_oz',
        'service_ru',
        'count'
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
    public function getServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "service_" . $locale;
        return $this->{$column};
    }
}
