<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Departament extends Model
{
    /**
     * @var string
     */
    protected $table = 'departament';

    /**
     * @var array
     */
    protected $fillable = [
        'image',
        'publish_at',

        'title_en',
        'title_ru',
        'title_oz',
        'content_en',
        'content_ru',
        'content_oz',
        'name_ru',
        'name_en',
        'name_oz',
        'subname_ru',
        'subname_en',
        'subname_oz',
        'task_ru',
        'task_en',
        'task_oz',
        'function_ru',
        'function_en',
        'function_oz',
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
    public function getSubNameAttribute()
    {
        $locale = App::getLocale();
        $column = "subname_" . $locale;
        return $this->{$column};
    }
    public function getTaskAttribute()
    {
        $locale = App::getLocale();
        $column = "task_" . $locale;
        return $this->{$column};
    }
    public function getFunctionAttribute()
    {
        $locale = App::getLocale();
        $column = "function_" . $locale;
        return $this->{$column};
    }
}
