<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Description of New
 *
 * @author Илья
 */
class News extends Model {
    
    protected $table = 'news';
    protected $casts = [
        'images' => 'array',
      ];
}
