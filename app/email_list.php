<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email_list extends Model
{
  protected $fillable = ['email',];
  protected $table = 'email_lists';

}
