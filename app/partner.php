<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    protected $fillable = ['img', 'title' ,'moreinfo' ,];
    protected $table = 'partners';
}
