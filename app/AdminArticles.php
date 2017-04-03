<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminArticles extends Model
{
    public $fillable =['title','auhthor','img_path','content'];
}
