<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPage extends Model
{
    protected $guarded = [];
    /**
     * The database table used by the model.
     *
     * @var string
     *
     */
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['title', 'category', 'description','state','update_by'];
}
