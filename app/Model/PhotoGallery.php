<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class PhotoGallery extends Model
{
    /**
     * @var string
     */
    protected $table = 'photogallery';

    /**
     * @var array
     */
    protected $fillable = [
        'title_en',
        'title_ru',
        'title_oz',
        'image_en',
        'image_ru',
        'image_oz',
        'images_en',
        'images_ru',
        'images_oz',

        'data',
    
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'publish_at',
        'created_at',
        'updated_at'
    ];

    public function getImagesAttribute($value)
    {
        $locale = App::getLocale();
        $column = "images_" . $locale;
        return $this->{$column};
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function setImagesAttribute($images)
    {
        $this->attributes['images'] = implode(',', $images);
    }
   public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->{$column};
    }

    public function getImageAttribute()
    {
        $locale = App::getLocale();
        $column = "image_" . $locale;
        return $this->{$column};
    }



   
}
