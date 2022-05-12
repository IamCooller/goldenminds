<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
use Carbon\Carbon;
class VideoGallery extends Model
{
    /**
     * @var string
     */
    protected $table = 'videogallery';

    /**
     * @var array
     */
    protected $fillable = [
        'image_ru',
        'image_en',
        'image_oz',
        'images_ru',
        'images_en',
        'images_oz',

        'title_ru',
        'title_en',
        'title_oz',
        'data_ru',
        'data_en',
        'data_oz',
    
    ];


    /**
     * @var array
     */
    protected $hidden = [
        'publish_at',
        'created_at',
        'updated_at'
    ];

   
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
    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->{$column};
    }
    public function getDateAttribute()
    {
        $locale = App::getLocale();
        $column = "date_" . $locale;
        return Carbon::parse($this->{$column})->format('d.m.Y');
    }
  

}
