<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Structura extends Model
{
    /**
     * @var string
     */
    protected $table = 'structura';

    /**
     * @var array
     */
    protected $fillable = [
        'image_ru',
        'image_en',
        'image_oz',
        'link_ru',
        'link_en',
        'link_oz',
        'tabs_ru',
        'tabs_en',
        'tabs_oz',
        'instruction_ru',
        'instruction_en',
        'instruction_oz',
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

    public function getLinkAttribute()
    {
        $locale = App::getLocale();
        $column = "link_" . $locale;
        return $this->{$column};
    }

    public function getTabsAttribute()
    {
        $locale = App::getLocale();
        $column = "tabs_" . $locale;
        return $this->{$column};
    }

    public function getInstructionAttribute()
    {
        $locale = App::getLocale();
        $column = "instruction_" . $locale;
        return $this->{$column};
    }
}
