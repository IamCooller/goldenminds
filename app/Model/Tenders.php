<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Tenders extends Model
{
    /**
     * @var string
     */
    protected $table = 'tenders';

    /**
     * @var array
     */
    protected $fillable = [
        'name_ru',
        'name_en',
        'name_oz',
        'files_ru',
        'files_en',
        'files_oz',
        'open_ru',
        'open_en',
        'open_oz',
        'image_ru',
        'image_en',
        'image_oz',
        'title_en',
        'title_ru',
        'title_oz',
        'content_en',
        'content_ru',
        'content_oz'
    ];

    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function setImagesAttribute($image)
    {
        $this->attributes['image'] = implode(',', $image);
    }

    public function getFilesAttribute()
    {
        $locale = App::getLocale();
        $column = "files_" . $locale;
        return $this->{$column};
    }

    public function getOpenAttribute()
    {
        $locale = App::getLocale();
        $column = "open_" . $locale;
        return $this->{$column};
    }

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
    public function getNameAttribute()
    {
        $locale = App::getLocale();
        $column = "name_" . $locale;
        return $this->{$column};
    }

}
