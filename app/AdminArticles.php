<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminArticles extends Model
{
    public $fillable =['title','author','img_path','content'];
}
