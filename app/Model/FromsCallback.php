<?php namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class FromsCallback extends Model
{
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


    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
