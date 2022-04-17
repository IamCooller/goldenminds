<?php namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class FromsCallback extends Model
{
    const NEW_STATUS = 0;
    const APPROVED_STATUS = 1;
    /**
     * @var string
     */
    protected $table = 'formscallback';

    /**
     * @var array
     */
    protected $fillable = [
        'tel',
        'subject',
        'email',
        'name',
        'vacancy',
        'file',
    ];
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    
    public static function getListStatus() 
    {
        return [
            static::NEW_STATUS => 'Новый',
            static::APPROVED_STATUS => 'Обработан'
        ];
    }


    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
