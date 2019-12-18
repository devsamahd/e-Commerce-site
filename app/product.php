<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable =['imagePath', 'title', 'description', 'price'];
}
