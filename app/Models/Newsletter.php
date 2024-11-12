<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /**
     * @var string
     */
    protected $table = 'newsletters';

    /**
     * The attributes that are mass assignable.
     * @var array<int,string>
     */
    protected $fillable = [
        'full_name',
        'email',
    ];
}
