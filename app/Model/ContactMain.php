<?php namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class ContactMain extends Model
{
    /**
     * @var string
     */
    protected $table = 'contact';

    /**
     * @var array
     */
    protected $fillable = [
        'tel1',
        'tel2',
        'email',
        'birthday',
        'text',
        'address',
        'map',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
