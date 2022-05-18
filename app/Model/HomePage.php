<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App;
class HomePage extends Model
{
    /**
     * @var string
     */
    protected $table = 'homepage';

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
        
       "toptitle_en",
       "toptitle_ru",
       "toptitle_oz",

       "task_img_ru",
         "task_img_oz",
            "task_img_en",

        "background_ru",
        "background_oz",
        "background_en",
        "completed_projects_ru",
        "completed_projects_oz",
        "completed_projects_en",
        "year_market_ru",
        "year_market_oz",
        "year_market_en",
        "million_power_ru",
        "million_power_oz",
        "million_power_en",
        "billion_output_ru",
        "billion_output_oz",
        "billion_output_en",


        "aboutTitle_ru",
        "aboutTitle_oz",
        "aboutTitle_en",
        "realizedTitle_ru",
        "realizedTitle_oz",
        "realizedTitle_en",
        "missionTitle_ru",
        "missionTitle_oz",
        "missionTitle_en",
        "richTitle_ru",
        "richTitle_oz",
        "richTitle_en",
        "leadersTitle_ru",
        "leadersTitle_oz",
        "leadersTitle_en",
        "newsTitle_ru",
        "newsTitle_oz",
        "newsTitle_en",
        "contactTitle_ru",
        "contactTitle_oz",
        "contactTitle_en",

        "taskTitle_ru",
        "taskTitle_oz",
        "taskTitle_en",



            'section_completed_projects_ru',
            'section_completed_projects_en',
            'section_completed_projects_oz',

            'section_year_market_ru',
            'section_year_market_en',
            'section_year_market_oz',

            'section_million_power_ru',
            'section_million_power_en',
            'section_million_power_oz',

            'section_billion_output_ru',
            'section_billion_output_en',
            'section_billion_output_oz',



            
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    
    
    public function getTaskImgAttribute($value)
    {
        $locale = App::getLocale();
        $column = 'task_img_' . $locale;
        return $this->attributes[$column];
    }

    public function getBackgroundAttribute($value)
    {
        $locale = App::getLocale();
        $column = 'background_' . $locale;
        return $this->attributes[$column];
    }

    public function getCompletedProjectsAttribute($value)
    {
        $locale = App::getLocale();
        $column = 'completed_projects_' . $locale;
        return $this->attributes[$column];
    }

    public function getYearMarketAttribute($value)
    {
        $locale = App::getLocale();
        $column = 'year_market_' . $locale;
        return $this->attributes[$column];
    }

    public function getMillionPowerAttribute($value)
    {
        $locale = App::getLocale();
        $column = 'million_power_' . $locale;
        return $this->attributes[$column];
    }

    public function getBillionOutputAttribute($value)
    {
        $locale = App::getLocale();
        $column = 'billion_output_' . $locale;
        return $this->attributes[$column];
    }



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



    public function getAboutTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "aboutTitle_" . $locale;
        return $this->{$column};
    }

    public function getRealizedTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "realizedTitle_" . $locale;
        return $this->{$column};
    }

    public function getMissionTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "missionTitle_" . $locale;
        return $this->{$column};
    }

    public function getRichTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "richTitle_" . $locale;
        return $this->{$column};
    }

    public function getLeadersTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "leadersTitle_" . $locale;
        return $this->{$column};
    }

    public function getNewsTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "newsTitle_" . $locale;
        return $this->{$column};
    }

    public function getContactTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "contactTitle_" . $locale;
        return $this->{$column};
    }


    public function getTaskTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "taskTitle_" . $locale;
        return $this->{$column};
    }

    public function getSectionCompletedProjectsAttribute()
    {
        $locale = App::getLocale();
        $column = "section_completed_projects_" . $locale;
        return $this->{$column};
    }
  
    public function getSectionYearMarketAttribute()
    {
        $locale = App::getLocale();
        $column = "section_year_market_" . $locale;
        return $this->{$column};
    }

    public function getSectionMillionPowerAttribute()
    {
        $locale = App::getLocale();
        $column = "section_million_power_" . $locale;
        return $this->{$column};
    }

    public function getSectionBillionOutputAttribute()
    {
        $locale = App::getLocale();
        $column = "section_billion_output_" . $locale;
        return $this->{$column};
    }


   
   

}
