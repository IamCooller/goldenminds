<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class Vacancy extends Model
{
    /**
     * @var string
     */
    protected $table = 'vacancy';

    /**
     * @var array
     */
    protected $fillable = [
        'vacancy_ru',
        'vacancy_en',
        'vacancy_oz',
        'title_ru',
        'title_en',
        'title_oz',
        'vacancy_desc_ru',
        'vacancy_desc_en',
        'vacancy_desc_oz',
        'function_ru',
        'function_en',
        'function_oz',
        'requirement_ru',
        'requirement_en',
        'requirement_oz',
        'conditions_ru',
        'conditions_en',
        'conditions_oz',

        'publish_at',
        'tab',
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
    public function getVacancyAttribute()
    {
        $locale = App::getLocale();
        $column = "vacancy_" . $locale;
        return $this->{$column};
    }
    
    public function getVacancyDescAttribute()
    {
        $locale = App::getLocale();
        $column = "vacancy_desc_" . $locale;
        return $this->{$column};
    }
    public function getFunctionAttribute()
    {
        $locale = App::getLocale();
        $column = "function_" . $locale;
        return $this->{$column};
    }
    public function getRequirementAttribute()
    {
        $locale = App::getLocale();
        $column = "requirement_" . $locale;
        return $this->{$column};
    }
    public function getConditionsAttribute()
    {
        $locale = App::getLocale();
        $column = "conditions_" . $locale;
        return $this->{$column};
    }
    public function getSkillsAttribute()
    {
        $locale = App::getLocale();
        $column = "skills_" . $locale;
        return $this->{$column};
    }

}
