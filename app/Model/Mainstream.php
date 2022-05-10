<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Mainstream extends Model
{
    /**
     * @var string
     */
    protected $table = 'mainstream';

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
        'content_design_en',
        'content_design_ru',
        'content_design_oz',
        'content_economy_en',
        'content_economy_ru',
        'content_economy_oz',
        'content_consultation_en',
        'content_consultation_ru',
        'content_consultation_oz',
        'content_injener_en',
        'content_injener_ru',
        'content_injener_oz',

        'content_laboratory_en',
        'content_laboratory_ru',
        'content_laboratory_oz',

        'content_author_en',
        'content_author_ru',
        'content_author_oz',

        'content_stroy_en',
        'content_stroy_ru',
        'content_stroy_oz',
        
        'file',
        'file_en',
        'file_ru',
        'file_oz',
        'publish_at',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
    public function getFileAttribute()
    {
        $locale = App::getLocale();
        $column = "file_" . $locale;
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
    public function getContentDesignAttribute()
    {
        $locale = App::getLocale();
        $column = "content_design_" . $locale;
        return $this->{$column};
    }
    public function getContentEconomyAttribute()
    {
        $locale = App::getLocale();
        $column = "content_economy_" . $locale;
        return $this->{$column};
    }
    public function getContentConsultationAttribute()
    {
        $locale = App::getLocale();
        $column = "content_consultation_" . $locale;
        return $this->{$column};
    }
    public function getContentInjenerAttribute()
    {
        $locale = App::getLocale();
        $column = "content_injener_" . $locale;
        return $this->{$column};
    }
    public function getContentLaboratoryAttribute()
    {
        $locale = App::getLocale();
        $column = "content_laboratory_" . $locale;
        return $this->{$column};
    }
    public function getContentAuthorAttribute()
    {
        $locale = App::getLocale();
        $column = "content_author_" . $locale;
        return $this->{$column};
    }
    public function getContentStroyAttribute()
    {
        $locale = App::getLocale();
        $column = "content_stroy_" . $locale;
        return $this->{$column};
    }
}
