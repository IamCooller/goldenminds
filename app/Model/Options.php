<?php namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App;
class Options extends Model
{
    /**
     * @var string
     */
    protected $table = 'options';

    /**
     * @var array
     */
    protected $fillable = [
        'graph_en',
        'graph_ru',
        'graph_oz',
        'address_en',
        'address_ru',
        'address_oz',
        'tel1_en',
        'tel1_ru',
        'tel1_oz',
        'tel2_en',
        'tel2_ru',
        'tel2_oz',
        'email_en',
        'email_ru',
        'email_oz',
        'emailVac',

        

        'map',
        'google_analyt',
        'yandex_met',
        'nip',




        'blogo_en',
        'blogo_ru',
        'blogo_oz',
        'slogo_en',
        'slogo_ru',
        'slogo_oz',
        
        'popupGerb_ru',
        'popupGerb_en',
        'popupGerb_oz',

        'popupFlag_ru',
        'popupFlag_en',
        'popupFlag_oz',

        'popupGimn_ru',
        'popupGimn_en',
        'popupGimn_oz',
        
        'popupGerbTitle_ru',
        'popupGerbTitle_en',
        'popupGerbTitle_oz',

        'popupFlagTitle_ru',
        'popupFlagTitle_en',
        'popupFlagTitle_oz',

        'popupGimnTitle_ru',
        'popupGimnTitle_en',
        'popupGimnTitle_oz',

        'popupGimnImage_ru',
        'popupGimnImage_en',
        'popupGimnImage_oz',

        'popupGerbImage_ru',
        'popupGerbImage_en',
        'popupGerbImage_oz',

        'popupFlagImage_ru',
        'popupFlagImage_en',
        'popupFlagImage_oz',

    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getBlogoAttribute()
    {
        $locale = App::getLocale();
        $column = "blogo_" . $locale;
        return $this->{$column};
    }
    public function getSlogohAttribute()
    {
        
        $locale = App::getLocale();
        $column = "slogo_" . $locale;
        return $this->{$column};
    }

    public function getGraphAttribute()
    {
        $locale = App::getLocale();
        $column = "graph_" . $locale;
        return $this->{$column};
    }

    public function getAddressAttribute()
    {
        $locale = App::getLocale();
        $column = "address_" . $locale;
        return $this->{$column};
    }

    public function getTel1Attribute()
    {
        $locale = App::getLocale();
        $column = "tel1_" . $locale;
        return $this->{$column};
    }

    public function getTel2Attribute()
    {
        $locale = App::getLocale();
        $column = "tel2_" . $locale;
        return $this->{$column};
    }

    public function getEmailAttribute()
    {
        $locale = App::getLocale();
        $column = "email_" . $locale;
        return $this->{$column};
    }


    public function getPopupGerbAttribute()
    {
        $locale = App::getLocale();
        $column = "popupGerb_" . $locale;
        return $this->{$column};
    }

    public function getPopupFlagAttribute()
    {
        $locale = App::getLocale();
        $column = "popupFlag_" . $locale;
        return $this->{$column};
    }

    public function getPopupGimnAttribute()
    {
        $locale = App::getLocale();
        $column = "popupGimn_" . $locale;
        return $this->{$column};
    }


    public function getPopupGerbTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "popupGerbTitle_" . $locale;
        return $this->{$column};
    }

    public function getPopupFlagTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "popupFlagTitle_" . $locale;
        return $this->{$column};
    }

    public function getPopupGimnTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "popupGimnTitle_" . $locale;
        return $this->{$column};
    }

    public function getPopupGimnImageAttribute()
    {
        $locale = App::getLocale();
        $column = "popupGimnImage_" . $locale;
        return $this->{$column};
    }

    public function getPopupGerbImageAttribute()
    {
        $locale = App::getLocale();
        $column = "popupGerbImage_" . $locale;
        return $this->{$column};
    }

    public function getPopupFlagImageAttribute()
    {
        $locale = App::getLocale();
        $column = "popupFlagImage_" . $locale;
        return $this->{$column};
    }


   

}
