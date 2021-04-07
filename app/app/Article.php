<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{

    protected $fillable = [
        'title',
        'body'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
    public function book(): BelongsTo
    {
        return $this->belongsTo('App\Book');
    }
    public function reply()
    {
        return $this->hasMany('App\Reply');
    }
}
