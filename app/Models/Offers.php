<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Offers extends BaseModel
{

    protected $table = 'offers';

    protected $guarded = ['id', 'created_at', 'updated_at'];

}