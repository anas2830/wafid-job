<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Service extends BaseModel
{

    protected $table = 'services';

    protected $guarded = ['id', 'created_at', 'updated_at'];

}