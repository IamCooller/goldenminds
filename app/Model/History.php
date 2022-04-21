<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class History extends Model
{
    /**
     * @var string
     */
    protected $table = 'history';

    /**
     * @var array
     */
    protected $fillable = [
        'years_ru',
        'years_en',
        'years_oz',
        'name_ru',
        'name_en',
        'name_oz',
        'images_ru',
        'images_en',
        'images_oz',

        'content_ru',
        'content_en',
        'content_oz',

    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getNameAttribute()
    {
        $locale = App::getLocale();
        $column = "name_" . $locale;
        return $this->{$column};
    }

    public function getContentAttribute()
    {
        $locale = App::getLocale();
        $column = "content_" . $locale;
        return $this->{$column};
    }

    public function getImagesAttribute()
    {
        $locale = App::getLocale();
        $column = "images_" . $locale;
        return $this->{$column};
    }

    public function getYearsAttribute()
    {
        $locale = App::getLocale();
        $column = "years_" . $locale;
        return $this->{$column};
    }

}