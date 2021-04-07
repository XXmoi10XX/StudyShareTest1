<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelogsTo;

class Article extends Model
{
    return $this->belongsTo('App\User');
}
