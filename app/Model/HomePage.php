<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class HomePage extends Model
{
    /**
     * @var string
     */
    protected $table = 'homePage';

    /**
     * @var array
     */
    protected $fillable = [
        "title_en",
        "title_oz",
        "title_ru",
        "description_en",
        "description_ru",
        "description_oz",
       "keywords_en",
       "keywords_ru",
       "keywords_oz",

       "h1_en",
       "h1_ru",
       "h1_oz",

        "completed_projects",
        "year_market",
        "million_power",
        "billion_output",
        
       "about_en",
       "about_ru",
       "about_oz",

         

       "mission_en",
       "mission_oz",
       "mission_ru",


       "compitence_1_en",
       "compitence_1_oz",
       "compitence_1_ru",
        
       "compitence_2_en",
       "compitence_2_oz",
       "compitence_2_ru",

       "compitence_3_en",
       "compitence_3_oz",
       "compitence_3_ru",

        "task_1_en",
       "task_1_oz",
       "task_1_ru",
       "task_2_en",
       "task_2_oz",
       "task_2_ru",
       "task_3_en",
       "task_3_oz",
       "task_3_ru",
       "task_4_en",
       "task_4_oz",
       "task_4_ru",
       "task_5_en",
       "task_5_oz",
       "task_5_ru",
        
       "task_img",

         "toptitle_en",
        "toptitle_ru",
        "toptitle_oz",
        "background",
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
    public function getTopTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "toptitle_" . $locale;
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
   
    public function getMissionAttribute()
    {
        $locale = App::getLocale();
        $column = "mission_" . $locale;
        return $this->{$column};
    }

    public function getAboutAttribute()
    {
        $locale = App::getLocale();
        $column = "about_" . $locale;
        return $this->{$column};
    }

    

    public function getCompitence1Attribute()
    {
        $locale = App::getLocale();
        $column = "compitence_1_" . $locale;
        return $this->{$column};
    }

    public function getCompitence2Attribute()
    {
        $locale = App::getLocale();
        $column = "compitence_2_" . $locale;
        return $this->{$column};
    }

    public function getCompitence3Attribute()
    {
        $locale = App::getLocale();
        $column = "compitence_3_" . $locale;
        return $this->{$column};
    }

    public function getTask1Attribute()
    {
        $locale = App::getLocale();
        $column = "task_1_" . $locale;
        return $this->{$column};
    }
    public function getTask2Attribute()
{
        $locale = App::getLocale();
        $column = "task_2_" . $locale;
        return $this->{$column};
    }
    public function getTask3Attribute()
    {
        $locale = App::getLocale();
        $column = "task_3_" . $locale;
        return $this->{$column};
    }
    public function getTask4Attribute()
    {
        $locale = App::getLocale();
        $column = "task_4_" . $locale;
        return $this->{$column};
    }
    public function getTask5Attribute()
    {
        $locale = App::getLocale();
        $column = "task_5_" . $locale;
        
        return $this->{$column};
    }

    
   

}
