<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenders extends Model
{
    use HasFactory;
    protected $table = 'tenders';
    protected $casts = [
        'files' => 'array',
      ];

}
