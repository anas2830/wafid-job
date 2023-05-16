<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Auth;

class EasySteps extends BaseModel
{

    protected $table = 'easy-steps';

    protected $guarded = ['id', 'created_at', 'updated_at'];

}