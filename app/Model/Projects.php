<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Projects extends Model
{
    /**
     * @var string
     */
    protected $table = 'projects';

    /**
     * @var array
     */
    protected $fillable = [
        'name_ru',
        'name_en',
        'name_oz',
        'title_en',
        'title_ru',
        'title_oz',
        'content_en',
        'content_ru',
        'content_oz',
        'years_ru',
        'years_en',
        'years_oz',
        'category_ru',
        'category_en',
        'category_oz',
        'image_ru',
        'image_en',
        'image_oz',
        'images_ru',
        'images_en',
        'images_oz',
        'power_ru',
        'power_en',
        'power_oz',
        'status_ru',
        'status_en',
        'status_oz',
    ];



    public function setImagesRuAttribute($images_ru)
    {
       
        $this->attributes['images_ru'] = implode(',', $images_ru);
        return preg_split('/,/',  $this->attributes['images_ru'], -1, PREG_SPLIT_NO_EMPTY);
    }
    public function setImagesOzAttribute($images_oz)
    {
        $this->attributes['images_oz'] = implode(',', $images_oz);
        return preg_split('/,/',  $this->attributes['images_oz'], -1, PREG_SPLIT_NO_EMPTY);
    }
    public function setImagesEnAttribute($images_en)
    {
     
        $this->attributes['images_en'] = implode(',', $images_en);
        return preg_split('/,/',  $this->attributes['images_en'], -1, PREG_SPLIT_NO_EMPTY);
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
    public function getYearsAttribute()
    {
        $locale = App::getLocale();
        $column = "years_" . $locale;
        return $this->{$column};
    }
    public function getCategoryAttribute()
    {
        $locale = App::getLocale();
        $column = "category_" . $locale;
        return $this->{$column};
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
    public function getPowerAttribute()
    {
        $locale = App::getLocale();
        $column = "power_" . $locale;
        return $this->{$column};
    }
    public function getStatusAttribute()
    {
        $locale = App::getLocale();
        $column = "status_" . $locale;
        return $this->{$column};
    }

    public function getCountagrsAttribute()
    {
        $locale = App::getLocale();
        $column = "countagrs_" . $locale;
        return $this->{$column};
    }
    public function getWatterAttribute()
    {
        $locale = App::getLocale();
        $column = "watter_" . $locale;
        return $this->{$column};
    }
    public function getOutputAttribute()
    {
        $locale = App::getLocale();
        $column = "output_" . $locale;
        return $this->{$column};
    }
    
}
