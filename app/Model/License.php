<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class License extends Model
{
    /**
     * @var string
     */
    protected $table = 'license';

    /**
     * @var array
     */
    protected $fillable = [
        'image_ru',
        'image_en',
        'image_oz',

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

}
