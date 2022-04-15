<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Regulations extends Model
{
    /**
     * @var string
     */
    protected $table = 'regulations';

    /**
     * @var array
     */
    protected $fillable = [
        'tab',
        'title_ru',
        'title_en',
        'title_oz',
        'file_ru',
        'file_en',
        'file_oz',
        'number_ru',
        'number_en',
        'number_oz',

        'regist',
        'number',
        'publish_at'
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
    public function getFileAttribute()
    {
        $locale = App::getLocale();
        $column = "file_" . $locale;
        return $this->{$column};
    }
    public function getNumberAttribute()
    {
        $locale = App::getLocale();
        $column = "number_" . $locale;
        return $this->{$column};
    }

}
