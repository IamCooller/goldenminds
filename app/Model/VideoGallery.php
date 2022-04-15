<?php namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    /**
     * @var string
     */
    protected $table = 'videogallery';

    /**
     * @var array
     */
    protected $fillable = [
        'image',
        'images',
        'title',
        'data',
    
    ];


    /**
     * @var array
     */
    protected $hidden = [
        'publish_at',
        'created_at',
        'updated_at'
    ];

   
   
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public function isAuthor(User $user)
    {
        return ! is_null($author = $this->author) && $author->id == $user->id;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_contact', 'contact_id');
    }

    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->firstName.' '.$this->lastName;
    }

    /**
     * @param array $companies
     */
    public function setCompaniesAttribute($companies)
    {
        $this->companies()->detach();
        if (! $companies) {
            return;
        }

        if (! $this->exists) {
            $this->save();
        }

        $this->companies()->attach($companies);
    }

}
