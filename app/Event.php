<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
      'user_id','name', 'date', 'place', 'description',
    ];

    protected $visible = [
        'user_id', 'name', 'date', 'place', 'description',
    ];

    protected $tables = 'events';

    /**
     * リレーションシップ - usersテーブル
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id', 'users');
    }
}
