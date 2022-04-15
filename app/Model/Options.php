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
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

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



   

}
