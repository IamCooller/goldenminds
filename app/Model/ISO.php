<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class ISO extends Model
{
    /**
     * @var string
     */
    protected $table = 'iso';

    /**
     * @var array
     */
    protected $fillable = [
        'title_en',
        'title_ru',
        'title_oz',
        'content_en',
        'content_ru',
        'content_oz',
        'images_en',
        'images_ru',
        'images_oz',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'publish_at',
        'created_at',
        'updated_at'
    ];

    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->{$column};
    }
    public function getImagesAttribute()
    {
        $locale = App::getLocale();
        $column = "images_" . $locale;
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

}
