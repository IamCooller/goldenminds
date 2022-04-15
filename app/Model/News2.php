<?php namespace App\Model;
use App;
class News2 extends News
{
    protected $fillable = [
        'title',
        'image',
        'images',
   
    ];
    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function setImagesAttribute($images)
    {
        $this->attributes['images'] = implode(',', $images);
    }


}
